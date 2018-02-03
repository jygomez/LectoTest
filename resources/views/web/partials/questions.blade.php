
<div class="card-text">
    <h3>Pregunta {{$question->id}}</h3>
        <br>
        @if($question->question_header)
            Enunciado: {{$question->question_header}}
        @else
            Enunciado: -
        @endif
        <br>

        @if($question->question_image)
            <img src="{{$question->question_image}}" class="img-responsive">
        @else
            Pregunta sin imagen.
        @endif
        <br>
        Pregunta: {{$question->question_text}}
</div>