<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_prayer_data extends Model
{
    use HasFactory;

    protected $table = 'tbl_prayer_data';

    protected $guarded = ['id'];

    public function zone()
    {
        return $this->belongsTo(tbl_prayer_zone_data::class, 'ZONE_ID');
    }
}
