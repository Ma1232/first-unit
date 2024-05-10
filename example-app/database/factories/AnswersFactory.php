<?php

namespace Database\Factories;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answers>
 */
class AnswersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $question=Questions::pluck('id')->toArray();
        return [
            'answer'=>fake()->sentence(3),
            'is_correct'=>fake()->numberBetween(0,1),
            'question_id'=>fake()->randomElement($question)
        ];
    }
}
