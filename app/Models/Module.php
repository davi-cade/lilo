<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected  $fillable = ['title', 'description'];

    protected  $hidden = ['id', 'created_at', 'updated_at'];

    public function getTitle(){
        return $this->title;
    }

    public function getDescrition(){
        return $this->description;
    }
    
    public function tasks(){
        return $this->hasMany(Task::class, 'belonging_module_id');
    }
}
