<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoiceActor extends Model
{
    use HasFactory;
    protected $fillable=['name','gender','image'];
    public function anime(){
        return $this->belongsToMany(Anime::class,'anime_actors');
    }
    public function character()
    {
        # code...
        return $this->hasMany(Character::class);
    }
}