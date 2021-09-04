<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected  $fillable = ['name', 'description', 'admin_id'];

    protected  $hidden = ['id', 'admin_id', 'created_at', 'updated_at'];
}
