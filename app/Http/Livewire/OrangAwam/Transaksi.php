<?php

namespace App\Http\Livewire\OrangAwam;

use Livewire\Component;
use App\Models\Transaksi as TransaksiModel;

class Transaksi extends Component
{

    public $tahun = 2022;

    public function kadaster()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 2)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 2)
                ->where('year', date('Y'))->first();
        }


        return $query;
    }

    public function pemetaan()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 3)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 3)
                ->where('year', date('Y'))->first();
        }

        return $query;
    }

    public function geodesi()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 4)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 4)
                ->where('year', date('Y'))->first();
        }

        return $query;
    }

    public function lesen()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 5)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 5)
                ->where('year', date('Y'))->first();
        }

        return $query;
    }

    public function rtk()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 6)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 6)
                ->where('year', date('Y'))->first();
        }

        return $query;
    }

    public function geodetik()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 7)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 7)
                ->where('year', date('Y'))->first();
        }

        return $query;
    }

    public function dataTerhad()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 8)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 8)
                ->where('year', date('Y'))->first();
        }

        return $query;
    }

    public function permit()
    {
        if ($this->tahun != '') {
            $query = TransaksiModel::where('product_id', 9)
                ->where('year', $this->tahun)->first();
        } else {
            $query = TransaksiModel::where('product_id', 9)
                ->where('year', date('Y'))->first();
        }

        return $query;
    }

    public function render()
    {
        return view('livewire.orang-awam.transaksi', [
            'kadaster' => $this->kadaster(),
            'pemetaan' => $this->pemetaan(),
            'geodesi' => $this->geodesi(),
            'lesen' => $this->lesen(),
            'rtk' => $this->rtk(),
            'geodetik' => $this->geodetik(),
            'dataTerhad' => $this->dataTerhad(),
            'permit' => $this->permit(),
        ]);
    }
}
