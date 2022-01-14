<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = FALSE;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description'
    ];
}
