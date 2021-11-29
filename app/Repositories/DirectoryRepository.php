<?php

namespace App\Repositories;

use App\Models\Directory;
use App\Repositories\AbstractClasses\AbstractRepository;

class DirectoryRepository extends AbstractRepository
{
    protected $model = Directory::class;

    public function store($url_avatar, $url_directory, $directoryable_id, $directoryable_type){
        $directory = Directory::create([
            'url_avatar' => $url_avatar,
            'url_directory' => $url_directory,
            'directoryable_id' => $directoryable_id,
            'directoryable_type' => $directoryable_type
        ]);
        return $directory;
    }
    
}