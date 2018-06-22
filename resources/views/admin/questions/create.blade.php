@extends('layouts.app')

@section('content')

<div class='panel panel-primary'>
    
    <div class='panel-heading'>
        Crear nueva pregunta
    </div>                


    <div class='panel-body'>
        <!-- Con esta sintaxis se indica que se va a utilizar un formulario -->
        {!! Form::open(['route'=>'questions.store', 'enctype'=>'multipart/form-data']) !!}
            @include('admin.questions.templates.form')
        {!! Form::close() !!}

    </div>

</div>

@stop