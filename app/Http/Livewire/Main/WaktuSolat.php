<?php

namespace App\Http\Livewire\Main;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class WaktuSolat extends Component
{
    public function tarikhHijrah()
    {
        $response = Http::get('http://api.aladhan.com/v1/gToH?date='.date('d-m-Y'));
        $hijri = json_decode($response->body());
        return $hijri->data->hijri->day.' '.$hijri->data->hijri->month->en.' '.$hijri->data->hijri->year;
    }

    public function waktuSolat($zon_id = 57)
    {
        $bulan_today = date('n');

        $tarikh_full = date('n')."/".date('j')."/".date('Y');

        $query = DB::table('tbl_prayer_data')
        ->where('ZON_ID', $zon_id)
        ->where('KOD_BULAN', $bulan_today)
        ->where('TARIKH', $tarikh_full)
        ->first();

        return $query;
    }

    public function render()
    {
        return view('livewire.main.waktu-solat',[
            'tarikhHijrah' => $this->tarikhHijrah(),
            'waktuSolat' => $this->waktuSolat(),
        ]);
    }
}
