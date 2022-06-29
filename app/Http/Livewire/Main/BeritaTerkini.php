<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\BeritaTerkini as BeritaTerkiniModel;

class BeritaTerkini extends Component
{
    public function render()
    {
        return view('livewire.main.berita-terkini', [
            'beritaTerkini' => BeritaTerkiniModel::where([
                ['status_id', '=', '1'],
            ])
                ->with('status')
                ->orderBy('created_at', 'desc')
                ->limit(5)
                ->get(),
        ]);
    }
}
