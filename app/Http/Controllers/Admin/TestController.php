<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TestStoreRequest;
use App\Http\Requests\TestUpdateRequest;

use App\User;
use App\Test;
use App\Question;
use App\Question_Test;

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
        $test_list = Test::orderBy('id','ASC')
        ->where('user_id',auth()->user()->id)
        ->paginate(5);
        //dd($test_list);
        return view('admin.tests.index', compact('test_list'));
    }


    
    public function index_all() 
    {
        $test_list = Test::orderBy('id','ASC')->paginate(20);
        //dd($test_list);
        return view('admin.tests.index_all', compact('test_list'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // muestra el formulario para crearlo
    {
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
        $user_id = Auth::id();
        //dd($user_id);
        $test = Test::create(
            [
                'user_id' => $user_id,
                'test_name' => $request->input('test_name'),
                'test_value' => $request->input('test_value'),
                'min_to_approve' => $request->input('min_to_approve'),
                'time' => $request->input('time'),
                'time_control' => $request->input('time_control'),
                'update_test_user_id' => $user_id,
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
        // dd($user);
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

        $test = Test::find($id);
        $user_id = Auth::id();

        $test->update(
        [
            'test_name' => $request->input('test_name'),
            'test_value' => $request->input('test_value'),
            'min_to_approve' => $request->input('min_to_approve'),
            'time' => $request->input('time'),
            'time_control' => $request->input('time_control'),
            'update_test_user_id' => $user_id,
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

        return view('admin.tests.questions_test', compact('test'));
    }


    public function show_questions_to_test($id)
    {
        $test = Test::find($id);
        $question_list = Question::orderBy('id','ASC')->paginate(20);

        return view('admin.tests.show_questions_to_add', compact('test', 'question_list'));
    }


    public function add_questions_to_test(Request $req, $test_id, $quest_id)
    {
        $test = Test::find($test_id);
        $question = Question::find($quest_id);
        $insert = Question_Test::create([
            'question_value' => $req->input('question_value'),
            'test_id' => $test->id,
            'question_id' => $question->id,
        ]);
        // dd($insert->question_value);
        // $test->questions()->attach($question->id, ['question_value' => $qv]);
        $question_list = Question::orderBy('id','ASC')->paginate(20);

        return view('admin.tests.show_questions_to_add', compact('test', 'question', 'question_list'));
    }
}