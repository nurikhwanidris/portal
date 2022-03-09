<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JabatanUnit;

class Pegawai extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Jabatan
    public function jabatan()
    {
        return $this->belongsTo(JabatanUnit::class,'dept_id');
    }
}
