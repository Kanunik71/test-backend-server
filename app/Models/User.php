<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const CREATED_AT = 'created';
    const UPDATED_AT = null;

    protected $table = 'users';

    protected $fillable = ['username', 'first_name', 'last_name'];

}
