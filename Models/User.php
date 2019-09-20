<?php

namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    protected $table = 'users';
    protected $dateFormat = 'U';
    protected $fillable = [
        'name',
        'date_created'
    ];
}