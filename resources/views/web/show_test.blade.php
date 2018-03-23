@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                        <h3>Cuestionario: {{$test->test_name}}</h3>
                    </div>
                    
                        <div class='panel-body'>
                            @foreach($questions as $question)
                                {!! Form::open(['route'=>['take_test', $test->id, $question->id], 'method'=>'POST']) !!}
                                <input type='hidden' name='test_id' id='test_id' value={{$test->id}}>
                                <input type='hidden' name='quest_id' id='quest_id' value={{$question->id}}>
                                
                                    <h4>Pregunta con ID {{$question->id}}</h4>
                                    <h5><p class='text-center'>Encabezado:</p> <p class='text-center'>{{$question->question_header}}</p></h5>
                                    <img class="img-thumbnail" src='{{$question->question_image}}'>
                                    <p><h4 class='text-center'>Pregunta: {{$question->question_text}}</h4></p>
                                    
                                        <p>
                                            Repuestas
                                        </p>
                                        @foreach($qt_answers->get($loop->index) as $qt_answer)
                                            <div class="form-group">
                                                {{ Form::checkbox('selected_answers[]', $qt_answer->id)}} {{$qt_answer->answer_text}}
                                            </div>
                                        @endforeach

                                    <hr>
                                    <div class='row'>
                                        <div class='col-md-8 col-md-offset-2'>
                                            <div class="form-group">
                                                {{ Form::submit('Anterior') }}
                                                {{ Form::submit('Siguiente', ['class'=>'pull-right']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                {!! Form::close() !!}
                            @endforeach
                        </div>

                        <div class='panel-footer'>
                            {!! Form::open(['route' => ['calification', $test->id, Auth()->user()->id], 'method'=>'POST']) !!}
                                <div class='text-center'>
                                    <button class='btn btn-sm btn-primary'>
                                        Finalizar
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop