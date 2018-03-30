@extends('layouts.app')

@section('content')
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                            <h3>Cuestionario: {{$test->test_name}}</h3>
                    </div>

                    <div class='panel-body'>
                        <div id="show_test">
                            @foreach($questions as $question)                                                           
                                <h1>Pregunta {{$question->id}}</h1>
                                <div>
                                    {!! Form::open(['route'=>['take_test', $test->id, $question->id], 'method'=>'POST']) !!}
                                    <input type='hidden' name='test_id' id='test_id' value={{$test->id}}>
                                    <input type='hidden' name='quest_id' id='quest_id' value={{$question->id}}>
                                
                                        <h5><p class='text-center'>{{$question->question_header}}</p></h5>
                                        <img class='center-block' src='{{$question->question_image}}'>
                                        <p><h4 class='text-center'>{{$question->question_text}}</h4></p>

                                        <p>Seleccione de las siguientes opciones de respuestas</p>
                                        @foreach($qt_answers->get($loop->index) as $qt_answer)
                                            <div class="form-group">
                                                {{ Form::checkbox('selected_answers[]', $qt_answer->id)}} {{$qt_answer->answer_text}}
                                            </div>
                                        @endforeach
                                        
                                        <div class='row'>
                                            <div class='col-md-offset-4 col-md-2 col-md-offset-5'>
                                                {{ Form::submit('Enviar respuesta', ['class'=>'btn btn-sm btn-success']) }}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                @endforeach
                            </div>
                        </div>
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
@stop


@section('script')
<script src="{{ asset('js/scripts.js') }}"></script>
@stop