<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable=['anime_id','actor_id','name','gender','type','image','description'];
    public function anime(){
        return $this->belongsTo(Anime::class,'anime_id');
    }
    public function actor()
    {
        # code...
        return $this->belongsTo(VoiceActor::class,'actor_id');
    }
}