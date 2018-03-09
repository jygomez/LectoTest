@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Mi catálogo de respuestas
                        <a href="{{route('answers.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                        @if($answer_list->count() == 0)
                            No hay respuestas creadas.
                        @else
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th width='5%'>Id</th>
                                        <th width='65%'>Respuestas</th>
                                        <th class='text-center' colspan='2'>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($answer_list as $answer)
                                        <tr>
                                            <td>{{$answer->id}}</td>

                                            <td>{{$answer->answer_text}}</td>

                                            <td width='25%'>
                                                <a href="{{route('answers.show', $answer->id)}}" class='btn btn-sm btn-default'>ver</a>
                                                <a href="{{route('answers.edit', $answer->id)}}" class='btn btn-sm btn-default'>editar</a>
                                            
                                                <td width='5%'>
                                                    {!! Form::open(['route' => ['answers.destroy', $answer->id], 'method'=>'DELETE']) !!}
                                                        <button class='btn btn-sm btn-danger'>
                                                            eliminar
                                                        </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        @endif

                        {{$answer_list->render()}}

                        <p>
                            <a class='pull-right' href="{{route('all_answers_list')}}">Ver todas las respuestas</a>
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop