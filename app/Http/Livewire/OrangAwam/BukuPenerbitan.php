<?php

namespace App\Http\Livewire\OrangAwam;

use App\Models\BeritaUkur;
use App\Models\Gis;
use App\Models\LaporanTahunan;
use Livewire\Component;

class BukuPenerbitan extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.buku-penerbitan', [
            'gis' => Gis::orderBy('created_at', 'desc')->get(),
            'berita_ukur' => BeritaUkur::orderBy('created_at', 'desc')->get(),
            'laporan_tahunan' => LaporanTahunan::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
