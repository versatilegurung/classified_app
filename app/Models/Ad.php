<?php

namespace App\Models;

use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory, WithPagination;

    protected $table = 'ads';

    protected $casts = [
        'negotiable' => 'boolean',
        'attachments' => 'array',
        'library' => AsCollection::class,

    ];

    protected $fillable = [
        'title',
        'slug', //add slug to fillable
        'description',
        'price',
        'category_id',
        'district_id',
        'negotiable',
        'featured',
        'condition',
        'user_id',
        // 'library',
        // 'images',
        'published'
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];


    //add slug when saving the data
    public static function boot()
    {
        parent::boot();

        static::creating(function ($ad) {
            // ...creating slug
            $ad->slug = Str::slug($ad->title);
        });

        static::creating(function (ad $ad) {
            //set expiry date to 60 days
            $ad->expires_at = now()->addDays(60);
        });
    }

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function adImage()
    {
        return $this->hasMany(AdImage::class)->latest();
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
