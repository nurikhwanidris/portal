<?php

namespace App\Http\Livewire\OrangAwam\PenerbitanJupem;

use Livewire\Component;
use App\Models\LaporanTahunan as ModelLaporanTahunan;
use livewire\WithPagination;

class LaporanTahunan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.orang-awam.penerbitan-jupem.laporan-tahunan', [
            'laporan_tahunan' => ModelLaporanTahunan::orderBy('created_at', 'desc')->paginate(12),
        ]);
    }
}
