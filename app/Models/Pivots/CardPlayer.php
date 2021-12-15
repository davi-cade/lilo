<?php

namespace App\Models\Pivots;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardPlayer extends Model
{
    use HasFactory;

    protected $fillable = ['assimilated', 'card_id', 'player_id'];

    protected  $guarded = [];

    protected $hidden = ['id', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function player(){
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function card(){
        return $this->belongsTo(Card::class, 'card_id');
    }
}
