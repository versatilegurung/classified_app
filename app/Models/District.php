<?php

namespace App\Models;

use App\Models\Ad;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug', //add slug to fillable
    ];

    protected $table = 'districts';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($district) {
            // ...creating slug
            $district->slug = Str::slug($district->name);
        });
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
