<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Questions;
use App\Models\Quizzes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class QuestionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $quizzes=Quizzes::pluck('id')->toArray();
        return [
                'question'=>fake()->sentence(3),
                'quiz_id'=>fake()->randomElement($quizzes)
        ];
    }


    public function run()
    {

    }




}






