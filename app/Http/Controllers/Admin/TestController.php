<?php

namespace App\Http\Controllers\Admin;

use Iluminate\Http\Request;
use App\Http\Requests\TestStoreRequest;
use App\Http\Requests\TestUpdateRequest;
use App\Http\Controllers\Controller;

use App\Test;

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
        // Validaciones

        $test = Test::create($request->all());

        return redirect()->route('admin.tests.edit', $test->id)
                         ->with('info', 'Cuestionario.$test.creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::where('id');

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
        $test = Test::where('id');

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

        $test = Test::where('id');

        $test->fill($request->all())->save();

        return redirect()->route('admin.tests.edit', $test->id)
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

        return back()->with('info', 'Cuestionario.$test.eliminado correctamente');
    }
}