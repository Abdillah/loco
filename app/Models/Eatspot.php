<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eatspot extends Model
{
    public function foodstuffs()
    {
        return $this->hasMany('App\Models\Foodstuff');
    }
}
