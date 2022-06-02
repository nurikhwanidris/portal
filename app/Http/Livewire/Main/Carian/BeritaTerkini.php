<?php

namespace App\Http\Livewire\Main\Carian;

use App\Models\BeritaTerkini as ModelsBeritaTerkini;
use Illuminate\Http\Request;
use Livewire\Component;

class BeritaTerkini extends Component
{
    public function render(Request $request)
    {
        $search = $request->input('carian');

        return view('livewire.main.carian.berita-terkini', [
            'beritaTerkini' => ModelsBeritaTerkini::query()
                ->where('title_my', 'LIKE', "%{$search}%")
                ->orWhere('content_my', 'LIKE', "%{$search}%")
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
