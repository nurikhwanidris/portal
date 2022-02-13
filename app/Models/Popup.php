<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Status;

class Popup extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function status()
    {
        $this->belongsTo(Status::class, 'status_id');
    }
}
