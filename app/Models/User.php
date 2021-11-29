<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'surname','email', 'birth_date', 'password'];

    protected $hidden = ['id','password','remember_token'];

    protected $casts = ['email_verified_at' => 'datetime'];

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name." ".$this->surname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getBirthDate(){
        return $this->birth_date;
    }

    public function directory(){
        return $this->morphOne(Directory::class, 'directoryable');
    }

}
