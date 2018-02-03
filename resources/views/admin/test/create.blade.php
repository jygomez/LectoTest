@extends('layouts.app')

@section('title')
LectoTest - Crear examen
@stop


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CREAR NUEVO CUESTIONARIO</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('test_name') ? ' has-error' : '' }}">
                            <label for="test_name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="test_name" type="text" class="form-control" name="test_name" value="{{ old('test_name') }}" required autofocus>

                                @if ($errors->has('test_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('test_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('min_to_approve') ? ' has-error' : '' }}">
                            <label for="min_to_approve" class="col-md-4 control-label">Mínimo para aprobar</label>

                            <div class="col-md-6">
                                <input id="min_to_approve" type="number" class="form-control" name="min_to_approve" value="{{ old('min_to_approve') }}" required autofocus>

                                @if ($errors->has('min_to_approve'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('min_to_approve') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="time_control" id="time_control">
                            Control de tiempo
                            </label>
                        </div>

                        <div class="form-group{{ $errors->has('min_to_approve') ? ' has-error' : '' }}">
                            <label for="time" class="col-md-4 control-label">Tiempo</label>

                            <div class="col-md-6">
                                <input id="time" type="number" class="form-control" name="time" value="{{ old('time') }}" required autofocus>

                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <p>Seleccione del catálogo las preguntas que desee agregar a su cuestionario</p>


                        <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Encuentra la pregunta que buscas...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Buscar!!!</button>
                                </span>
                            </div>
                        </div>


                        <div>MIS PREGUNTAS</div>

                        @include('questions.show_questions')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@stop