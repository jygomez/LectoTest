<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $questions = Question::paginate(15);
        
        //dd($users);
        return view('tests.create_test', [
            'questions' => $questions,
        ]);        
    }
}
