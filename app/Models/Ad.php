<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'location',
        'negotiable',
        'condition',
        'user_id',
        'images'
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $casts = [
        'negotiable' => 'boolean'
    ];


<<<<<<< HEAD
    protected static function boot()
    {
        parent::boot();
    }
=======
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($model) {
    //         // Check if the name attribute is set and if the slug should be updated.
    //         if ($model->isDirty('images')) {
    //             $model->user_id = Auth::user()->id;
    //         }
    //     });
    // }
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}