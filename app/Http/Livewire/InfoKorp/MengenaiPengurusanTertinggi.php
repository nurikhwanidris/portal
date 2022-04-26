<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Post;
use Livewire\Component;

class MengenaiPengurusanTertinggi extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-pengurusan-tertinggi',[
            'post' => Post::where('id', '=', '15')->first()
        ]);
    }
}
