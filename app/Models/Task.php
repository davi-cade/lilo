<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    protected $hidden = ['id', 'difficulty_level', 'belonging_module_slug', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function getDifficultyLevel(){
        return $this->difficulty_level;
    }

    //public function belongingModuleId(){return $this->belonging_module_id;}

}
