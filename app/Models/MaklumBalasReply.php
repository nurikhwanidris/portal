<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaklumBalasReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'maklum_balas_id',
        'reply',
    ];

    // User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Maklum Balas
    public function maklumBalas()
    {
        return $this->belongsTo(MaklumBalas::class);
    }
}
