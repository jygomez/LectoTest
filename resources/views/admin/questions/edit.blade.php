@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>
                    
                    <div class='panel-heading'>
                       Editar pregunta
                    </div>                
                

                    <div class='panel-body'>
                        <!-- Con esta sintaxis se indica que se va a utilizar un formulario -->
                       {!! Form::model($question, ['route'=>['questions.update', $question->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
                            @include('admin.questions.templates.form')
                            <img width='500px' src='{{ Storage::url($question->question_image) }}'>
                       {!! Form::close() !!}
                    </div>

                </div>
                
            </div>
        </div>
    </div>

@stop