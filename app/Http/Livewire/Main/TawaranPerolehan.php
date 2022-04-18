<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Tender;
use App\Models\Quote;
use Carbon\Carbon;

class TawaranPerolehan extends Component
{
    public function render()
    {
        return view('livewire.main.tawaran-perolehan',[
            'tenders' => Tender::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])->with('status')->limit(5)->get(),
            'quotes' => Quote::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])->with('status')->get(),
        ]);
    }
}
