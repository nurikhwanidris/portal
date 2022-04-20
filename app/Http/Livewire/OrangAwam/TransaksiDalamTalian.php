<?php

namespace App\Http\Livewire\OrangAwam;

use App\Models\Transaksi;
use Livewire\Component;

class TransaksiDalamTalian extends Component
{
    public function render()
    {
        return view('livewire.orang-awam.transaksi-dalam-talian',[
            'transaksiTotal' => Transaksi::where([
                ['year', date('Y')],
            ])->sum(now()->subMonth()->format('F')),
            'kadaster' => Transaksi::select(now()->subMonth()->format('F'))
            ->where('year', date('Y'))
            ->where('product_id', 2)->first()
        ]);
    }
}
