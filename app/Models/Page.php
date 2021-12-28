<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\User;
use App\Models\Status;

class Page extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug_my' => [
                'source' => 'title_my'
            ],
            'slug_en' => [
                'source' => 'title_en'
            ]
        ];
    }

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
}
