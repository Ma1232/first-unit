<?php

namespace Database\Factories;

use App\Models\Competitions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $competetions=Competitions::pluck('id')->toArray();
        return [

            'competition_id'=>fake()->randomElement($competetions),
            'name'=>fake()->name(),
            'type'=>fake()->sentence(1),
            'desc'=>fake()->sentence(5)

        ];
    }
}
