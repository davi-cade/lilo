<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chest extends Model
{
    use HasFactory;
    
    protected  $guarded = ['Rubys', 'Chances', 'Coins', 'Score'];
    protected  $hidden = ['id', 'created_at', 'updated_at','user_id'];
}
