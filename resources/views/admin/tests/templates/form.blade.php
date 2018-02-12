<div class="form-group">
    {{ Form::label('test_name', 'Nombre del cuestionario') }}
    {{ Form::text('test_name', null, ['class'=>'form-control', 'id'=>'test_name']) }}
</div>

<div class="form-group">
    {{ Form::label('test_value', 'Valor del cuestionario') }}
    {{ Form::number('test_value', '0') }}
</div>

<div class="form-group">
    {{ Form::label('min_to_approve', 'Valor aprobado') }}
    {{ Form::number('min_to_approve', '0') }}
</div>

<div class="form-group">
    {{ Form::label('time_control', '¿Control de tiempo?') }}
    {{ Form::checkbox('time_control') }}
</div>

<div class="form-group">
    {{ Form::label('time', 'Tiempo') }}
    {{ Form::time('time', null, ['class'=>'form-control', 'id'=>'time']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary pull-right']) }}
</div>