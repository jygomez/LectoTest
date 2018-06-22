@extends('layouts.home')

@section('content')
<div class="Home">
    <section class="Home__section__carrousel">
        <div class="Home__slider">

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

    </section>

    <section class="Home__section Home__section__blog">

        <div class="row">
            <div class="div col-md-8">

            <article>
            <h2>{{ $post->title}}</h2>
            <p>{{ $post->body }}</p>
            </article>

                {!! Form::open(['route' => 'comments.store']) !!}

                <input type='hidden' name='post_id' id='post_id' value="{{$post->id}}">
                <div class="form-group">
                    {{ Form::label('body', 'Deja tu comentario') }}
                    {{ Form::textarea('body', null, ['class'=>'form-control', 'id'=>'body', 'placeholder' => 'Escribe aquí...']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Enviar comentario', ['class'=>'btn btn-sm btn-success pull-right']) }}
                </div>
                {!! Form::close() !!}

            </div>
            <div class="col-md-4 text-center">
                <img class="Home__section__image img-responsive" src="{{ Storage::url('home/blog.png') }}">
            </div>
        </div>

      
    </section>

    <section class="Home__section Home__section__videos">

        <div class="row">
            <div class="div col-md-8 col-md-offset-4"><h2>Videos interesates</h2></div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center">
                <img class="Home__section__image img-responsive" src="{{ Storage::url('home/video.png') }}">
            </div>
            <div class="col-md-8">
                
                    <div class="list-group">
                    @foreach($videos as $video)
                    <a href="{{ $video->url }}" target="_blank" class="list-group-item">
                        <h4 class="list-group-item-heading">{{ $video->title }}</h4>
                        <p class="list-group-item-text">{{ $video->url }}</p>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
       
</div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} LectoTest.</p>
    </footer>
    
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}"></script>
@stop
