@extends('layouts.app')

@section('content')

                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Mi catálogo de preguntas
                        <a href="{{route('questions.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                        @if($question_list->count() == 0)
                            No hay preguntas creadas.
                        @else
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th width='5%'>Id</th>
                                        <th width='25%'>Encabezados</th>
                                        <th width='40%' class='text-center'>Preguntas</th>
                                        <th class='text-center' colspan='2'>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($question_list as $question)
                                        <tr>
                                            <td>{{$question->id}}</td>

                                            <td>
                                            @if($question->question_header)
                                                {{$question->question_header}}
                                            @else
                                                <div class="text-info">Pregunta sin encabezado.</div>
                                            @endif
                                            </td>

                                            <td>{{$question->question_text}}</td>

                                            <td width='25%'>
                                            {!! Form::open(['route' => ['questions.destroy', $question->id], 'method'=>'DELETE']) !!}
                                            <div class="btn-group" role="group" aria-label="...">
                                                <a href="{{route('questions.show', $question->id)}}" class='btn btn-sm btn-default'>ver</a>
                                                <a href="{{route('questions.edit', $question->id)}}" class='btn btn-sm btn-default'>editar</a>
                                                <button class='btn btn-sm btn-danger'>
                                                    eliminar
                                                </button>
                                            </div>
                                            {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        @endif

                        {{$question_list->render()}}
                        
                        <p>
                            <a class='pull-right' href="{{route('all_questions_list')}}">Ver todas las preguntas</a>
                        </p>

                    </div>

                </div>
        
@stop