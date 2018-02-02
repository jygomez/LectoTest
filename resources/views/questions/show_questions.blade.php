
@foreach($questions as $question)
    <p>
        {{ $question->id.".- ".$question->question_text }}{{ $question->question_text }} <br>
        <small class="text-muted">Creada por: {{$question->user->username}}</small>
    </p>
@endforeach

{{$questions->links()}}