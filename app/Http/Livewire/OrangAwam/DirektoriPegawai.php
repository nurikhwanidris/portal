<?php

namespace App\Http\Livewire\OrangAwam;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class DirektoriPegawai extends Component
{

    public $bahagian;

    public function bahagian()
    {
       if ($bahagian = $this->bahagian) {
            $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*')->where('pegawais.dept_id', $bahagian)->get();

            return $query;
       } else {
            $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*')->where('pegawais.dept_id', 1)->get();

            return $query;
       }
    }

    public function render()
    {
        return view('livewire.orang-awam.direktori-pegawai',[
            'bahagianPegawai' => $this->bahagian(),
        ]);
    }
}
