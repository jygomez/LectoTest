@extends('layouts.app')

@section('content')
    


<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Crear Tema</div>
  <div class="panel-body">
  {!! Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
    @include('admin.posts.templates.form')
  {!! Form::close() !!}
  </div>
  <!-- Table -->
</div>
@stop