@extends('layouts.app')

@section('content')
    
<div class="container">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Sliders Página de inicio</div>
  <div class="panel-body">
  {!! Form::open(['action' => 'Admin\SliderController@create', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        <label for="image">Agrega una imagen</label>
        <input type="file" name="image">
        <p class="help-block">El tamaño de la imagen debe ser 800 x 600, los fomratos admitidos JPG, PNG, GIF.</p>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Subir</button>
    {!! Form::close() !!}
  </div>
  <!-- Table -->
  <table class="table">
    @foreach($sliders as $slider)
    <tr>
        <td>
          <img src="{{ Storage::url($slider->url) }}" class="img-responsive">
        </td>
        <td>
            <a onclick='return confirm("¿Estas seguro?");' href="{{route('delete_slider', ['id' =>$slider->id ])}}" class="btn btn-danger btn-xs" type="button">&times; Eliminar</a>
        </td>
    </tr>
    @endforeach
  </table>
</div>
</div>
@stop