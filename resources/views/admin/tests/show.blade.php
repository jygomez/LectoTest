@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-primary'>
                    
                    <div class='panel-heading'>
                        <h4>Detalles del cuestionario <strong>{{$test->test_name}}</strong></h4>
                    </div>                
                

                    <div class='panel-body'>
                        <p><strong>Nombre: </strong>{{$test->test_name}}</p>
                        <p>
                            <strong>Cantidad de preguntas: </strong>{{$test->questions->count()}}
                            <small><small><a href="">ver preguntas</a></small></small>
                        </p>
                        <p><strong>Creado por: </strong>{{$test->users->get(0)->username}}</p>
                        <p><strong>Valor del cuestionario: </strong>{{$test->test_value}}</p>
                        <p><strong>Mínimo aprobado: </strong>{{$test->min_to_approve}}</p>
                        <p><strong>Control de tiempo: </strong>
                            @if($test->time_control == 0)
                                No.
                            @else
                                {{$test->time}}
                            @endif
                        </p>
                        <p><strong>Fecha creación: </strong>{{$test->created_at}}</p>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

@stop