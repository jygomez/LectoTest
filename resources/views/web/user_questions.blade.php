@extends('layouts.app');

@section('content')

<div class='col-md-8 col-md-offset-2'>    
    <div class="panel panel-primary">

        <div class="panel-heading panel-title">
            <a class="pull-right" href="{{ url()->previous() }}">Atrás</a>
            Catálogo de preguntas de {{$user->username}}
        </div>

        <div class="panel-body">
            @foreach($questions as $question)
                @include('web.partials.questions')
            @endforeach         
        </div>

        <div class="panel-footer">
            <a href="{{ url()->previous() }}">Atrás</a>
        </div>

    </div>
</div>

@stop