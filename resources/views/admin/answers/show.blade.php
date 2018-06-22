@extends('layouts.app')

@section('content')

<div class='panel panel-primary'>
    
    <div class='panel-heading'>
        <h4>Detalles de la respuesta <strong>{{$answer->answer_name}}</strong></h4>
    </div>                


    <div class='panel-body'>
        <p><strong>ID: </strong>{{$answer->id}}</p>
        <p><strong>Respuesta: </strong>{{$answer->answer_text}}</p>
        <p><strong>Creado por: </strong>{{$user->username}}</p>
        <p><strong>Fecha creación: </strong>{{$answer->created_at}}</p>
    </div>

</div>


@stop