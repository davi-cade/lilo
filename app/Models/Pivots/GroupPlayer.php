<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;


use App\Models\Player;

class GroupPlayer extends Model
{
    use HasFactory;

    protected  $fillable = ['player_id', 'group_id'];
    protected  $hidden = ['player_id', 'group_id', 'created_at', 'updated_at'];

    public function player(){
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function group(){
        return $this->belongsTo(Group::class, 'group_id');
    }
}
