@extends('layouts.app');

@section('content')

<div class='col-md-8 col-md-offset-2'>    
    <div class="panel panel-primary">

        <div class="panel-heading panel-title">
            <a href="{{ url()->previous() }}">Atrás</a>
            <br>
            @include('web.templates.questions')
        </div>

        <div class="panel-body">
            <h3>Cuestionarios que contienen la pregunta {{$question->id}}</h3>
            @forelse($tests as $test)
            <p>
                {{$test->id}}: {{$test->test_name}}

            @empty
                <div class="col-6">
                    Esta pregunta no ha sido utilizada aún.
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