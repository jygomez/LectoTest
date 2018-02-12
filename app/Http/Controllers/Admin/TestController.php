<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TestStoreRequest;
use App\Http\Requests\TestUpdateRequest;
use App\Http\Controllers\Controller;

use App\Test;
use App\User;

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
        $test_list = Test::orderBy('id','ASC')->paginate(5);
        //dd($test_list);
        return view('admin.tests.index', compact('test_list'));
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
            ]
        );

        return redirect()->route('tests.edit', $test->id)
                         ->with('info', 'Cuestionario creado con éxito');
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
        // dd($test);
        return view('admin.tests.show', compact('test'));
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

        $test->fill($request->all())->save();

        return redirect()->route('tests.edit', $test->id)
                         ->with('info', 'Cuestionario.$test.actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id)->delete();

        return back()->with('info', 'Cuestionario eliminado correctamente');
    }
}