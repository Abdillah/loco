<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foodstuff extends Model
{
    public function eatspot()
    {
        return $this->belongsTo('App\Models\Eatspot');
    }
}
