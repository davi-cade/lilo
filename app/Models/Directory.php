<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Directory extends Model
{
    use HasFactory;

    protected $fillable = ['url_avatar', 'url_directory', 'directoryable_id', 'directoryable_type'];
    
    protected $hidden = ['id', 'directoryable_id', 'directoryable_type', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function directoryable()
    {
        return $this->morphTo();
    }

    public function deleteDirectory(){
        return Storage::deleteDirectory($this->url_directory);
    }
}
