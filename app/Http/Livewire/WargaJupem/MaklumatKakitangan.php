<?php

namespace App\Http\Livewire\WargaJupem;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MaklumatKakitangan extends Component
{
    public function render()
    {
        return view('livewire.warga-jupem.maklumat-kakitangan', [
            'pertukaran' => DB::table('pertukaran_pegawais')->orderBy('tarikh_pertukaran', 'desc')->get(),
        ]);
    }
}
