@extends('layouts.app')

@section('content')
    
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Temas página de inicio
    <a href="{{route('posts.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
  </div>
  <div class="panel-body">
    
  </div>
  <!-- Table -->
  <table class='table table-striped table-hover'>
    <thead>
        <tr>
            <th width='5%'>Id</th>
            <th width='65%'>Título</th>
            <th class='text-center' colspan='2'>Acciones</th>
        </tr>
    </thead>
    <tbody>
  
    @foreach($posts as $post)
    <tr>
        <td>
            {{ $post->id }}
        </td>
        <td>
            <a  href="{{route('posts.show', ['id' =>$post->id ])}}">
                {{ $post->title }}
            </a>
        </td>
        <td width='25%'>
        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method'=>'DELETE', 'class' => 'text-center']) !!}
            <div class="btn-group" role="group" aria-label="...">
                @if($post->active)
                <a href="#" class='btn btn-sm btn-success'>Activo</a>
                @else
                <a href="{{route('posts.activate', $post->id)}}" class='btn btn-sm btn-default'>Activar</a>
                @endif
                <a href="{{route('posts.show', $post->id)}}" class='btn btn-sm btn-default'>Ver</a>
                <a href="{{route('posts.edit', $post->id)}}" class='btn btn-sm btn-default'>editar</a>
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