<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address',
        'profile_photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getProfilePhotoAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('storage/profile-photos/default.png');
    }
}
