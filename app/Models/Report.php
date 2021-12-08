<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['type_report', 'model_id', 'model_type', 'user_id'];

    protected $hidden = ['id', 'user_id', 'created_at', 'updated_at'];

    public function getId(){
        return $this->id;
    }

    public function getCreationDate(){
        return $this->created_at->format('d-m-Y');
    }

    public function Admin(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
