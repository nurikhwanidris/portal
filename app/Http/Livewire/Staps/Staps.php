<?php

namespace App\Http\Livewire\Staps;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Staps extends Component
{
    public $stesen;

    public $station;

    public $selectedStesen = null;

    public $updateStation = null;

    public function mount()
    {
        $query = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen = $query;

        $query1 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay()->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->staps1 = $query1;
    }

    public function updatedSelectedStesen($stesen)
    {
        if (!is_null($stesen)) {
            $query = DB::table('tbl_stap_data')
                ->where('tbl_stap_data.STAP_STESEN', '=', $stesen)
                ->where('tbl_stap_data.STAP_TARIKH', '=', now()->format('d'))
                ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
                ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
                ->get();
            $this->stesen = $query;

            $query1 = DB::table('tbl_stap_data')
                ->where('tbl_stap_data.STAP_STESEN', '=', 1)
                ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay()->format('d'))
                ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
                ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
                ->get();
            $this->staps1 = $query1;
        }
    }

    public function updatedStation($station)
    {
        if (!is_null($station)) {
            $this->station = $station;
        }
    }

    public function render()
    {
        return view('livewire.staps.staps');
    }
}
