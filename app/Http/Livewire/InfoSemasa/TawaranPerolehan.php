<?php

namespace App\Http\Livewire\InfoSemasa;

use App\Models\Quote;
use App\Models\Tender;
use Livewire\Component;

class TawaranPerolehan extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.tender-sebutharga', [
            'tender' => Tender::all(),
            'quote' => Quote::all()
        ]);
    }
}
