<?php

namespace App\Http\Controllers\Web;

use App\Test;
use App\User;
use App\Answer;
use App\Question;
use App\Question_Test;
use Illuminate\Http\Request;
use App\Answer_Question_Test;
// use App\Answer_Question_Test_User;
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
        $qt = Question_Test::where([
            ['test_id', $test_id],
            ['question_id', $quest_id],
        ])->first();

        $correct_count = Answer_Question_Test::where('question_test_id', $qt->id)->sum('correct_answer');
        
        if($request->selected_answers != null)
        {
            foreach($request->selected_answers as $answer)
            {
                $aqt_element = Answer_Question_Test::where([
                    ['question_test_id', $qt->id],
                    ['answer_id', $answer],
                    ])->first();
                    
                $user = Auth::user();
                $user->answer_question_tests()->attach($aqt_element->id, [
                    'selected_answers' => 1,
                    'answer_points' => 0,
                    ]);

                $correct_ans = $aqt_element->correct_answer;
                $aqtu_element = $user->answer_question_tests()->where('answer_question_test_id', $aqt_element->id)->first();
                // dd($aqtu_element);
                if($correct_ans === $aqtu_element->pivot->selected_answers)
                {
                    $user->answer_question_tests()->updateExistingPivot($aqt_element->id, [
                        'answer_points' => $qt->question_value/$correct_count,
                        ]);
                }
                else
                {
                    $user->answer_question_tests()->updateExistingPivot($aqt_element->id, [
                        'answer_points' => 0,
                        ]);
                }
            }
        }
        else
            return 'Debes seleccionar al menos una respuesta';
    }



}
