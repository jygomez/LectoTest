<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnswerStoreRequest;
use App\Http\Requests\AnswerUpdateRequest;

use App\User;
use App\Test;
use App\Answer;
use App\Question;
use App\Question_Test;
use App\Answer_Question_Test;


class AnswerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';
        }

        $user_id =auth()->user()->id;
        $answer_list = Answer::orderBy('id','ASC')->where('user_id', $user_id)->paginate(10);

        return view('admin.answers.index', compact('answer_list'));
    }


    public function index_all() 
    {
        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';
        }

        $answer_list = Answer::orderBy('id','ASC')->paginate(20);

        return view('admin.answers.index_all', compact('answer_list'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // muestra el formulario para crearlo
    {
        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';
        }

        return view('admin.answers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnswerStoreRequest $request) // salva los datos insertados en el formulario, es decir, mete el answer en la BD.
    {
        //$user_id = Auth::user()->id;
        $user_id = Auth::id();
        //dd($user_id);
        $answer = Answer::create(
            [
                'user_id' => $user_id,
                'answer_text' => $request->input('answer_text'),
                'update_answer_user_id' => $user_id,
            ]
        );

        return redirect()->route('answers.edit', $answer->id)
                         ->with('info', 'Respuesta creada satifactoriamente con ID: '.$answer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $answer = Answer::find($id);

        $user = User::find($answer->user_id);
        // dd($user);
        return view('admin.answers.show', compact('answer', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';
        }
        
        $answer = Answer::find($id);

        return view('admin.answers.edit', compact('answer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnswerUpdateRequest $request, $id)
    {
        // Validaciones

        $answer = Answer::find($id);

        $answer->fill($request->all())->save();

        return redirect()->route('answers.edit', $answer->id)
                         ->with('info', 'Respuesta '.$answer->id.' actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer_to_delete = Answer::find($id)->id;
        $answer = Answer::find($id)->delete();

        return back()->with('info', 'Pregunta '.$answer_to_delete.' eliminada correctamente');
    }


    public function show_answers_to_test($test_id, $quest_id)
    {
        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';
        }

        $test = Test::find($test_id);
        $question = Question::find($quest_id);
        $answers_list = Answer::orderBy('id','ASC')->paginate(20);

        $qt_element = Question_Test::where([
            ['test_id', $test_id],
            ['question_id', $quest_id],
        ])->first();
        
        $aqt_answer_id = Answer_Question_Test::where('question_test_id', $qt_element->id)->select('answer_id')->get();
        
        // Devuelve la colección de respuestas de la tabla Answers a partir de los id que se pasan desde la variable de arriba (aqt_answer_id).
        $answers = Answer::find($aqt_answer_id); 
        
        // $aqt_id = Answer_Question_Test::where('question_test_id', $qt_element->id)->select('id');

        return view('admin.answers.show_answers_to_add', compact('test', 'question', 'answers', 'answers_list'));
    }


    public function add_answers_to_test(Request $request, $answer_id)
    {
        $answers_list = Answer::orderBy('id','ASC')->paginate(20);        
        
        // Haciendo uso del metodo union() se puede crear un query con multiples condiciones, en este caso 2.
        // $q_id = Question_Test::where('question_id', $request->quest_id);
        // $t_id = Question_Test::where('test_id', $request->test_id)->union($q_id)->first();

        // Esta sintaxis provee de otra forma de crear un query con multiples condiciones
        $qt_id = Question_Test::where([
            ['test_id', $request->test_id],
            ['question_id', $request->quest_id],
        ])->first();

        $test_id = $request->test_id;
        $test = Test::find($test_id);

        $question_id = $request->quest_id;
        $question = Question::find($question_id);

        $answer = Answer::find($answer_id);

        Answer_Question_Test::create([
            'question_test_id' => $qt_id->id,
            'answer_id' => $answer->id,
            'correct_answer' => 0,
        ]);
        // dd($insert->question_value);
        // $test->questions()->attach($question->id, ['question_value' => $qv]);

        return redirect()->route('show_answers_to_add', [$test->id, $question->id])
                         ->with('info', 'Respuesta '.$answer->id.' agregada con éxito a la pregunta '.$question->id);
    }


    public function update_aqt_table(Request $request, $id)
    {
        $correct_answer = Answer::find($id);

        $quetest_id = Question_Test::where([
            ['test_id', $request->test_id],
            ['question_id', $request->quest_id],
        ])->first();

        $aqt_element = Answer_Question_Test::where([
            ['question_test_id', $quetest_id->id],
            ['answer_id', $id],
        ])->first();
        
        $aqt_element->update([
            'question_test_id' => $aqt_element->question_test_id,
            'answer_id' => $id,
            'correct_answer' => 1,
        ]);

        return redirect()->route('show_answers_to_add', [$request->test_id, $request->quest_id])
                         ->with('info', 'La respuesta '.$correct_answer->id.' se ha seleccionado como correcta.');
    }
}