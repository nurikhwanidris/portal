<?php

namespace App\Http\Livewire\Title;

use Livewire\Component;

class PageTitle extends Component
{
    public function render()
    {
        return view('livewire.title.page-title',[
            'infoKorp-title' => 'Info Korporat',
            'orangAwam-title' => 'Orang Awam',
            'wargaJupem-title' => 'Warga Jupem',
        ]);
    }
}
