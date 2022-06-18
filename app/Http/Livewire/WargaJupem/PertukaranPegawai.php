<?php

namespace App\Http\Livewire\WargaJupem;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PertukaranPegawai extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.pertukaran-pegawai', [
            'pertukaran' => DB::table('pertukaran_pegawais')->orderBy('tarikh_pertukaran', 'desc')->get(),
        ]);
    }
}
