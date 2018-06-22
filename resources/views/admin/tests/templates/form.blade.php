<div class="form-group">
    {{ Form::label('test_name', 'Nombre del cuestionario') }}
    {{ Form::text('test_name', null, ['class'=>'form-control', 'id'=>'test_name']) }}
</div>

<div class="form-group">
    {{ Form::label('test_value', 'Valor del cuestionario') }}
    {{ Form::number('test_value') }}
</div>

<div class="form-group">
    {{ Form::label('min_to_approve', 'Valor aprobado') }}
    {{ Form::number('min_to_approve') }}
</div>

<div class="form-group">
    {{ Form::label('time_control', '¿Control de tiempo?') }}
    {{ Form::checkbox('time_control') }}
</div>

<div class="form-group">
    {{ Form::label('time', 'Tiempo') }}
    {{ Form::time('time', null, ['class'=>'form-control', 'id'=>'time-control-input']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary pull-right']) }}
</div>