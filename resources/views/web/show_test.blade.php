@extends('layouts.app')

@section('content')
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                            <h3>Cuestionario: {{$test->test_name}}</h3>
                    </div>

                    <div class='panel-body'>
                        <div id="show_test" data-current-question="{{$current_question}}"> 
                            @foreach($questions as $quest => $question)                                                           
                                <h1>Pregunta {{$question->id}}</h1>
                                <div>
                                    {!! Form::open(['route'=>['take_test', $test->id, $question->id], 'method'=>'POST']) !!}
                                    <input type='hidden' name='test_{{$test->id}}' id='test_{{$test->id}}' value={{$test->id}}>
                                    <input type='hidden' name='quest_{{$question->id}}' id='quest_{{$question->id}}' value={{$question->id}}>
                                    @if (!$loop->last)
                                        <input type='hidden' name='next_quest_id' id='next_quest_id' value={{$questions[$quest + 1]->id}}>
                                    @endif
                                        <h5><p class='text-center'>{{$question->question_header}}</p></h5>
                                        <img class='center-block' src='{{$question->question_image}}'>
                                        <p><h4 class='text-center'>{{$question->question_text}}</h4></p>

                                        <p>Seleccione de las siguientes opciones de respuestas</p>
                                        @foreach($qt_answers->get($loop->index) as $qt_answer)
                                            <div class="form-group">
                                                {{ Form::checkbox('selected_answers[]', $qt_answer->id)}} {{$qt_answer->answer_text}}
                                            </div>
                                        @endforeach
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