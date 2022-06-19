<?php

namespace App\Http\Livewire\OrangAwam;

use App\Models\Quote;
use App\Models\Tender;
use Livewire\Component;

class TenderSebutharga extends Component
{
    // public $tajuk = 'Tajuk';

    public function render()
    {
        return view('livewire.orang-awam.tender-sebutharga',[
            'tenders' => Tender::all(),
            'quotes' => Quote::all()
        ]);
    }
}
