<?php

namespace App\Http\Livewire\OrangAwam;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class DirektoriPegawai extends Component
{

    public $search = '';

    public $bahagian = 1;

    public function pegawai()
    {
        if ($bahagian = $this->bahagian) {
            $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*', 'dp_departments.name_my as deptName')->where('pegawais.dept_id', $bahagian)->get();

            return $query;
        } elseif ($search = $this->search) {
            $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*', 'dp_departments.name_my as deptName')->where('pegawais.name_my', $search)->get();

            return $query;
        }
    }

    public function bahagianSeksyen()
    {
        $bahagian = $this->bahagian;

        $query = DB::table('dp_departments')->select('dp_departments.*')->where('dp_departments.id', $bahagian)->get();

        return $query;

        if ($query->parent_id != 0) {
            $query2 = DB::table('dp_departments')->select('dp_departments.*')->where('dp_departments.parent_id', $query->parent_id)->get();

            return $query2;
        }
    }

    public function render()
    {
        return view('livewire.orang-awam.direktori-pegawai', [
            'bahagianPegawai' => $this->pegawai(),
            'bahagiann' => $this->bahagianSeksyen(),
        ]);
    }
}
