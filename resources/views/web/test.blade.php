@extends('layouts.app');

@section('content')

<div class='col-md-8 col-md-offset-2'>    
    <div class="panel panel-primary">

        <div class="panel-heading panel-title">
            Detalles del cuestionario <strong>{{$test->test_name}}</strong>
            <a href='{{route("test_list")}}' class="pull-right">Atrás</a>
        </div>

        <div class="panel-body">
            @forelse($test->questions as $question)
            <p>
                <a href="{{route('question_tests', $question->id)}}">Pregunta {{$question->id}}</a>
                <br>
                @if($question->question_header)
                    Enunciado: {{$question->question_header}}
                @else
                Enunciado: - 
                @endif
                <br>

                @if($question->question_image)
                    <img src="{{$question->question_image}}" class="img-responsive">
                @endif
                <br>

                Pregunta: {{$question->question_text}}
                <br>

                <small>Creada por: <a href="{{route('user_questions', $question->user->id)}}">{{$question->user->username}}</a> el <small>{{$question->created_at}}</small></small>
            
                @empty
                    <div class="col-6">
                        No hay preguntas para mostrar.
                    </div>
            </p>
            @endforelse            
        </div>

        <div class="panel-footer">
            <div>
                Mínimo para aprobar: {{ $test->min_to_approve }}                
            </div>
            @if($test->time_control == 1)
                Tiempo para rendir: {{$test->time}}
            @else
            Sin control de tiempo.
            @endif
            <a href='{{route("test_list")}}' class="pull-right">Atrás</a>
        </div>

    </div>
</div>

@stop