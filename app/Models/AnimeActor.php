<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeActor extends Model
{
    use HasFactory;
    protected $fillable=['anime_id','actor_id'];
}