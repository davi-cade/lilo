<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['nickname', 'user_id', 'chances'];

    protected $guarded = ['rubys', 'coins', 'score'];
    
    protected $hidden = ['id', 'user_id', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function getNickname(){
        return $this->nickname;
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
