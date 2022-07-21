<?php

namespace App\Http\Livewire\OrangAwam\PenerbitanJupem;

use Livewire\Component;
use App\Models\Gis;
use Livewire\WithPagination;

class BuletinGis extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.orang-awam.penerbitan-jupem.buletin-gis', [
            'gis' => Gis::orderBy('created_at', 'desc')->paginate(12),
        ]);
    }
}
