<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaklumBalas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Maklum Balas Reply
    public function maklumBalasReply()
    {
        return $this->hasMany(MaklumBalasReply::class);
    }
}
