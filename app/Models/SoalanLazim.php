<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalanLazim extends Model
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

    // Soalan Lazim Parent
    public function parent()
    {
        return $this->belongsTo(SoalanLazimCategory::class, 'soalan_lazim_parent_id');
    }

    // Soalan Lazim Child
    public function child()
    {
        return $this->belongsTo(SoalanLazimCategory::class, 'soalan_lazim_child_id');
    }
}
