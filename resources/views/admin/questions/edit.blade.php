@extends('layouts.app')

@section('content')
<div class='panel panel-default'>
    
    <div class='panel-heading'>
        Editar pregunta
    </div>                


    <div class='panel-body'>
        <!-- Con esta sintaxis se indica que se va a utilizar un formulario -->
        {!! Form::model($question, ['route'=>['questions.update', $question->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
            @include('admin.questions.templates.form')

            @if($question->question_image)
                <p>
                    <img class='img-responsive' width='500px' src="{{Storage::url($question->question_image)}}">
                </p>
            @else
                <p>Pregunta sin imagen.</p>
            @endif

        {!! Form::close() !!}
    </div>

</div>


@stop