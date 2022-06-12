<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StapsController extends Controller
{
    // Get STAPS Data
    public function index()
    {
        $staps = DB::table('tbl_stap_data')
            ->where('tbl_stap_data.STAP_STESEN', '=', 1)
            // ->where('tbl_stap_data.STAP_TARIKH', '=', now()->format('d'))
            ->whereBetween('tbl_stap_data.STAP_TARIKH', [now()->startOfWeek()->format('d'), now()->endOfWeek()->format('d')])
            ->where('tbl_stap_data.STAP_BULAN', '=', now()->format('m'))
            ->where('tbl_stap_data.STAP_TAHUN', '=', now()->format('Y'))
            ->get();

        $data = $staps->pluck('STAP_JAM');

        return response()->json(compact('data'));
    }
}
