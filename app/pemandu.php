<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemandu extends Model
{
    protected $primaryKey = 'pemandu_id';
    protected $fillable = [
        'pemandu_fullname', 
        'pemandu_ic', 
        'pemandu_phone', 
        'pemandu_username',
        'pemandu_password',
    ];

    protected $table = 'pemandu';
}
