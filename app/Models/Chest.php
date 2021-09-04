<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chest extends Model
{
    use HasFactory;
    
    protected  $fillable = ['user_id'];
    protected  $guarded = ['rubys', 'chances', 'coins', 'score'];
    protected  $hidden = ['id', 'user_id', 'created_at', 'updated_at'];

    public function user(){ return $this->belongsTo(User::class, 'user_id'); }
}
