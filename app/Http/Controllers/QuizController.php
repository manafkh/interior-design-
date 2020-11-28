<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
        public function create(){
            $questions = Question::all();
            return view('exam')->with('questions',$questions);
        }

        public function Result(Request $request){
            $options = Answer::find(array_values($request->input('questions')));
            $res = $options->sum('point');
            $total = Question::count() * 5;

            return view('result')->with('total',$total)
                ->with('res',$res);
        }
}
