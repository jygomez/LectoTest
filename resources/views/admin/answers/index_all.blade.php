@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>

                    <div class='panel-heading'>
                        Listado de Respuestas
                        <a href="{{route('answers.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
                    </div>                
                
                    <div class='panel-body'>
                    {{$answer_list->render()}}
                    <a class='pull-right' href="{{route('answers.index')}}">Volver a tu catálogo</a>

                        @if($answer_list->count() == 0)
                            No hay respuestas creadas.
                        @else
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th width='10px'>Id</th>
                                        <th>Respuestas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($answer_list as $answer)
                                        <tr>
                                            <td>{{$answer->id}}</td>
                                            <td>{{$answer->answer_text}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        @endif

                        {{$answer_list->render()}}

                        <p>
                            <a class='pull-right' href="{{route('answers.index')}}">Volver a tu catálogo</a>
                        </p>


                    </div>

                </div>
            </div>
        </div>
    </div>

@stop