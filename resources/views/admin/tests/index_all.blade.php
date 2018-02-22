@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Listado de cuestionarios
                        <a href="{{route('tests.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                    {{$test_list->render()}}
                    <a class='pull-right' href="{{route('tests.index')}}">Volver a tu catálogo</a>
                        
                        @if($test_list->count() == 0)
                            No hay cuestionarios creados.
                        @else
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th width='10px'>Id</th>
                                        <th>Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($test_list as $test)
                                        <tr>
                                            <td>{{$test->id}}</td>
                                            <td>{{$test->test_name}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        @endif

                        {{$test_list->render()}}

                        <p>
                            <a class='pull-right' href="{{route('tests.index')}}">Volver a tu catálogo</a>
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop