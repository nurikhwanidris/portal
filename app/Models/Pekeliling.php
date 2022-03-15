<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekeliling extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Status
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

}
