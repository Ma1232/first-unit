<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitions extends Model
{
protected $fillable=[
    'name',
    'desc',
    'catagory'
];
    use HasFactory;
}
