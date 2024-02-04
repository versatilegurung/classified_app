<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug', //add slug to fillable
        'parent_id'

    ];

    //add slug when saving the data
    public static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            // ...creating slug
            $category->slug = Str::slug($category->name);
        });
    }



    protected static function newFactory()
    {
        return \Database\Factories\CategoryFactory::new();
    }
}
