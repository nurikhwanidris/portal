<?php

namespace App\Http\Livewire\InfoKorp;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DirektoriPegawai extends Component
{

    public $bahagian;

    public $selectedBahagian = null;

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
    
    public function render()
    {
        return view('livewire.info-korp.direktori-pegawai');
    }
}
