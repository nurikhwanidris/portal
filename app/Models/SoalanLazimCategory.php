<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalanLazimCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function soalanLazims()
    {
        return $this->hasMany(SoalanLazim::class);
    }
}
