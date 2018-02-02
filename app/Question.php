<?php

namespace App;

use App\Test;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = [];

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'question_test')
                    ->withPivot('question_value');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
