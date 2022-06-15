<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Page;
use Livewire\Component;

class MengenaiPerutusan extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-perutusan', [
            'perutusan' => Page::where('id', '=', '1')->first(),
        ]);
    }
}
