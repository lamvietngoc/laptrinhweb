<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
   


    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'role_id',
    ];


}