<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User')
    }

    public function words()
    {
        return $this->hasMany('App\Models\Word');
    }
}
