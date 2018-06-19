<div class="form-group">
    {{ Form::label('title', 'Título') }}
    {{ Form::text('title',  null, ['class'=>'form-control', 'id'=>'title']) }}

</div>
<div class="form-group">
    {{ Form::label('body', 'Contenido') }}
    {{ Form::textarea('body', null, ['class'=>'form-control', 'id'=>'body']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary pull-right']) }}
</div>