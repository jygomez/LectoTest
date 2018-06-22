@extends('layouts.app')

@section('content')

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Videos
    <a href="{{route('posts.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
  </div>
  <div class="panel-body">
  {!! Form::open(['route' => 'videos.store']) !!}
    <div class="form-group">
        <label for="title">Título del video</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="url">Url del video</label>
        <input type="url" name="url" class="form-control">
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Agregar</button>
    {!! Form::close() !!}
  </div>
  <!-- Table -->
  <table class='table table-striped table-hover'>
    <thead>
        <tr>
            <th width='5%'>Id</th>
            <th width='35%'>Título</th>
            <th width='30%'>Título</th>
            <th class='text-center'>Url</th>
        </tr>
    </thead>
    <tbody>
  
    @foreach($videos as $video)
    <tr>
        <td>
            {{ $video->id }}
        </td>
        <td>
            {{ $video->title }}
        </td>
        <td>
            <a  href="{{ $video->url }}">
                {{ $video->url }}
            </a>
        </td>
        <td width='25%'>
        {!! Form::open(['route' => ['videos.destroy', $video->id], 'method'=>'DELETE', 'class' => 'text-center']) !!}
            <div class="btn-group" role="group" aria-label="...">
                <button type="submit" class="btn btn-sm btn-danger">eliminar</button>
            </div>
        {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop