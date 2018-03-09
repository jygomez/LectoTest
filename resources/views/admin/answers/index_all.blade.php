@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Listado de Respuestas
                        <a href="{{route('answers.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                    {{$answer_list->render()}}
                    <a class='pull-right' href="{{route('answers.index')}}">Volver a tu catálogo</a>

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

                                                @can('update_answer', $answer)
                                                    <a href="{{route('answers.edit', $answer->id)}}" class='btn btn-sm btn-default'>editar</a>
                                                
                                                    <td width='5%'>
                                                        {!! Form::open(['route' => ['answers.destroy', $answer->id], 'method'=>'DELETE']) !!}
                                                            <button class='btn btn-sm btn-danger'>
                                                                eliminar
                                                            </button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        @endif

                        {{$answer_list->render()}}

                        <p>
                            <a class='pull-right' href="{{route('answers.index')}}">Volver a tu catálogo</a>
                        </p>


                    </div>

                </div>
            </div>
        </div>
    </div>

@stop