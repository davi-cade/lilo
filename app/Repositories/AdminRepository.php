<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\AbstractClasses\AbstractRepository;
use Illuminate\Support\Facades\Hash;

class AdminRepository extends AbstractRepository
{
    protected $model = User::class;

    public function store($name, $surname, $email, $birth_date, $password){
        $admin = User::create([
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'birth_date' => $birth_date,
            'password' => Hash::make($password),
            'avatar' => '/img/userProfile/default-avatar.svg',
        ]);
        return $admin;
    }
}