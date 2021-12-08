<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;
    use HasFactory;
    use HasSlug;

    protected $fillable = ['title', 'description', 'landmark', 'reward', 'type_landmark', 'type_reward'];

    protected $guarded = ['slug'];

    protected $hidden = ['id', 'created_at', 'updated_at'];

    /**
    * Get the options for generating the slug.
    */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
        ->generateSlugsFrom(['title', 'landmarks'])
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
}
