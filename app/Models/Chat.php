<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['group_id'];
    
    protected $hidden = ['id','group_id', 'type', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function getType(){
        return $this->type;
    }

    public function group(){
        return $this->belongsTo(Group::class, 'id', 'group_id');
    }

    public function messages(){
        return $this->hasMany(Message::class, 'chat_id')->orderByDesc('created_at');
    }
}
