<?php

namespace App;

use App\User;
use App\Question;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $guarded = [];


    public function users()
    {
        return $this->belongsToMany(User::class, 'test_user')
                    ->withPivot('user_points', 'total_points', 'approved')
                    ->withTimestamps();
    }

    

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'question_test')
                    ->withPivot('question_value');
    }


}
