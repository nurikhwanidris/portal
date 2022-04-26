<?php

namespace App\Http\Livewire\InfoKorp;

use App\Models\Post;
use Livewire\Component;

class StrukturNegeri extends Component
{
    public function render()
    {
        return view('livewire.info-korp.struktur-negeri',[
            'johor' => Post::where('id', '=', '47')->first(),
            'kedah' => Post::where('id', '=', '37')->first(),
            'kelantan' => Post::where('id', '=', '40')->first(),
            'melaka' => Post::where('id', '=', '46')->first(),
            'kl' => Post::where('id', '=', '42')->first(),
            'n9' => Post::where('id', '=', '44')->first(),
            'pahang' => Post::where('id', '=', '41')->first(),
            'penang' => Post::where('id', '=', '38')->first(),
            'perak' => Post::where('id', '=', '39')->first(),
            'perlis' => Post::where('id', '=', '36')->first(),
            'selangor' => Post::where('id', '=', '26')->first(),
            'terengganu' => Post::where('id', '=', '43')->first(),
        ]);
    }
}
