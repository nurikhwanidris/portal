<?php

namespace App\Http\Livewire\Main;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class StapsTable extends Component
{

    public $staps;
    public $staps1;

    public $selectedStesen = null;

    public function mount()
    {
        $query = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->staps = $query;

        $query1 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay()->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->staps1 = $query1;
    }

    public function render()
    {
        return view('livewire.main.staps-table');
    }
}
