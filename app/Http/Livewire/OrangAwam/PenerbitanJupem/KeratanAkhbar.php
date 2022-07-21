<?php

namespace App\Http\Livewire\OrangAwam\PenerbitanJupem;

use Livewire\Component;
use App\Models\KeratanAkhbar as ModelKeratanAkhbar;
use livewire\WithPagination;

class KeratanAkhbar extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.orang-awam.penerbitan-jupem.keratan-akhbar', [
            'keratan_akhbar' => ModelKeratanAkhbar::orderBy('created_at', 'desc')->paginate(12),
        ]);
    }
}
