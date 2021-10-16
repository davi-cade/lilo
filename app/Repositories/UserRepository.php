<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\AbstractClasses\AbstractRepository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends AbstractRepository
{
    protected $model = User::class;

    public function store($name, $email, $password, $img){

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'avatar' => $img
        ]);
    
        return $user;
    }

}