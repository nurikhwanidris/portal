<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Page
    public function page()
    {
        return $this->hasMany(Page::class);
    }

    // User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Slider
    public function slider()
    {
        return $this->hasMany(Slider::class);
    }
}
