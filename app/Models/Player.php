<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['nickname', 'user_id'];
    protected $guarded = ['rubys', 'chances', 'coins', 'score'];
    protected $hidden = ['id', 'user_id', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function registe(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function modulePlayer(){
        return $this->hasMany('App\Models\Pivots\ModulePlayer', 'player_id', 'id');
    }
}
