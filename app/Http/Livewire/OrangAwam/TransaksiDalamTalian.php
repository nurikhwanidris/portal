<?php

namespace App\Http\Livewire\OrangAwam;

use App\Models\Transaksi;
use Livewire\Component;

class TransaksiDalamTalian extends Component
{

    public function render()
    {
        return view('livewire.orang-awam.transaksi-dalam-talian', [
            'transaksiTotal' => Transaksi::where([
                ['year', date('Y')],
            ])->sum(now()->subMonth()->format('F')),
            'kadaster' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 2],
            ])->sum(now()->subMonth()->format('F')),
            'pemetaan' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 3],
            ])->sum(now()->subMonth()->format('F')),
            'geodesi' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 4],
            ])->sum(now()->subMonth()->format('F')),
            'lesen' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 5],
            ])->sum(now()->subMonth()->format('F')),
            'rtk' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 6],
            ])->sum(now()->subMonth()->format('F')),
            'geodetik' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 7],
            ])->sum(now()->subMonth()->format('F')),
            'dataTerhad' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 8],
            ])->sum(now()->subMonth()->format('F')),
            'permit' => Transaksi::where([
                ['year', date('Y')],
                ['product_id', 9],
            ])->sum(now()->subMonth()->format('F')),
        ]);
    }
}
