<?php

namespace App\Http\Livewire\Staps;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Staps extends Component
{
    public $selectedStesen;

    public $namaStesen = 'Pulau Langkawi';

    public function selectedStesen($id)
    {
        $query = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen = $query;

        $query1 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(1)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen1 = $query1;

        $query2 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(2)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen2 = $query2;

        $query3 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(3)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen3 = $query3;

        $query4 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(4)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen4 = $query4;

        $query5 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(5)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen5 = $query5;

        $query6 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(6)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen6 = $query6;

        $query7 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', $id)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(7)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen7 = $query7;

        if ($this->selectedStesen == 1) {
            $this->namaStesen = 'Pulau Langkawi';
        }
        if ($this->selectedStesen == 2) {
            $this->namaStesen = 'Pulau Pinang';
        }
        if ($this->selectedStesen == 3) {
            $this->namaStesen = 'Lumut';
        }
        if ($this->selectedStesen == 4) {
            $this->namaStesen = 'Perlabuhan Klang';
        }
        if ($this->selectedStesen == 5) {
            $this->namaStesen = 'Tanjung Keling';
        }
        if ($this->selectedStesen == 6) {
            $this->namaStesen = 'Kukup';
        }
        if ($this->selectedStesen == 7) {
            $this->namaStesen = 'Johor Bahru';
        }
        if ($this->selectedStesen == 8) {
            $this->namaStesen = 'Tanjung Sedili';
        }
        if ($this->selectedStesen == 9) {
            $this->namaStesen = 'Pulau Tioman';
        }
        if ($this->selectedStesen == 10) {
            $this->namaStesen = 'Tanjung Gelang';
        }
        if ($this->selectedStesen == 11) {
            $this->namaStesen = 'Cendering';
        }
        if ($this->selectedStesen == 12) {
            $this->namaStesen = 'Geting';
        }
        if ($this->selectedStesen == 13) {
            $this->namaStesen = 'Pulau Lekai';
        }
        if ($this->selectedStesen == 14) {
            $this->namaStesen = 'Sejingkat';
        }
        if ($this->selectedStesen == 15) {
            $this->namaStesen = 'Bintulu';
        }
        if ($this->selectedStesen == 16) {
            $this->namaStesen = 'Miri';
        }
        if ($this->selectedStesen == 17) {
            $this->namaStesen = 'Kota Kinabalu';
        }
        if ($this->selectedStesen == 18) {
            $this->namaStesen = 'Kudat';
        }
        if ($this->selectedStesen == 19) {
            $this->namaStesen = 'Sandakan';
        }
        if ($this->selectedStesen == 20) {
            $this->namaStesen = 'Lahad Datu';
        }
        if ($this->selectedStesen == 21) {
            $this->namaStesen = 'Tawau';
        }
        if ($this->selectedStesen == 22) {
            $this->namaStesen = 'Labuan';
        }
    }

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
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(1)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen1 = $query1;

        $query2 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(2)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen2 = $query2;

        $query3 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(3)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen3 = $query3;

        $query4 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(4)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen4 = $query4;

        $query5 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(5)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen5 = $query5;

        $query6 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(6)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen6 = $query6;

        $query7 = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            ->where('tbl_stap_data.STAP_TARIKH', '=', now()->addDay(7)->format('d'))
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();
        $this->stesen7 = $query7;
    }
}
