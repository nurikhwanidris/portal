<?php

namespace App\Http\Livewire\Staps;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Staps extends Component
{
    public $selectedStesen;

    public $namaStesen = 'Pulau Langkawi';

    public function selectedStesen($id, $stesen)
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

        if ($stesen == 'pulau-langkawi') {
            $this->namaStesen = 'Pulau Langkawi';
        }
        if ($stesen == 'pulau-pinang') {
            $this->namaStesen = 'Pulau Pinang';
        }
        if ($stesen == 'lumut') {
            $this->namaStesen = 'Lumut';
        }
        if ($stesen == 'perlabuhan-klang') {
            $this->namaStesen = 'Perlabuhan Klang';
        }
        if ($stesen == 'tanjung-keling') {
            $this->namaStesen = 'Tanjung Keling';
        }
        if ($stesen == 'kukup') {
            $this->namaStesen = 'Kukup';
        }
        if ($stesen == 'johor-bahru') {
            $this->namaStesen = 'Johor Bahru';
        }
        if ($stesen == 'tajung-sedili' ) {
            $this->namaStesen = 'Tanjung Sedili';
        }
        if ($stesen == 'pulau-tioman' ) {
            $this->namaStesen = 'Pulau Tioman';
        }
        if ($stesen == 'tanjung-gelang') {
            $this->namaStesen = 'Tanjung Gelang';
        }
        if ($stesen == 'cendering') {
            $this->namaStesen = 'Cendering';
        }
        if ($stesen == 'geting') {
            $this->namaStesen = 'Geting';
        }
        if ($stesen == 'pulau-lekai') {
            $this->namaStesen = 'Pulau Lekai';
        }
        if ($stesen == 'sejingkat') {
            $this->namaStesen = 'Sejingkat';
        }
        if ($stesen == 'bintulu') {
            $this->namaStesen = 'Bintulu';
        }
        if ($stesen == 'miri') {
            $this->namaStesen = 'Miri';
        }
        if ($stesen == 'kota-kinabalu') {
            $this->namaStesen = 'Kota Kinabalu';
        }
        if ($stesen == 'kudat') {
            $this->namaStesen = 'Kudat';
        }
        if ($stesen == 'sandakan') {
            $this->namaStesen = 'Sandakan';
        }
        if ($stesen == 'lahad-datu') {
            $this->namaStesen = 'Lahad Datu';
        }
        if ($stesen == 'tawau') {
            $this->namaStesen = 'Tawau';
        }
        if ($stesen == 'labuan') {
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
