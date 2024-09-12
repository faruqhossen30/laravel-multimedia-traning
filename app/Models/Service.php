<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'short_description',
        'description',
        'description_code',
        'price',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'service_categories');
    }
}
