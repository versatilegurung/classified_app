<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomField extends Model
{
    use HasFactory;

    protected $table = 'custom_fields';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
