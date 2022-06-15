<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Page;
use Livewire\Component;

class MengenaiPenglibatan extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-penglibatan', [
            'post' => Page::where('id', '=', '2')->first(),
        ]);
    }
}
