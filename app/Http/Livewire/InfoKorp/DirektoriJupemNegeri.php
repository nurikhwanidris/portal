<?php

namespace App\Http\Livewire\InfoKorp;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DirektoriJupemNegeri extends Component
{

    public $search;

    public $negeri = '';

    protected $queryString = ['search', 'negeri'];

    public function direktoriNegeri($search)
    {
        $query = DB::table('pegawais')->join('dp_departments', 'pegawais.dept_id', '=', 'dp_departments.id')->select('pegawais.*', 'dp_departments.name_my as deptName')->where('pegawais.dept_id', $search)->get();

        return $query;
    }

    public function render()
    {
        return view('livewire.info-korp.direktori-jupem-negeri', [
            'direktoriNegeri' => $this->direktoriNegeri($this->search),
            'negeri' => $this->negeri,
        ]);
    }
}
