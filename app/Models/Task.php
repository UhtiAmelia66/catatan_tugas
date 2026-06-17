<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [

        'judul',

        'deskripsi',

        'deadline',

        'status'

    ];

    public $timestamps = false;
}