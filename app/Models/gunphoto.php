<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gunphoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'caliber',
        'fname',
        'sname',
        'pname',
        'birthday',
        'photo',
        'phone'
    ];
}
