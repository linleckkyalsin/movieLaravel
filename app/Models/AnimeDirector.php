<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeDirector extends Model
{
    use HasFactory;
    protected $fillable=['anime_id','director_id'];
    
}