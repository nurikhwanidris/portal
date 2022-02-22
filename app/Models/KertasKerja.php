<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KertasKerja extends Model
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
}
