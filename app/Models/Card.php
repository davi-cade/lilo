<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'url_video', 'difficulty_level', 'belonging_module_id'];

    protected  $guarded = [];

    protected $hidden = ['id', 'belonging_mudole_id', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->tiltle;
    }

    public function getUrlVideo(){
        return $this->url_video;
    }

    public function difficultyLevel(){
        return $this->difficulty_level;
    }

    public function CardPlyer(){
        return $this->hasMany(Pivots\CardPlyer::class, 'admin_id');
    }

    public function task(){
        return $this->belongsTo(Task::class, 'id', 'belonging_module_id');
    }

}
