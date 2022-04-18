<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Status;
use Illuminate\Support\Str;

class Pengumuman extends Model
{
    use HasFactory;

    const EXCERPT_LENGTH = 100;

    protected $guarded = ['id'];

    // User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Status
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    // Excerpt in Bahasa Malaysia
    public function excerptMy()
    {
        return Str::limit($this->content_my, self::EXCERPT_LENGTH);
    }

    // Excerpt in English
    public function excerptEn()
    {
        return Str::limit($this->content_en, self::EXCERPT_LENGTH);
    }
}
