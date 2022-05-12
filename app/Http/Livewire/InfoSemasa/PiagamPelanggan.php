<?php

namespace App\Http\Livewire\InfoSemasa;

use App\Models\PiagamPelanggan as ModelsPiagamPelanggan;
use Livewire\Component;

class PiagamPelanggan extends Component
{
    public function render()
    {
        return view('livewire.info-semasa.piagam-pelanggan', [
            'piagam' => ModelsPiagamPelanggan::orderBy('created_at', 'desc')->get()
        ]);
    }
}
