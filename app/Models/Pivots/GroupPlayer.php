<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupPlayer extends Model
{
    use HasFactory;

    protected  $fillable = ['player_nickname', 'group_id'];
    protected  $hidden = ['player_nickname', 'group_slug', 'created_at', 'updated_at'];

    public function player(){
        return $this->belongsTo(Player::class, 'player_nickname');
    }

    public function group(){
        return $this->belongsTo(Group::class, 'group_id');
    }
}
