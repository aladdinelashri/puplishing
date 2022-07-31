<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Sizeoption extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Name',
    ];

    protected $dates = ['deleted_at'];
}





