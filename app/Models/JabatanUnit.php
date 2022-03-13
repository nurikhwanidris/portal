<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class JabatanUnit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $parentColumn = 'parent_id';

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function parent()
    {
        return $this->belongsTo(JabatanUnit::class,$this->parentColumn);
    }

    public function children()
    {
        return $this->hasMany(JabatanUnit::class, $this->parentColumn);
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }
}
