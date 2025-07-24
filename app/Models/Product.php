<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['thumbnail', 'images', 'name', 'slug', 'short_description', 'content', 'quantity', 'price'];

    protected $casts = [
        'images' => 'array',
    ];
}
