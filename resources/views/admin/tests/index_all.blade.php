@extends('layouts.app')

@section('content')


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
                        <th width='5%'>Id</th>
                        <th width='60%'>Nombre</th>
                        <th width='35%' class='text-center' colspan='2' class='text-center'>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($test_list as $test)
                        <tr>
                            <td>{{$test->id}}</td>

                            <td>{{$test->test_name}}</td>

                            <td class="text-center">
                          
                            {!! Form::open(['route' => ['tests.destroy', $test->id], 'method'=>'DELETE']) !!}
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="{{route('tests.show', $test->id)}}" class='btn btn-sm btn-default'>ver</a>

                                @can('update_test', $test)
                                    <a href="{{route('tests.edit', $test->id)}}" class='btn btn-sm btn-default'>editar</a>

                                    <button class='btn btn-sm btn-danger'>
                                        eliminar
                                    </button>
                                      
                                @endcan
                            </div>
                            {!! Form::close() !!}
                            </td>
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


@stop