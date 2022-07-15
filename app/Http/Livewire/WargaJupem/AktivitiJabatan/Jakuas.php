<?php

namespace App\Http\Livewire\WargaJupem\AktivitiJabatan;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Page;

class Jakuas extends Component
{

    public function objective()
    {
        $query = Page::where('id', '3')->first();
        return $query;
    }

    public function members()
    {
        $query = Page::where('id', '4')->first();
        return $query;
    }

    public function categories()
    {
        $query = Page::where('id', '5')->first();
        return $query;
    }

    public function terms()
    {
        $query = Page::where('id', '6')->first();
        return $query;
    }

    public function flowChart()
    {
        $query = Page::where('id', '7')->first();
        return $query;
    }

    public function render()
    {
        return view('livewire.warga-jupem.aktiviti-jabatan.jakuas', [
            'objective' => $this->objective(),
            'members' => $this->members(),
            'categories' => $this->categories(),
            'terms' => $this->terms(),
            'flowChart' => $this->flowChart(),
        ]);
    }
}
