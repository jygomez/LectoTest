<?php

namespace App;

use App\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Question_Test extends Pivot
{
    protected $table = 'question_test';
    protected $guarded = [];
    public $timestamps = false;

    public function answers()
    {
        return $this->belongsToMany(Answer::class, 'answer_question_test', 'question_test_id', 'answer_id')
                    ->withPivot('correct_answer');
    }
}
