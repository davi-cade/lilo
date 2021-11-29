<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['group_id','title'];
    
    protected $hidden = ['id','group_id', 'title', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function title(){
        return $this->title;
    }

    public function group(){
        return $this->belongsTo(Group::class, 'id', 'group_id');
    }

    public function messages(){
        return $this->hasMany(Message::class, 'chat_id')->orderByDesc('created_at');
    }
}
