<?php

namespace App\Http\Livewire\Main\Carian;

use App\Models\Tender as ModelsTender;
use Illuminate\Http\Request;
use Livewire\Component;

class Tender extends Component
{
    public function render(Request $request)
    {
        $search = $request->input('carian');

        return view('livewire.main.carian.tender', [
            'tender' => ModelsTender::query()
                ->where('title_my', 'LIKE', "%{$search}%")
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
