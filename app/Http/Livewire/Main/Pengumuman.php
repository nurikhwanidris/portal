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
                ['status_id', '=', '1'],
                ['hide', '>', Carbon::now()],
            ])
                ->with('status')
                ->orderBy('created_at', 'desc')
                ->get(),
        ]);
    }
}
