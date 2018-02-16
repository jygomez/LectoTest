<?php

namespace App;

use App\Test;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = [];
    protected $fillable = [
        'user_id', 'question_header', 'question_text', 'question_image', 'update_question_user_id',
    ];

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
