@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-primary'>
                    
                    <div class='panel-heading'>
                        <h4>Detalles de la pregunta <strong>{{$question->id}}</strong></h4>
                    </div>                
                

                    <div class='panel-body'>
                        @if($question->question_header)
                            <p><strong>Encabezado: </strong>{{$question->question_header}}</p>
                        @else
                            <p><strong>Encabezado: - </p>
                        @endif
                        
                        @if($question->question_image)
                            <p>
                                <img class='img-responsive' width='500px' src="{{Storage::url($question->question_image)}}">
                            </p>
                        @else
                            <p>Pregunta sin imagen.</p>
                        @endif
                        
                        <p><strong>Pregunta: </strong>{{$question->question_text}}</p>
                        
                        <p><strong>Creada por: </strong>{{$user->username}}</p>
                        
                        <p><strong>Fecha creación: </strong>{{$question->created_at}}</p>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

@stop