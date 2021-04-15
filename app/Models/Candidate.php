<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    // use HasFactory;

    public function portfolio(){
        return $this->belongsTo('App\Models\Portfolio');
    }

    public function votes(){
        return $this->hasMany('App\Models\Vote');
    }
}
