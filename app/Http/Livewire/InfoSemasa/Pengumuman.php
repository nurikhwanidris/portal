<?php

namespace App\Http\Livewire\InfoSemasa;

use App\Models\Pengumuman as ModelsPengumuman;
use Livewire\Component;

class Pengumuman extends Component
{
    public function render()
    {
        return view('livewire.info-semasa.pengumuman', [
            'pengumuman' => ModelsPengumuman::orderBy('created_at', 'desc')->get()
        ]);
    }
}
