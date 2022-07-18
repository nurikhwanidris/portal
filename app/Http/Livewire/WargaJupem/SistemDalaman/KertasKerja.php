<?php

namespace App\Http\Livewire\WargaJupem\SistemDalaman;

use App\Models\KertasKerja as ModelsKertasKerja;
use Livewire\Component;
use Livewire\WithPagination;

class KertasKerja extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchKertasKerja = '';

    public function updatingKertasKerja()
    {
        $this->resetPage();
    }

    public function render()
    {

        if ($this->searchKertasKerja != '') {
            $queryKertasKerja = ModelsKertasKerja::where('title_my', 'like', '%' . $this->searchKertasKerja . '%')->orderBy('created_at', 'desc')->paginate(5);
        } else {
            $queryKertasKerja = ModelsKertasKerja::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('livewire.warga-jupem.sistem-dalaman.kertas-kerja', [
            'kertas_kerja' => $queryKertasKerja,
        ]);
    }
}
