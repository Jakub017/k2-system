<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use SoftDeletes, Searchable;
    protected $fillable = ['thumbnail', 'images', 'name', 'slug', 'short_description', 'content', 'quantity', 'price', 'active', 'bestseller'];

    protected $casts = [
        'images' => 'array',
        'active' => 'boolean',
        'bestseller' => 'boolean',
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'short_description' => $this->short_description,
            'content' => $this->content,
        ];
    }
}
