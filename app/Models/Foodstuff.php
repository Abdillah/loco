<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foodstuff extends Model
{
    public function eatspot()
    {
        return $this->belongsTo('App\Models\Eatspot');
    }

    public function getRatingStarsAttribute()
    {
        $starmap = [
            'Mediocre' => 1,
            'Good' => 2,
            'Recommended' => 3,
            'Most Recommended' => 4,
            'Very Recommended' => 5,
        ];

        return $starmap[$this->rating];
    }
}
