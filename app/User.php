<?php

namespace App;

use App\Profile;
use App\Test;
use App\Answer_Question_Test;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'type', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }



    public function tests()
    {
        return $this->belongsToMany(Test::class, 'test_user')
                    ->withPivot('user_points', 'total_points', 'approved');
    }


    
    public function answer_question_tests()
    {
        return $this->belongsToMany(Answer_Question_Test::class, 'answer_question_test_user', 'user_id', 'answer_question_test_id')
                    ->withPivot('selected_answers', 'answer_points')
                    ->withTimestamps();
    }


    public function questions()
    {
        return $this->hasMany(Question::class);
    }


    public function answers()
    {
        return $this->hasMany(Answer::class);
    }




}
