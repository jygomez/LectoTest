<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;

use App\Question;
use App\User;

class QuestionController extends Controller
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
        $question_list = Question::orderBy('id','ASC')->paginate(10);
        //dd($question_list);
        return view('admin.questions.index', compact('question_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // muestra el formulario para crearlo
    {
        return view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionStoreRequest $request) // salva los datos insertados en el formulario, es decir, mete el question en la BD.
    {
        // 2 formas para obtener el id del usuario logueado
        $user_id = Auth::id();
        //$user_id = Auth::user()->id;

        $question = Question::create(
            [
                'user_id' => $user_id,
                'question_header' => $request->input('question_header'),
                'question_text' => $request->input('question_text'),
                'update_question_user_id' => $user_id,
            ]);
            
        if($request->hasFile('question_image'))
        {
            $question->question_image = $request->file('question_image')->store('public');
        }

        $question->save();
        
        // Otra forma para subir una imagen
        // $file = $request->file('question_image');
        // $file_name = time()."_".$file->getClientOriginalName();
        // \Storage::disk('local')->put($file_name,  \File::get($file));


        return redirect()->route('questions.edit', $question->id)
                         ->with('info', 'Pregunta creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);

        $user = User::find($question->user_id);
        // dd($user);
        return view('admin.questions.show', compact('question', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);

        return view('admin.questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionUpdateRequest $request, $id)
    {

        $question = Question::find($id);
        
        $user_id = Auth::id();

        if($request->hasFile('question_image'))
        {
            $question->question_image = $request->file('question_image')->store('public');
        }

        // Otra forma para subir una imagen
        // $file = $request->file('question_image');
        // $file_name = time()."_".$file->getClientOriginalName();
        // \Storage::disk('local')->put($file_name,  \File::get($file));

        $question->update([
            'question_header' => $request->input('question_header'),
            'question_text' => $request->input('question_text'),
            'update_question_user_id' => $user_id,
        ]);

        return redirect()->route('questions.edit', $question->id)
                         ->with('info', 'Pregunta.$question.actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id)->delete();

        return back()->with('info', 'Pregunta eliminada correctamente');
    }
}