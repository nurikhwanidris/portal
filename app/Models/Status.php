<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Page status
    public function page()
    {
        return $this->hasMany(Page::class);
    }
}
