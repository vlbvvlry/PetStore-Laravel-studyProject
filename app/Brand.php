<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = FALSE;

    protected $table = 'brands';
    protected $fillable = [
        'name',
        'description'
    ];
}
