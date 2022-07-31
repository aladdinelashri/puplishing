<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Name',
    ];

    protected $dates = ['deleted_at'];

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    public function categoryitems()
    {
        return $this->belongsToMany(Categoryitem::class);
    }

    public function coloroption()
    {
        return $this->hasMany(Coloroption::class);
    }


    public function sizeoption()
    {
        return $this->hasMany(Sizeoption::class);
    }


    public function weightoption()
    {
        return $this->hasMany(Weightoption::class);
    }

}
