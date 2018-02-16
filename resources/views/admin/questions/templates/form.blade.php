<div class="form-group">
    {{ Form::label('question_header', 'Encabezado') }}
    {{ Form::text('question_header', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{Form::label('question_image', 'Edite la imagen de la pregunta', ['class'=>'control-label'])}}
    {{Form::file('question_image')}}
</div>

<div class="form-group">
    {{ Form::label('question_text', 'Pregunta') }}
    {{ Form::text('question_text', null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary pull-right']) }}
</div>