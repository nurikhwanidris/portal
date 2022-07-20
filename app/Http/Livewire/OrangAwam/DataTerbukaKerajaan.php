<?php

namespace App\Http\Livewire\OrangAwam;

use Livewire\Component;
use App\Models\Page;

class DataTerbukaKerajaan extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.data-terbuka-kerajaan', [
            'page' => Page::where('id', 19)->first()
        ]);
    }
}
