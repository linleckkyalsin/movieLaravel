<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $fillable=['type_id','name','release_date','year','bg_img','episode','description','duration_time','year_id'];

    public function genre(){
        return $this->belongsToMany(Genre::class,'anime_genres');
    }
    public function actor(){
        return $this->belongsToMany(VoiceActor::class,'anime_actors');
    }
    public function director(){
        return $this->belongsToMany(Director::class,'anime_directors');
    }
    public function category(){
        return $this->belongsToMany(Category::class,'anime_categories');
    }
    public function character(){
        return $this->hasMany(Character::class);
    }
    public function episode(){
        return $this->hasMany(Episode::class);
    }
    public function type(){
        return $this->belongsTo(Type::class,'type_id');
    }
    public function year(){
        return $this->belongsTo(Year::class,'type_id');
    }
}
