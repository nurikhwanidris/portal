<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Status;

class BeritaUkur extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // User
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    // Status
    public function Status()
    {
        return $this->belongsTo(Status::class);
    }
}
