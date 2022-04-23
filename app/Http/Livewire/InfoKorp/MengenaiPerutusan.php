<?php

namespace App\Http\Livewire\InfoKorp;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MengenaiPerutusan extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-perutusan',[
            'perutusan' => DB::table('posts')->where('id', '=', '10')->first(),
        ]);
    }
}
