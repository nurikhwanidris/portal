<?php

namespace App\Http\Livewire\OrangAwam;

use Illuminate\Support\Facades\DB;
use Livewire\Component;


class DirektoriPegawai extends Component
{

    public $bahagian;
    public $pegawai;
    public $namaSeksyen;

    public $selectedBahagian = null;
    public $searchedPegawai = null;

    public function mount()
    {
        $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*', 'dp_departments.name_my as deptName')->where('pegawais.dept_id', 1)->get();

        $this->bahagian = $query;
    }

    public function updatedSelectedBahagian($bahagian)
    {
        if (!is_null($bahagian)) {
            $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*', 'dp_departments.name_my as deptName',)->where('pegawais.dept_id', $bahagian)->get();

            $this->bahagian = $query;
        }
    }

    public function updatedSearch($search)
    {
        if (!is_null($search)) {
            $query = DB::table('pegawais')->select('pegawais.*', 'dp_departments.name_my as deptName')->where('pegawais.name_my', $search)->get();

            $this->bahagian = $query;
        } else {
            $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*', 'dp_departments.name_my as deptName',)->where('pegawais.dept_id', 1)->get();

            $this->bahagian = $query;
        }
    }
}
