@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Lista de preguntas
                        <a href="{{route('questions.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                        @if($question_list->count() == 0)
                            No hay preguntas creadas.
                        @else
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th width='10px'>Id</th>
                                        <th>Encabezado</th>
                                        <th>Pregunta</th>
                                        <th colspan='3'>&nbsp;</th>
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
                                            <td width="10px">
                                                <a href="{{route('questions.show', $question->id)}}" class='btn btn-sm btn-default'>ver</a>
                                            </td>
                                            <td width="10px">
                                                <a href="{{route('questions.edit', $question->id)}}" class='btn btn-sm btn-default'>editar</a>
                                            </td>
                                            <td width="10px">
                                                {!! Form::open(['route' => ['questions.destroy', $question->id], 'method'=>'DELETE']) !!}
                                                    <button class='btn btn-sm btn-danger'>
                                                        eliminar
                                                    </button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        @endif

                        {{$question_list->render()}}

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop