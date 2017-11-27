<?php

namespace crud;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'short', 'body',
    ];
}
