<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StapsController extends Controller
{
    // Get STAPS Data
    public function index($id)
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

        // $data = $staps->pluck('STAP_JAM');

        $data = [
            'stesen' => $this->stesen,
            'stesen1' => $this->stesen1,
            'stesen2' => $this->stesen2,
            'stesen3' => $this->stesen3,
            'stesen4' => $this->stesen4,
            'stesen5' => $this->stesen5,
            'stesen6' => $this->stesen6,
            'stesen7' => $this->stesen7,
        ];

        return response()->json(compact('data'));
    }
}
