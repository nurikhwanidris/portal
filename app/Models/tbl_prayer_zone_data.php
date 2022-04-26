<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_prayer_zone_data extends Model
{
    use HasFactory;

    protected $table = 'tbl_prayer_zone_data';

    protected $guarded = ['ZONE_ID'];

    public function prayer()
    {
        return $this->hasMany(tbl_prayer_data::class, 'ZON_ID');
    }
}
