<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['chat_id','sender_id', 'message'];
    
    protected $hidden = ['id','chat_id', 'sender_id', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function getMessage(){
        return $this->message;
    }

    public function Chat(){
        return $this->belongsTo(Chat::class, 'id', 'chat_id');
    }

    public function sender(){
        return $this->belongsTo(User::class, 'id', 'sender_id');
    }
}
