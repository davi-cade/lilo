<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\AbstractClasses\AbstractRepository;
use Illuminate\Support\Facades\Auth; 
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
        ]);
        return $admin;
    }

    public function destroy($id){
        $admin = $this->getById($id);
        $admin->directory()->delete();
        return $admin->delete();
    }

    public function getAll(){
        return $this->model::whereRoleIs('administrator')
        ->orWhereRoleIs('superadministrator')
        ->where('id', '<>', Auth::user()->getId())->all();
    }

    public function count(){
        return $this->model::whereRoleIs('administrator')
        ->orWhereRoleIs('superadministrator')->count();
    }
}