<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class words extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function file()
    {
        return $this->belongsTo('App\Models\File');
    }
}
