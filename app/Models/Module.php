<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['title', 'position', 'description'];

    protected $guarded = ['slug'];

    protected $hidden = ['id', 'created_at', 'updated_at'];

    /**
    * Get the options for generating the slug.
    */
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

    public function getCreationDate(){
        return $this->created_at->format('d-m-Y');
    }

    public function getSlug(){
        return $this->slug;
    }
    
    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }
    
    public function tasks(){
        return $this->hasMany(Task::class, 'belonging_module_id', 'id');
    }
}
