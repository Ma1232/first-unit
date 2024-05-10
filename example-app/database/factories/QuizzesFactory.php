<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quizzes>
 */
class QuizzesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    use HasFactory;
    public function definition(): array
    {
$events=Event::pluck('id')->toArray();
        return [
            "event_id"=>fake()->randomElement($events),
            'title'=>fake()->title(),
            "desc"=>fake()->sentence(5)
        ];
    }
}
