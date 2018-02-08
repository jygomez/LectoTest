@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>
                    
                    <div class='panel-heading'>
                       Crear nuevo cuestionario
                    </div>                
                

                    <div class='panel-body'>
                        <!-- Con esta sintaxis se indica que se va a utilizar un formulario -->
                       {!! Form::open(['route'=>'tests.store']) !!}
                            @include('admin.tests.templates.form')
                       {!! Form::close() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop