<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $fillable=['name','season_id','anime_id','description','duration'];
    public function anime(){
        return $this->belongsTo(Anime::class,'anime_id');
    }
}