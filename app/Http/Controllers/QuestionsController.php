<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = array(
            'response_code' => 0,
            'results' => array(
                array('id' => 0, 'question' => 'Which of the following movies was not based on a novel by Stephen King?', 'correct_answer' => 'The Thing', 'incorrect_answers' => array('Carrie', 'Misery', 'The Green Mile')),
                array('id' => 1, 'question' => 'The retail disc of Tony Hawk&#039;s Pro Skater 5 only comes with the tutorial.', 'correct_answer' => 'True', 'incorrect_answers' => array('False')),
                array('id' => 2, 'question' => 'What European country is not a part of the EU?', 'correct_answer' => 'Norway', 'incorrect_answers' => array('Lithuania', 'Ireland', 'Czechia')),
                array('id' => 3, 'question' => 'In the &quot;Half-Life&quot; series, &quot;H.E.V&quot; stands for &quot;Hazardous Evasiveness Vest&quot;', 'correct_answer' => 'False', 'incorrect_answers' => array('True')),
                array('id' => 4, 'question' => 'When you cry in space, your tears stick to your face.', 'correct_answer' => 'True', 'incorrect_answers' => array('False')),
                array('id' => 5, 'question' => 'Which male player won the gold medal of table tennis singles in 2016 Olympics Games?', 'correct_answer' => 'Ma Long (China)', 'incorrect_answers' => array('Zhang Jike (China)', 'Jun Mizutani (Japan)', 'Vladimir Samsonov (Belarus)')),
                array('id' => 6, 'question' => 'What is the real name of the famous spanish humorist, El Risitas?', 'correct_answer' => 'Juan Joya Borga', 'incorrect_answers' => array('Gabriel Garcia Marquez', 'Jesus Quintero', 'Ernesto Guevara')),
                array('id' => 7, 'question' => 'In &quot;Undertale&quot;, the main character of the game is Sans.', 'correct_answer' => 'False', 'incorrect_answers' => array('True')),
                array('id' => 8, 'question' => 'In the comics, which Sonic character took command of the Dark Legion after Luger&#039;s assassination?', 'correct_answer' => 'Lien-Da', 'incorrect_answers' => array('Kragok', 'Dimitri', 'Remington')),
                array('id' => 9, 'question' => 'Which of the following Call of Duty games was a PS3 launch title?', 'correct_answer' => 'Call of Duty 3', 'incorrect_answers' => array('Call of Duty 4: Modern Warfare', 'Call of Duty: World at War', 'Call of Duty: Roads to Victory')),
            )
        );
        //console.log($data);
        return response(json_encode($data), Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questions  $questions
     * @return Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questions  $questions
     * @return Response
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questions  $questions
     * @return Response
     */
    public function update(Request $request, Questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questions  $questions
     * @return Response
     */
    public function destroy(Questions $questions)
    {
        //
    }
}
