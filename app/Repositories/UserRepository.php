<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\AbstractClasses\AbstractRepository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends AbstractRepository
{
    protected $model = User::class;

    public function store($name, $surname, $email, $birth_date, $password){

        $user = User::create([
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'birth_date' => $birth_date,
            'password' => Hash::make($password),
        ]);
    
        return $user;
    }

    public function destroy($id){
        $user = $this->getById($id);
        $user->directory()->delete();
        return $user->delete();
    }

    public function getAll(){
        return $this->model::whereRoleIs('user')->all();
    }
}