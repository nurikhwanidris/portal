<?php

namespace App\Http\Livewire\Main\Carian;

use App\Models\Pengumuman as ModelsPengumuman;
use Illuminate\Http\Request;
use Livewire\Component;

class Pengumuman extends Component
{
    public function render(Request $request)
    {
        $search = $request->input('carian');

        return view('livewire.main.carian.pengumuman', [
            'pengumuman' => ModelsPengumuman::query()
                ->where('title_my', 'LIKE', "%{$search}%")
                ->orWhere('content_my', 'LIKE', "%{$search}%")
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
