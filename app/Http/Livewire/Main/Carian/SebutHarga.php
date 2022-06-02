<?php

namespace App\Http\Livewire\Main\Carian;

use App\Models\Quote;
use Illuminate\Http\Request;
use Livewire\Component;

class SebutHarga extends Component
{
    public function render(Request $request)
    {
        $search = $request->input('carian');

        return view('livewire.main.carian.sebut-harga', [
            'sebutHarga' => Quote::query()
                ->where('title_my', 'LIKE', "%{$search}%")
                ->orderBy('created_at', 'desc')
                ->paginate(10),
        ]);
    }
}
