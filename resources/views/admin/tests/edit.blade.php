@extends('layouts.app')

@section('content')


<div class='panel panel-primary'>
    
    <div class='panel-heading'>
        Editar cuestionario
    </div>                


    <div class='panel-body'>
        <!-- Con esta sintaxis se indica que se va a utilizar un formulario -->
        {!! Form::model($test, ['route'=>['tests.update', $test->id], 'method'=>'PUT']) !!}
            @include('admin.tests.templates.form')
        {!! Form::close() !!}
    </div>

</div>
                
@stop