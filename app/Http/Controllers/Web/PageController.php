<?php

namespace App\Http\Controllers\Web;

use App\Test;
use App\User;
use App\Question;
use App\Question_Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function test_list()
    {
        $test_list = Test::orderBy('id','ASC')->paginate(2);
        //dd($test_list);
        return view('web.test_list', compact('test_list'));
    }


    public function test($id)
    {
        $test = Test::where('id', $id)->first();

        return view('web.test', compact('test'));
    }


    public function question_tests($id)
    {
        $question = Question::where('id', $id)->first();
        
        $tests = Test::whereHas('questions', function($query) use($id){
            $query->where('question_id', $id);
        })
        ->orderBy('id', 'ASC')->get();

        return view('web.question_tests', compact('tests', 'question'));
    }
        
        
    public function user_questions($id)
    {
        $user = User::where('id', $id)->first();
        $questions = Question::where('user_id', $user->id)->orderBy('id', 'ASC')->get();
        //dd($user);
        return view('web.user_questions', compact('questions', 'user'));
    }
}
