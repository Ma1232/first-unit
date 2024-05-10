<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Quizzes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $request)
    {
// return($request);
try {
    $quiz = Quizzes::where('event_id', $request->competitionId)->paginate(6);
    $questions = DB::table('questions')->get();
    $answers = DB::table('answers')->get();

if ($quiz->isEmpty()) {
    return redirect()->back()->with('error', 'No quizzes found for this competition.');
}
else{
    return view('quiz', ['Quiz' => $quiz, 'questions' => $questions, 'answers' => $answers]);}
} catch (\Throwable $e) {
    throw $e;
}






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
