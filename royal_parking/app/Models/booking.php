<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function parkiran()
    {
        return $this->belongsTo(parkiran::class);
    }
}
