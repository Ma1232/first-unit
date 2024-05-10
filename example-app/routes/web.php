<?php

use App\Http\Controllers\competition_controller;
use App\Http\Controllers\CompetitionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;



Route::get('/', [CompetitionsController::class, 'index']);
Route::get('/event/{competition_id}', [EventController::class, 'show']);
Route::get('/quiz/{quiz_id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/score/{quiz_id}', [ScoreController::class, 'store']);
