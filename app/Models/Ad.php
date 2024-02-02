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

    protected $hidden =[
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $casts = [
        'negotiable' => 'boolean'
    ];


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

}
