@extends('layouts.app')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-primary'>
                    
                    <div class='panel-heading'>
                        <h4>Comentarios del tema</h4>
                    </div>                
                

                    <div class='panel-body'>

                        <h1>{{ $post->title }}</h1>
                        <p>{{ $post->body }}</p>

                    @foreach( $comments as $comment)

                    <blockquote>
                        <p>{{ $comment->body }}</p>
                        <small>Creado por <cite title="{{ $comment->user->username }}"><strong>{{ $comment->user->username }}</strong></cite> · <time>{{ $comment->created_at }}</time></small> 
                    </blockquote>
                    @endforeach
                    </div>

                </div>
                
            </div>
        </div>
    </div>

@stop