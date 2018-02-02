@extends('layouts.app');

@section('content')

<div class='col-md-8 col-md-offset-2'>    
    <div class="panel panel-primary">

        <div class="panel-heading panel-title">
            Catálogo de preguntas del usuario
        </div>

        <div class="panel-body">
            @forelse($questions as $question)
            <p>
                {{$question->question_header}}
                <br>            
            @empty
                <div class="col-6">
                    Esta usuario no ha creado ninguna pregunta aún.
                </div>
            </p>
            @endforelse            
        </div>

        <div class="panel-footer">
            <a href="{{ url()->previous() }}">Atrás</a>
        </div>

    </div>
</div>

@stop