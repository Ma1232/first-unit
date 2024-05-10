<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer',
        'question_id',
        "is_correct"


    ];
    public function Questions(){
return $this->belongsTo(Questions::class);
    }
}
