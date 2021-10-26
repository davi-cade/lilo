<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Module;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ModulePlayer extends Model
{
    use HasFactory;

    protected  $fillable = ['player_nickname', 'module_id', 'next_module_player_id', 'total_assimilated_card', 'total_available_card'];
    protected  $hidden = ['accessible', 'concluded', 'module_id', 'player_nickname', 'created_at', 'updated_at'];

    public function getTotalAvailableCard(){
        return $this->total_available_card;
    }

    public function getTotalAssimilatedCard(){
        return $this->total_assimilated_card;
    }

    public function player(){
        return $this->belongsTo(Player::class, 'player_nickname');
    }

    public function module(){
        return $this->belongsTo(Module::class, 'module_id');
    }
}
