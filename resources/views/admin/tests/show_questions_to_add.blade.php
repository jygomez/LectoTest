@extends('layouts.app')

@section('content')


            <div class='panel panel-primary'>

                <div class='panel-heading'>
                    <h4>Preguntas para agregar al cuestionario {{$test->id}}: <strong>"{{$test->test_name}}"</strong></h4>
                </div>

                <div class='panel-body'>
                    <table class='table table-striped table-hover'>
                        <thead>
                            <tr>
                                <th class='text-center' width='5%'>Id</th>
                                <th class='text-center' width='40%'>Pregunta</th>
                                <th class='text-center' width="10%">Imagen</th>
                                <th class='text-center' width="10%">Creador</th>
                                <th class='text-center' width="28%">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($question_list as $question)
                                <tr>
                                    <td class='text-center'>{{$question->id}}</td>

                                    <td>
                                    @if($question->question_header)
                                        Encabezado: {{$question->question_header}}
                                    @else
                                        <div class="text-info">Pregunta sin encabezado.</div>
                                    @endif
                                    <br>
                                        <strong>{{$question->question_text}}</strong>
                                    </td>

                                    <td class='text-center'>
                                        @if($question->question_image)
                                            <img width='50px' class='img-responsive' width='500px' src="{{Storage::url($question->question_image)}}">
                                        @endif
                                    </td>

                                    <td class='text-center'>
                                        <small><a href="{{route('user_questions', $question->user->id)}}">{{$question->user->username}}</a><br>
                                        <small>{{$question->created_at}}</small></small>
                                    </td>

                                    <td class='text-center'>
                                        {!! Form::open(['route' => ['add_questions_to_test', $test->id, $question->id], 'method'=>'POST']) !!}
                                            <div class="row form-group">
                                                <div class="input-group input-group-sm">
                                                    <input class="form-control form-control-sm" for='question_value' placeholder='Valor de la pregunta' type='number' name='question_value' id='question_value'>
                                                    <span class="input-group-btn">
                                                        <button class='btn btn-sm btn-dafault'>
                                                            agregar
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        {!! Form::close() !!}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{route('questions.edit', $question->id)}}" class='btn btn-sm btn-default'>editar</a>
                                       
                                            </div>

                                            <div class="col-md-6">
                                                {!! Form::open(['route' => ['questions.destroy', $question->id], 'method'=>'DELETE']) !!}
                                                    <button class='btn btn-sm btn-danger'>
                                                        eliminar
                                                    </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <div class="col-6">
                                    No hay preguntas para mostrar.
                                </div>
                                
                            @endforelse
                        </tbody>
                    </table>
                    {{$question_list->render()}}
                    <a href="{{route('questions_test', $test->id)}}" class='btn btn-sm btn-primary pull-right'>Guardar</a>
                </div>
            </div>

@stop