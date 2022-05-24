<?php

namespace App\Http\Livewire\Main\Carian;

use App\Models\Post as ModelsPost;
use Livewire\Component;
use Illuminate\Http\Request;

class Post extends Component
{
    public $search;

    public function render(Request $request)
    {

        $search = $request->input('carian');

        return view('livewire.main.carian.post', [
            'post' => ModelsPost::query()
                ->where('title_my', 'LIKE', "%{$search}%")
                ->orWhere('contents_my', 'LIKE', "%{$search}%")
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
