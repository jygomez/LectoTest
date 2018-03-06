@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-primary'>
                    
                    <div class='panel-heading'>
                       Crear nueva respuesta
                    </div>                
                

                    <div class='panel-body'>
                        <!-- Con esta sintaxis se indica que se va a utilizar un formulario -->
                       {!! Form::open(['route'=>'answers.store']) !!}
                            @include('admin.answers.templates.form')
                       {!! Form::close() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop