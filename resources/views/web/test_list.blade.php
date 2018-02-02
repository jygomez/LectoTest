@extends('layouts.app');

@section('content')

<div class='col-md-8 col-md-offset-2'>
    <h1>LISTA DE CUESTIONARIOS</h1>
    
    @forelse($test_list as $test)
        <div class="panel panel-primary">
            <div class="panel-heading panel-title">
                Nombre: {{$test->test_name}}
            </div>
            
            <div class="panel-body">
            <div>
                Mínimo para aprobar: {{ $test->min_to_approve }}                
                </div>
                @if($test->time_control == 1)
                    Tiempo para rendir: {{$test->time}}
                @else
                Sin control de tiempo.
                @endif
                <a href='{{route('test', $test->id)}}' class="pull-right">Ver cuestionario</a>
            </div>
    </div>

    @empty
		<div class="col-6">
			No hay personas para mostrar.
		</div>
	@endforelse

	{{$test_list->render()}}


</div>

@stop