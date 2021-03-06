<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TestStoreRequest;
use App\Http\Requests\TestUpdateRequest;

use App\User;
use App\Test;
use App\Question;
use App\Question_Test;
use App\Answer_Question_Test;


class TestController extends Controller
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

        // $user_id = auth()->user()->id;
        $test_list = Test::orderBy('id','ASC')->where('user_id', Auth::id())->paginate(5);
        
        return view('admin.tests.index', compact('test_list'));
    }


    
    public function index_all() 
    {
        $test_list = Test::orderBy('id','ASC')->paginate(20);

        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';
        }
        
        return view('admin.tests.index_all', compact('test_list'));
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

        return view('admin.tests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestStoreRequest $request) // salva los datos insertados en el formulario, es decir, mete el test en la BD.
    {
        //$user_id = Auth::user()->id;
        //$user_id = Auth::id();
        
        $test = Test::create(
            [
                'user_id' => Auth::id(),
                'test_name' => $request->input('test_name'),
                'test_value' => $request->input('test_value'),
                'min_to_approve' => $request->input('min_to_approve'),
                'time' => $request->input('time'),
                'time_control' => $request->input('time_control'),
                'update_test_user_id' => Auth::id(),
            ]);

        return redirect()->route('show_questions_to_add', $test->id)
                         ->with('info', 'Cuestionario creado satifactoriamente con ID: '.$test->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);
        $user = User::find($test->user_id);

        return view('admin.tests.show', compact('test', 'user'));
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
        
        $test = Test::find($id);

        return view('admin.tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TestUpdateRequest $request, $id)
    {
        // Validaciones

        //$user_id = Auth::id();
        $test = Test::find($id);

        $test->update(
        [
            'test_name' => $request->input('test_name'),
            'test_value' => $request->input('test_value'),
            'min_to_approve' => $request->input('min_to_approve'),
            'time' => $request->input('time'),
            'time_control' => $request->input('time_control'),
            'update_test_user_id' => Auth::id(),
        ]);

        return redirect()->route('tests.edit', $test->id)
                         ->with('info', 'Cuestionario '.$test->test_name.' actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test_to_delete = Test::find($id)->test_name;
        $test = Test::find($id)->delete();

        return back()->with('info', 'Cuestionario '.$test_to_delete.' eliminado correctamente');
    }


    public function show_questions_test($id)
    {
        $test = Test::where('id', $id)->first();
        
        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';            
        }

        return view('admin.tests.questions_test', compact('test'));
    }


    public function show_questions_to_test($id)
    {
        if(Gate::allows('is_student'))
        {
            return 'Acceso no autorizado';            
        }
        
        $test = Test::find($id);
        $question_list = Question::orderBy('id','ASC')->paginate(20);

        return view('admin.tests.show_questions_to_add', compact('test', 'question_list'));
    }


    public function add_questions_to_test(Request $request, $test_id, $quest_id)
    {
        $question_list = Question::orderBy('id','ASC')->paginate(20);
        
        $test = Test::find($test_id);
        $question = Question::find($quest_id);
        
        Question_Test::create([
            'question_value' => $request->input('question_value'),
            'test_id' => $test_id,
            'question_id' => $quest_id,
        ]);
        
        // dd($insert->question_value);
        // $test->questions()->attach($question->id, ['question_value' => $qv]);

        return redirect()->route('show_questions_to_add', $test->id)
                         ->with('info', 'Pregunta '.$question->id.' agregada con éxito al cuestionario '.$test->id);
    }



    public function calification(Request $request, $test_id)
    {
        $user = Auth::user();
        $test = Test::find($test_id);

        $qt_elements = Question_Test::where('test_id', $test_id)->get();
        $qt_ids = $qt_elements->map(function ($qt, $key) {
            return $qt->id;
        });
        
        $aqt_elements = Answer_Question_Test::whereIn('question_test_id', $qt_ids)->get();        
        $aqt_ids = $aqt_elements->map(function ($aqt, $key) {
            return $aqt->id;
        });
        
        $aqtu_elements = $user->answer_question_tests()->whereIn('answer_question_test_id', $aqt_ids)->get();
        $answers_points = $aqtu_elements->map(function ($aqtu, $key) {
            return $aqtu->pivot->answer_points;
        });
        
        $student_points = $answers_points->sum();
        $total_questions_points = Question_Test::where('test_id', $test_id)->sum('question_value');
        
        $student_calification = $student_points*$test->test_value/$total_questions_points;
        if($student_calification >= $test->min_to_approve)
        {
            $approve = true;
        }
        else
        {
            $approve = false;
        }

        $user->tests()->attach($test->id, ['user_points' => $student_points, 'total_points' => $total_questions_points, 'calification' => $student_calification, 'approved' => $approve]);
        
	    return view('admin.tests.calification');
    }


    public function show_test_student($test_id)
    {
        $test = Test::find($test_id);
        $test_elements = $test->users()->where('test_id', $test->id)->get();
        
        return view('admin.tests.show_users', compact('test', 'test_elements'));
    }

}