<?php

namespace App\Http\Controllers\Web;

use App\Test;
use App\User;
use App\Answer;
use App\Question;
use App\Question_Test;
use Illuminate\Http\Request;
use App\Answer_Question_Test;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function show_test($id)
    {
        $test = Test::find($id);
        $questions = Question::whereHas('tests', function($query) use($id){
            $query->where('test_id', $id);
        })->get();
        
        $qt = Question_Test::where('test_id', $id)->get();
        
        $qt_answers = collect([]);
        
        foreach($qt as $qt)
        {
            $qt_id = $qt->id;
            $qt_ans = Answer::whereHas('question_tests', function($query) use($qt_id){
                $query->where('question_test_id', $qt_id);
            })->get();

            $qt_answers->push($qt_ans);
        }
        //dd($qt_answers->all());
        return view('web.show_test', compact('test', 'questions', 'qt_answers'));
    }


    public function save_taken_test(Request $request, $test_id, $quest_id)
    {
        dd($request);


    }



}
