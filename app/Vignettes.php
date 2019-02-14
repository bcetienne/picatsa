<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vignettes extends Model
{
    protected $fillable = [
        'legend', 
        'description',
        'url'
    ];
}
