<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Questions extends Model
{

    use HasFactory;

    public function quiz() {
        return $this->belongsTo(Quizzes::class);

     }
     public function Answers() {
return $this->hasMany(Answers::class);
     }

     protected $fillable = [
        'question',
        'quiz_id',

     ];
}
