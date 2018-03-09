@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
            <div class='panel panel-primary'>

                <div class='panel-heading'>
                    <h4 class='text-center'>Cuestionario <strong>{{$test->test_name}}</strong></h4>
                    <h4 class='text-center'>Listado de respuestas agregadas a la pregunta {{$question->id}}: <br> <strong>"{{$question->question_text}}".</strong></h4>
                    @if($answers->count() > 0)
                        <table class='table'>
                            <tr>
                                <th class='text-center' width='5%'>Id</th>
                                <th class='text-center' width='60%'>Respuestas agregadas</th>
                                <th class='text-center' width="30%">Seleccione las correctas</th>
                            </tr>

                            @foreach($answers as $ans)
                                <tr>
                                    <td class='text-center'>
                                        {{$ans->id}}
                                    </td>

                                    <td class='text-center'>
                                        {{$ans->answer_text}}
                                    </td>
                                    
                                    <td class='text-center'>
                                        {!! Form::open(['route' => ['select_correct_answers', $ans->id], 'method'=>'POST']) !!}
                                            <input type='hidden' name='test_id' id='test_id' value={{$test->id}}>
                                            <input type='hidden' name='quest_id' id='quest_id' value={{$question->id}}>

                                            <button class='btn btn-md btn-primary' name='correct_answer' id='correct_answer'>
                                                Correcta
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <a href="{{route('tests.index')}}" class='btn btn-md btn-primary'>Guardar</a>
                    @else
                        <h4 class='text-center'>Aún no agregas respuestas a la pregunta</h4>
                    @endif
                </div>

                @can('update_test', $test)
                    <div class='panel-body'>
                        <table class='table table-striped table-hover'>
                            <thead>
                                <tr>
                                    <th class='text-center' width='5%'>Id</th>
                                    <th class='text-center' width='40%'>Respuestas</th>
                                    <th class='text-center' width="10%">Creador</th>
                                    <th class='text-center' width="28%">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <h3 class='text-center'>Listado de respuestas para agregar</h3>
                                {{$answers_list->render()}}

                                @forelse($answers_list as $answer)
                                    <tr>
                                        <td class='text-center'>{{$answer->id}}</td>

                                        <td class='text-center'>
                                            {{$answer->answer_text}}
                                        </td>

                                        <td class='text-center'>
                                            <small><a href="{{route('user_questions', $question->user->id)}}">{{$answer->user->username}}</a><br>
                                            <small>{{$answer->created_at}}</small></small>
                                        </td>

                                        <td class='text-center'>
                                            {!! Form::open(['route' => ['add_answers_to_test', $answer->id], 'method'=>'POST']) !!}
                                                <input type='hidden' name='test_id' id='test_id' value={{$test->id}}>
                                                <input type='hidden' name='quest_id' id='quest_id' value={{$question->id}}>

                                                <button class='btn btn-sm btn-dafault' name='answer_id' id='answer_id'>
                                                    agregar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>

                                @empty
                                    <div class="col-6">
                                        No hay respuestas para mostrar.
                                    </div>
                                    
                                @endforelse
                            </tbody>
                        </table>
                        {{$answers_list->render()}}
                        <a href="{{route('tests.index')}}" class='btn btn-sm btn-primary pull-right'>Guardar</a>
                    </div>
                @endcan
            </div>
        </div>
    </div>
</div>

@stop