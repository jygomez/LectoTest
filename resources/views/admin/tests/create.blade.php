@extends('layouts.app')

@section('content')


<div class='panel panel-primary'>
    
    <div class='panel-heading'>
        Crear nuevo cuestionario
    </div>                


    <div class='panel-body'>
        <!-- Con esta sintaxis se indica que se va a utilizar un formulario -->
        {!! Form::open(['route'=>'tests.store']) !!}
            @include('admin.tests.templates.form')
        {!! Form::close() !!}
    </div>

</div>



@stop