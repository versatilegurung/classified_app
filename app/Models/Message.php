<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['message', 'user_id', 'recipient_id', 'read_at'];

    protected $table = 'messages';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
