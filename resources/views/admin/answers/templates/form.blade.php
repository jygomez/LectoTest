<div class="form-group">
    {{ Form::label('answer_text', 'Respuesta') }}
    {{ Form::text('answer_text', null, ['class'=>'form-control', 'id'=>'answer_text']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary pull-right']) }}
</div>