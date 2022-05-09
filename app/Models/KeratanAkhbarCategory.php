<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeratanAkhbarCategory extends Model
{
    use HasFactory;

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

    // KeratanAkhbar
    public function keratanAkhbar()
    {
        return $this->hasMany(KeratanAkhbar::class);
    }
}
