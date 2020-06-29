<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajar extends Model
{
    protected $fillable = [
        'pelajar_id', 
        'pelajar_name', 
        'sekolah_name', 
        'full_name',
        'qrcode',
    ];

    protected $table = 'pelajar';

}
