<?php

namespace App\Http\Livewire\Main;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
class WaktuSolat extends Component
{

    public $zone = 57;

    public function tarikhHijrah()
    {
        $response = Http::get('http://api.aladhan.com/v1/gToH?date='.date('d-m-Y'));
        $hijri = json_decode($response->body());
        return $hijri->data->hijri->day.' '.$hijri->data->hijri->month->en.' '.$hijri->data->hijri->year;
    }

    public function waktuSolat()
    {
        if ($zone = $this->zone) {
            $monthNow = date('n');

            $fullDate = date('n')."/".date('j')."/".date('Y');

            $query = DB::table('tbl_prayer_data')
            ->join('tbl_prayer_zone_data', 'tbl_prayer_data.ZON_ID', '=', 'tbl_prayer_zone_data.ZONE_ID')
            ->select('tbl_prayer_data.*', 'tbl_prayer_zone_data.ZONE_NAME')
            ->where([
                ['tbl_prayer_data.ZON_ID', $zone],
                ['tbl_prayer_data.KOD_BULAN', $monthNow],
                ['tbl_prayer_data.TARIKH', $fullDate]
            ])->first();

            return $query;
        }
    }

    public function render()
    {
        return view('livewire.main.waktu-solat',[
            'tarikhHijrah' => $this->tarikhHijrah(),
            'waktuSolat' => $this->waktuSolat(),
        ]);
    }
}
