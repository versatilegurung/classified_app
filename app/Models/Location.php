<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'slug', //add slug to fillable
    ];

    protected $table = 'locations';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($location) {
            // ...creating slug
            $location->slug = Str::slug($location->name);
        });
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
