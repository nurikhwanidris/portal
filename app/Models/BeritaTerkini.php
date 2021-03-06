<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BeritaTerkini extends Model
{
    use HasFactory;

    const EXCERPT_LENGTH = 100;

    protected $guarded = ['id'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function excerptMy()
    {
        return Str::limit($this->content_my, self::EXCERPT_LENGTH);
    }

    public function excerptEn()
    {
        return Str::limit($this->content_en, self::EXCERPT_LENGTH);
    }

}
