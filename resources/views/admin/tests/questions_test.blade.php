@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='col-md-8 col-md-offset-2'>    
        <div class="panel panel-primary">

            <div class="panel-heading panel-title">
                Preguntas del cuestionario <strong>"{{$test->test_name}}"</strong>
            </div>

            <div class="panel-body">
                <a href="{{route('tests.show', $test->id)}}" class="pull-right"><small>Volver a detalles del cuestionario</small></a>

                <table class='table table-striped table-hover'>
                    <thead>
                        <tr>
                            <th class='text-center' width='10px'>Id</th>
                            <th class='text-center'>Pregunta</th>
                            <th class='text-center'>Imagen</th>
                            <th class='text-center' width='10px'>Valor</th>
                            <th class='text-center'>Creador</th>
                            <th class='text-center' colspan='3'>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($test->questions as $question)
                            <tr>
                                <td>{{$question->id}}</td>

                                <td width='300px'>
                                    @if($question->question_header)
                                        <strong> Encabezado: </strong> {{$question->question_header}}
                                    @else
                                        <div class="text-info">Pregunta sin encabezado.</div>
                                    @endif
                                    <br>
                                    {{$question->question_text}}
                                </td>

                                <td>
                                    @if($question->question_image)
                                        <img width='50px' class='img-responsive' width='500px' src="{{Storage::url($question->question_image)}}">
                                    @endif
                                </td>

                                <td class='text-center'>
                                    {{$question->pivot->question_value}}
                                </td>

                                <td class='text-center' width='100px'>
                                    <small><a href="{{route('user_questions', $question->user->id)}}">{{$question->user->username}}</a><br>
                                    <small>{{$question->created_at}}</small></small>
                                </td>

                                <td width="10px">
                                    <a href="{{route('questions.edit', $question->id)}}" class='btn btn-sm btn-default'>respuestas</a>
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

                        @empty
                        <div class="col-6">
                            No hay preguntas para mostrar.
                        </div>
                    </tbody>
                    @endforelse
                </table>

                <a href="{{route('tests.show', $test->id)}}" class="pull-right"><small>Volver a detalles del cuestionario</small></a>
                <br><br>
                <a href="{{route('show_questions_to_add', $test->id)}}" class='btn btn-sm btn-primary pull-right'>agregar preguntas</a>
            </div>

        </div>
    </div>

</div>

@stop