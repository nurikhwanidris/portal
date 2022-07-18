<?php

namespace App\Http\Livewire\OrangAwam\PenerbitanJupem;

use Livewire\Component;
use App\Models\BeritaUkur as ModelBeritaUkur;

class BeritaUkur extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.penerbitan-jupem.berita-ukur', [
            'berita_ukur' => ModelBeritaUkur::orderBy('created_at', 'desc')->get(),
        ]);
    }
}
