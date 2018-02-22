@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Listado de preguntas
                        <a href="{{route('questions.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                    {{$question_list->render()}}
                    <a class='pull-right' href="{{route('questions.index')}}">Volver a tu catálogo</a>

                        @if($question_list->count() == 0)
                            No hay preguntas creadas.
                        @else
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th width='10px'>Id</th>
                                        <th>Encabezados</th>
                                        <th>Preguntas</th>
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
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        @endif

                        {{$question_list->render()}}

                        <p>
                            <a class='pull-right' href="{{route('questions.index')}}">Volver a tu catálogo</a>
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>

@stop