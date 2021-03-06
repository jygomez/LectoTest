<?php

namespace App\Http\Controllers\Web;

use App\Answer_Question_Test_User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Test;
use App\User;
use App\Answer;
use App\Question;
use App\Question_Test;
use App\Answer_Question_Test;


class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show_test($id, Request $request) //pasando el request como parametro en este metodo GET se accede a la URL que se va a dibujar.
    {
        $user = Auth::user();
        $test = Test::find($id);
        $current_question = ($request->current_question) ? : 0;

        $questions = Question::whereHas('tests', function($query) use($id){
            $query->where('test_id', $id);
        })->get();

        $qt_elements = Question_Test::where('test_id', $id)->get();

        $qt_answers = collect([]);
        foreach($qt_elements as $qt)
        {
            $qt_id = $qt->id;
            $qt_ans = Answer::whereHas('question_tests', function($query) use($qt_id){
                $query->where('question_test_id', $qt_id);
            })->get();

            $qt_answers->push($qt_ans);
        }

        return view('web.show_test', compact('test', 'questions', 'qt_answers', 'user', 'current_question'));
    }


    public function save_taken_test(Request $request, $test_id, $quest_id)
    {
        $qt_element = Question_Test::where([
            ['test_id', $test_id],
            ['question_id', $quest_id],
        ])->first();

        $correct_count = Answer_Question_Test::where('question_test_id', $qt_element->id)->sum('correct_answer');

        if($request->selected_answers != null)
        {
            foreach($request->selected_answers as $answer)
            {
                $aqt_element = Answer_Question_Test::where([
                    ['question_test_id', $qt_element->id],
                    ['answer_id', $answer],
                    ])->first();
                $user = Auth::user();
                $user->answer_question_tests()->attach($aqt_element->id, [
                    'selected_answers' => 1,
                    'answer_points' => 0,
                    ]);

                $correct_ans = $aqt_element->correct_answer;
                $aqtu_element = $user->answer_question_tests()->where('answer_question_test_id', $aqt_element->id)->first();
                if($correct_ans === $aqtu_element->pivot->selected_answers)
                {
                    $user->answer_question_tests()->updateExistingPivot($aqt_element->id, [
                        'answer_points' => $qt_element->question_value/$correct_count,
                        ]);
                }
                else
                {
                    $user->answer_question_tests()->updateExistingPivot($aqt_element->id, [
                        'answer_points' => 0,
                        ]);
                }
            }

            $next_question_id = (intval($request->next_quest_id) > 0) ? $request->next_quest_id : null;

            // Si viene null lo que tienes que hacer es un redirect a otra pantalla donde diga gracias
            if($next_question_id)
            {
                return redirect()->route('show_test', ['id' => $test_id, 'current_question' => $next_question_id])
                                 ->with('info', 'éxito');
            }
            else
            {
                return 'gracias';
            }


        }
        else
            return 'Debes seleccionar al menos una respuesta';

    }


	public function save_answer(Request $request)
	{

		$data = $request->all();

		$qt_element = Question_Test::where([
			['test_id', $data['test_id']],
			['question_id', $request['question_id']],
		])->first();

		$correct_count = Answer_Question_Test::where('question_test_id', $qt_element->id)->sum('correct_answer');


		$user = Auth::user();


		// Encontarar las respuestas previas y eliminarlas para la pregunta actual
		$question_list = Answer_Question_Test::where('question_test_id', $qt_element->id)->get();
		$question_ids  = $question_list->map(function ($aqt, $key) {
			return $aqt->id;
		});

		$questionsToDelete = Answer_Question_Test_User::whereIn('answer_question_test_id', $question_ids)
			->where([['user_id', $user->id ]])
		->delete();

		//dd($questionsToDelete);


		if($request['selected_answers'] != null)
		{
			foreach($request['selected_answers'] as $answer)
			{
				$aqt_element = Answer_Question_Test::where([
					['question_test_id', $qt_element->id],
					['answer_id', $answer],
				])->first();


				$user->answer_question_tests()->attach($aqt_element->id, [
					'selected_answers' => 1,
					'answer_points' => 0,
				]);

				$correct_ans = $aqt_element->correct_answer;
				$aqtu_element = $user->answer_question_tests()->where('answer_question_test_id', $aqt_element->id)->first();


				if($correct_ans === $aqtu_element->pivot->selected_answers)
				{
					$user->answer_question_tests()->updateExistingPivot($aqt_element->id, [
						'answer_points' => $qt_element->question_value/$correct_count,
					]);
				}
				else
				{
					$user->answer_question_tests()->updateExistingPivot($aqt_element->id, [
						'answer_points' => 0,
					]);
				}
			}

			return response()->json(['status' => 'ok', 'message' => 'Respuesta recibida']);

		}
		else
			return response()->json(['status' => 'error', 'message' => 'Debes seleccionar al menos una respuesta']);
	}

}
