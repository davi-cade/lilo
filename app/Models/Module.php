<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected  $fillable = ['title', 'description'];
    protected  $guarded = ['accessible'];
    protected  $hidden = ['id', 'created_at', 'updated_at','next_module_id'];

    public function getTitle(){
        return $this->title;
    }
    public function getDescrition(){
        return $this->description;
    }
    public function openUp(){
        $this->accessible = true;
    }
    

    public function nextModule(){
        return $this->hasOne(Module::class, 'next_module_id');
    }
    public function tasks(){
        return $this->hasMany(Task::class, 'belonging_module_id');
    }
}
