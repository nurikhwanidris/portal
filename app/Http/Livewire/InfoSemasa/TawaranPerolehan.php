<?php

namespace App\Http\Livewire\InfoSemasa;

use App\Models\Quote;
use App\Models\Tender;
use Livewire\Component;
use Livewire\WithPagination;

class TawaranPerolehan extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $tender;
    public $sebutharga;

    public $selectTenderYear = null;

    public function render()
    {
        return view('livewire.orang-awam.tender-sebutharga', [
            'tenders' => Tender::orderByDesc('created_at')->paginate(10),
            'quotes' => Quote::orderByDesc('created_at')->paginate(10),
        ]);
    }
}
