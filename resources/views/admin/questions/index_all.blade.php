@extends('layouts.app')

@section('content')
<div class='panel panel-default'>

    <div class='panel-heading'>
        Listado de preguntas
        <a href="{{route('questions.create')}}" class='btn btn-sm btn-primary pull-right'>Crear</a>
    </div>                

    <div class='panel-body'>
    {{$question_list->render()}}
    <a class='pull-right' href="{{route('questions.index')}}">Volver a tu catálogo</a>

        @if($question_list->count() == 0)
            No hay preguntas creadas.
        @else
            <table class='table table-striped table-hover'>
                <thead>
                    <tr>
                        <th width='5%'>Id</th>
                        <th width='25%'>Encabezados</th>
                        <th width='40%' class='text-center'>Preguntas</th>
                        <th class='text-center' colspan='2'>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($question_list as $question)
                        <tr>
                            <td>{{$question->id}}</td>
                            <td>
                            @if($question->question_header)
                                {{$question->question_header}}
                            @else
                                <div class="text-info">Pregunta sin encabezado.</div>
                            @endif
                            </td>

                            <td>{{$question->question_text}}</td>

                            <td width='25%'>
                                <a href="{{route('questions.show', $question->id)}}" class='btn btn-sm btn-default'>ver</a>
                                
                                @can('update_question', $question)
                                    <a href="{{route('questions.edit', $question->id)}}" class='btn btn-sm btn-default'>editar</a>

                                    <td width='5%'>
                                        {!! Form::open(['route' => ['questions.destroy', $question->id], 'method'=>'DELETE']) !!}
                                            <button class='btn btn-sm btn-danger'>
                                                eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>                        
        @endif

        {{$question_list->render()}}

        <p>
            <a class='pull-right' href="{{route('questions.index')}}">Volver a tu catálogo</a>
        </p>

    </div>

</div>

@stop