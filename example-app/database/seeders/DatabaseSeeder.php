<?php

namespace Database\Seeders;

use App\Models\Answers;
use App\Models\Competitions;
use App\Models\Event;
use App\Models\Questions;
use App\Models\Quizzes;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    use HasFactory;
    public function run(): void
    {       Competitions::factory(6)->create();
        Event::factory(18)->create();
Quizzes::factory(60)->create();

       Questions::Factory(200)->create();
       Answers::factory(1000)->create();
    }
}
