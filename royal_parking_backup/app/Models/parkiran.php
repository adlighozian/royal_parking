<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parkiran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['kendaraan','booking'];

    public function kendaraan()
    {
        return $this->hasMany(kendaraan::class);
    }

    public function booking()
    {
        return $this->hasMany(booking::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}
