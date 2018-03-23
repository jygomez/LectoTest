@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    Cuestionario {{$test->id}}: "{{$test->test_name}}" - Examinados / Calificaciones.
                </div>

                <div class='panel-body'>
                <table class='table table-striped table-hover'>
                        <thead>
                            <tr>
                                <th class='text-center' width='5%'>Id</th>
                                <th>Nombre</th>
                                <th class='text-center'>Calificación</th>                             
                                <th class='text-center'>Estado</th>                             
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($test_elements as $user)
                                <tr>
                                    <td>
                                        {{$user->id}}
                                    </td>
                                    
                                    <td>
                                        {{$user->username}}
                                    </td>
                                    
                                    <td class='text-center'>
                                        {{$user->pivot->calification}}/{{$test->test_value}}
                                    </td>

                                    <td class='text-center'>
                                        @if($user->pivot->approve == 0)
                                            Desaprobado
                                        @else
                                            Aprobado
                                        @endif
                                    
                                    </td>
                                </tr>
                            @empty
                                <div class="col-6">
                                    Ningún estudiante ha examinado aún.
                                </div>
                            @endforelse
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>

@stop