<?php

namespace App\Http\Livewire\WargaJupem\MaklumatKakitangan;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PertukaranPegawai extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.maklumat-kakitangan.pertukaran-pegawai', [
            'pertukaran' => DB::table('pertukaran_pegawais')->orderBy('tarikh_pertukaran', 'desc')->get(),
        ]);
    }
}
