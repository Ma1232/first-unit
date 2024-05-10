<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'event_id'

     ];
    public function questions() {
        return $this->hasMany(Questions::class);
     }
    }
