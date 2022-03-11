<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JabatanUnit;
use App\Models\Status;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Jabatan
    public function jabatan()
    {
        return $this->belongsTo(JabatanUnit::class,'dept_id');
    }

    // Status
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
