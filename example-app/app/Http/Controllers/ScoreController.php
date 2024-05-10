<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Event;
use App\Models\Quiz;
use App\Models\Quizzes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $quiz_id = $request->quiz;
            $quiz = Quizzes::where('event_id', $request->quiz)->get();

            $answers = $request->except('_token');

            $score = 0;
            foreach ($answers as $answer => $value) {
                $answer = Answers::find($value);
                if ($answer->is_correct == 1) {
                    $score++;
                }
            }

            return view('score', ['score' => $score, 'quiz_id' => $quiz_id, 'quiz' => $quiz]);

            } catch (\Throwable $e) {
            throw $e;
        }




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
