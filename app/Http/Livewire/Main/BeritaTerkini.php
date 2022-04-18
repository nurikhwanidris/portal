<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\BeritaTerkini as BeritaTerkiniModel;
use Carbon\Carbon;

class BeritaTerkini extends Component
{
    public function render()
    {
        return view('livewire.main.berita-terkini',[
            'beritaTerkini' => BeritaTerkiniModel::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])
            ->orWhere('show', null)
            ->with('status')->get(),
        ]);
    }
}
