<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Quiz;
use \App\Category;
use Auth;
use Illuminate\Validation\Rule;
use Validator;

class QuizController extends Controller
{
    public function index()
    {   
        
        $quizz = \App\Quiz::inRandomOrder()->take(10)->get();
        $category_name = \App\Category::all()->toArray();//<--Categoryと紐付ける書き方てこずった。
        return view('quiz.first',compact('quizz','category_name'));
    }

    // public function result(Request $request,$id)
    // {
    //     $validatedData = $request->validate([
    //         'answer' => 'required|between:1,4',
    //     ]);
    //     $my_answer = $request->input('answer');
    //     $quizz = \App\Quiz::findOrFail($id);
    //     $answer = $quizz->answer;
    //     //今のIDより大きいIDのなかで最初のIDを返す、なかったら最終問題のviewを返す。
    //     $nextQuiz = \App\Quiz::where('id', '>', $id)->first();
    //     if($nextQuiz){
    //         return view('quiz.result',compact('my_answer','quizz','answer','nextQuiz'));
    //     } else {
    //         return view('quiz.last_result',compact('my_answer','quizz','answer'));
    //     }
    // }

    public function new()
    {
        $categories = \App\Category::all();
        return view('quiz.new',compact('categories'));
    }

    public function create(Request $request)
        {
            $answers = array(
                $request->input('answer1'),
                $request->input('answer2'),
                $request->input('answer3'),
                $request->input('answer4'),
            );

            $answer = $request->input('answer');


            // $test = $request->all();
            // $test['answers'] = $answers;
            $validatedData = $request->validate([
                'quizz_janre' => 'required',
                'question' => 'required|string',
                'answer1' => 'required|string',
                'answer2' => 'required|string',
                'answer3' => 'required|string',
                'answer4' => 'required|string',
                'answer'  => 'required|string',
                'description' =>'required|string'
            ]);
            
            // $validator = Validator::make($test,[
                //     'quizz_janre' => 'required',
                //     'question' => 'required|string',
                //     'answer1' => 'required|string',
                //     'answer2' => 'required|string',
                //     'answer3' => 'required|string',
                //     'answer4' => 'required|string',
                //     'description' =>'required|string'
                // ]);
                
                // if($validator->fails()){
                    //     return redirect('/new');
                    // } else{
            if(in_array($answer, $answers, true)
            ){
                $quiz = new \App\Quiz;
                $quiz->answer1 = $request->input('answer1');
                $quiz->answer2 = $request->input('answer2');
                $quiz->answer3 = $request->input('answer3');
                $quiz->answer4 = $request->input('answer4');
                $quiz->category_id = $request->input('quizz_janre');
                $quiz->question = $request->input('question');
                $quiz->answer = $request->input('answer');
                $quiz->description = $request->input('description');
                $quiz->save();
                return redirect('/home');
            } else{
                return redirect('/new_error');
            }
        }

    public function new_error()
    {
        $categories = \App\Category::all();
        return view('quiz.new_error',compact('categories'));
    }

    public function list()
    {
        $quizzes = \App\Quiz::all();
        $user_id = Auth::id();
        return view('quiz.list',compact('quizzes','user_id'));
    }

    public function edit($id)
    {
        $quizzes = \App\Quiz::findOrfail($id);
        $categories = \App\Category::all();//<--Quizと紐付けようとしててこずった。
        return view('quiz.edit',compact('quizzes','categories'));
    }

    public function update($id,Request $request)
    {
        $quizzes = \App\Quiz::findOrfail($id);
        // $quizzes = new \App\Quiz;<--これやると新しくcreateされる。
        $quizzes->category_id = $request->input('quizz_janre');
        $quizzes->question = $request->input('question');
        $quizzes->answer1 = $request->input('answer1');
        $quizzes->answer2 = $request->input('answer2');
        $quizzes->answer3 = $request->input('answer3');
        $quizzes->answer4 = $request->input('answer4');
        $quizzes->answer = $request->input('answer');
        $quizzes->description = $request->input('description');
        $quizzes->save();
        return redirect('/home');
    }

    public function destroy($id)
    {
        $quizzes = \App\Quiz::findOrfail($id);
        $quizzes->delete();
        // $quizzes->save();<--これやるとredirectされるけどdeleteされない。
        return redirect('/home');
    }

}
