<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['nickname', 'user_id', 'chances'];

    protected $guarded = ['id', 'rubys', 'coins', 'score'];
    
    protected $hidden = ['user_id', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function getNickname(){
        return $this->nickname;
    }

    public function setScore($var){
        $this->score += $var;
    }

    public function setChances($var){
        $this->chances += $var;
    }

    public function setCoins($var){
        $this->coins += $var;
    }

    public function setRubys($var){
        $this->rubys += $var;
    }

    public function registe(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function modulePlayer(){
        return $this->hasMany('App\Models\Pivots\ModulePlayer', 'player_id', 'id');
    }

    public function myGroups(){
        return $this->hasMany(Group::class, 'admin_id');
    }

    public function groupPlayer(){
        return $this->hasMany(Pivots\GroupPlayer::class, 'player_id');
    }
}
