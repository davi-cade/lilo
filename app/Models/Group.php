<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    use HasSlug;

    protected  $fillable = ['name', 'description', 'admin_id', 'slug'];

    protected  $guarded = ['name', 'description', 'slug'];

    protected  $hidden = ['id', 'admin_id', 'created_at', 'updated_at'];

    /**
    * Get the options for generating the slug.
    */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
        ->generateSlugsFrom(['name', 'admin_id'])
        ->saveSlugsTo('slug')
        ->usingSeparator('-');
    }

    public function getId(){
        return $this->id;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }
    
    public function getCreationDate(){
        return $this->created_at->format('d-m-Y');
    }

    public function admin(){
        return $this->belongsTo(Player::class, 'admin_id');
    }

    public function getParticipatingPlayers(){
        return $this->belongsToMany(Player::class, 'group_players', 'group_id', 'player_id')->orderBy('score', 'DESC');
    }
}
