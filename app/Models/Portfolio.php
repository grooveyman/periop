<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    public function candidates(){
        return $this->hasMany('App\Models\Candidate', 'portfolios_id');
    }

    public function votes(){
        return $this->hasMany('App\Models\Vote', 'portfolios_id');
    }
}
