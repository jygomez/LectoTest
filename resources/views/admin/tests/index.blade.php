@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Lista de cuestionarios
                        <a href="{{route('tests.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                        <table class='table table-striped table-hover'>
                            <thead>
                                <tr>
                                    <th width='10px'>Id</th>
                                    <th>Nombre</th>
                                    <th colspan='3'>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($test_list as $test)
                                    <tr>
                                        <td>{{$test->id}}</td>
                                        <td>{{$test->test_name}}</td>
                                        <td width="10px">
                                            <a href="{{route('tests.show', $test->id)}}" class='btn btn-sm btn-default'>ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{route('tests.edit', $test->id)}}" class='btn btn-sm btn-default'>editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['tests.destroy', $test->id], 'method'=>'DELETE']) !!}
                                                <button class='btn btn-sm btn-danger'>
                                                    eliminar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$test_list->render()}}

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop