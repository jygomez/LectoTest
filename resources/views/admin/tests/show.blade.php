@extends('layouts.app')

@section('content')

                <div class='panel panel-primary'>
                    <div class='panel-heading'>
                        <h4>Detalles del cuestionario {{$test->id}}: <strong>"{{$test->test_name}}"</strong></h4>
                    </div>


                    <div class='panel-body'>
                        <table class='table table-striped table-hover'>
                            <thead>
                                <tr>
                                    <th class="text-center" width='100px'>Valor</th>
                                    <th class="text-center" width='100px'>Aprobado</th>
                                    <th class="text-center" width='100px'>Duración</th>
                                    <th class="text-center" width='170px'>Creador</th>
                                    <th class="text-center" width='130px'>Preguntas</th>
                                    <th colspan='1'>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td class="text-center">{{$test->test_value}}</td>
                                
                                <td class="text-center">{{$test->min_to_approve}}</td>
                                
                                <td class="text-center">
                                @if($test->time_control == 0)
                                    <strong>-</strong>
                                @else
                                    {{$test->time}}
                                @endif
                                </td>

                                <td class="text-center">
                                    <small><a href="{{route('tests.index')}}">{{$user->username}}</a> <br> 
                                    <small>{{$test->created_at}}</small></small> 
                                </td>
                                
                                <td class="text-center">
                                    @if($test->questions->count() > 0)
                                        <strong>{{$test->questions->count()}}</strong>
                                    @else
                                        <small>Sin preguntas</small>
                                    @endif
                                </td>

                                @can('is_admin')
                                <td>
                                    @if($test->questions->count() > 0)
                                        <a href='{{route('questions_test', $test->id)}}' class='btn btn-sm btn-default'>ver</a>
                                    @else
                                        <a href='{{route('show_questions_to_add', $test->id)}}' class='btn btn-sm btn-default'>agregar</a>                                        
                                    @endif
                                </td>
                                @endcan
                            </tbody>
                        </table>
                    </div>


                    <div class="panel-footer">
                        <div class='text-center'><a href="{{route('show_test_student', $test->id)}}">Ver examinados</a></div>
                    </div>
                </div>


@stop