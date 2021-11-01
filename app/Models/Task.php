<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['title', 'position', 'difficulty_level', 'description'];

    protected $guarded = ['slug'];

    protected $hidden = ['id', 'difficulty_level', 'belonging_module_id', 'created_at', 'updated_at'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
        ->generateSlugsFrom(['title', 'position'])
        ->saveSlugsTo('slug')
        ->usingSeparator('-');
    }

    public function getId(){
        return $this->id;
    }

    public function getPosition(){
        return $this->position;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function getDifficultyLevel(){
        return $this->difficulty_level;
    }

    public function module(){
        return $this->belongsTo(Module::class, 'id', 'belonging_module_id');
    }
    
    public function card(){
        return $this->hasMany(Card::class, 'belonging_task_id', 'id');
    }

}
