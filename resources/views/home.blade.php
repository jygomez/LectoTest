@extends('layouts.home')

@section('content')
<div class="row marketing">
        <div class="col-md-10 col-md-offset-1">
    <div class="home__slider">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($sliders as $index => $slider)
                <li data-target="#carousel-example-generic" data-slide-to="{{ $index }}" @if ($loop->first) class="active" @endif></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($sliders as $slider)
                <div class="item  @if ($loop->first) active @endif">             
                    <img src="{{ Storage::url($slider->url) }}">
                    <!--<div class="carousel-caption">
                    aqui va una descripción
                    </div>-->
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    
       
        <div class="panel panel-default">
             <div class="panel-heading">Tema del día</div>
            <div class="panel-body">
            <h2>{{ $post->title}}</h2>
            <p>{{ $post->body }}</p>

            <hr />

            {!! Form::open(['route' => 'comments.store']) !!}
            <input type='hidden' name='post_id' id='post_id' value="{{$post->id}}">
                <div class="form-group">
                    {{ Form::label('body', 'Comentario') }}
                    {{ Form::textarea('body', null, ['class'=>'form-control', 'id'=>'body']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Enviar comentario', ['class'=>'btn btn-sm btn-primary pull-right']) }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>



 </div>
       
    </div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} LectoTest.</p>
    </footer>
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}"></script>
@stop
