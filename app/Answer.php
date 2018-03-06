<?php

namespace App;

use App\Question_Test;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $guarded = [];

    public function question_tests()
    {
        return $this->belongsToMany(Question_Test::class, 'answer_question_test', 'answer_id', 'question_test_id')
                    ->withPivot('correct_answer');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
