<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnswerStoreRequest;
use App\Http\Requests\AnswerUpdateRequest;

use App\User;
use App\Test;
use App\Answer;

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
        $answer_list = Answer::orderBy('id','ASC')
        ->where('user_id', auth()->user()->id)
        ->paginate(10);
        //dd($answer_list);
        return view('admin.answers.index', compact('answer_list'));
    }


    public function index_all() 
    {
        $answer_list = Answer::orderBy('id','ASC')->paginate(20);
        //dd($answer_list);
        return view('admin.answers.index_all', compact('answer_list'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // muestra el formulario para crearlo
    {
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
}