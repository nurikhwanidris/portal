<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Post;
use Livewire\Component;

class MengenaiPerjanjian extends Component
{
    public function render()
    {
        return view('livewire.info-korp.mengenai-perjanjian',[
            'post' => Post::where('id', '=', '85')->first()
        ]);
    }
}
