<?php

namespace App\Models;

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
