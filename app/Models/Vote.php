<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function candidate(){
        return $this->belongsTo('App\Models\Candidate');
    }

    public function portfolio(){
        return $this->belongsTo('App\Models\Portfolio');
    }
}
