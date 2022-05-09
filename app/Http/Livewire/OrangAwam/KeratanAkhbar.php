<?php

namespace App\Http\Livewire\OrangAwam;

use App\Models\KeratanAkhbar as ModelsKeratanAkhbar;
use Livewire\Component;

class KeratanAkhbar extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.keratan-akhbar', [
            'newspapers' => ModelsKeratanAkhbar::with('category')->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
