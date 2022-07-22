<?php

namespace App\Http\Livewire\OrangAwam\TawaranPerolehan;

use Livewire\Component;
use App\Models\Tender as TenderModel;
use Livewire\WithPagination;

class Tender extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchTender = '';
    public $selectTenderYear;

    public function updatingSearchTender()
    {
        $this->resetPage();
    }

    public function render()
    {

        // Tender
        if ($this->searchTender != '' || $this->selectTenderYear != '') {
            if ($this->searchTender != '') {
                $queryTenders = TenderModel::where('title_my', 'like', '%' . $this->searchTender . '%')->orderBy('created_at', 'desc')->paginate(5);
            } else if ($this->selectTenderYear != '') {
                $queryTenders = TenderModel::whereYear('created_at', $this->selectTenderYear)->orderBy('created_at', 'desc')->paginate(5);
            }
        } else
            $queryTenders = TenderModel::orderBy('created_at', 'desc')->paginate(5);

        return view('livewire.orang-awam.tawaran-perolehan.tender',[
            'tenders' => $queryTenders,
        ]);
    }
}
