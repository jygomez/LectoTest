<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Answer_Question_Test extends Pivot
{
    protected $table = 'answer_question_test';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'answer_question_test_user', 'answer_question_test_id', 'user_id')
                    ->withPivot('selected_answers', 'answer_points')
                    ->withTimestamps();
    }
    
}
