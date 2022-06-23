<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Pengumuman as PengumumanModel;
use Carbon\Carbon;

class Pengumuman extends Component
{
    public function render()
    {
        return view('livewire.main.pengumuman', [
            'annoucements' => PengumumanModel::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])
                ->orWhere('show', null)
                ->with('status')->get(),
        ]);
    }
}
