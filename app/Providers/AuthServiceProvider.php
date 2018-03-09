<?php

namespace App\Providers;
use App\User;
use App\Test;
use App\Question;
use App\Answer;
// use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        $gate->define('is_admin', function (User $user){
            return $user->type == 'Administrador';
        });

        $gate->define('is_student', function (User $user){
            return $user->type == 'Usuario';
        });

        // Update Elements
        $gate->define('update_test', function (User $user, Test $test){
            return $user->id == $test->user_id;
        });

        $gate->define('update_question', function (User $user, Question $question){
            return $user->id == $question->user_id;
        });

        $gate->define('update_answer', function (User $user, Answer $answer){
            return $user->id == $answer->user_id;
        });
    }
}
