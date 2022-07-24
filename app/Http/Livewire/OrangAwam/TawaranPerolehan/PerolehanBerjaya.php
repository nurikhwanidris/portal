<?php

namespace App\Http\Livewire\OrangAwam\TawaranPerolehan;

use App\Models\PerolehanBerjaya as PerolehanBerjayaModel;
use Livewire\Component;
use Livewire\WithPagination;

class PerolehanBerjaya extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchTender = '';
    public $searchQuote = '';

    public $selectTenderYear;
    public $selectQuoteYear;

    public function updatingSearchTender()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Tender
        if ($this->searchTender != '' || $this->selectTenderYear != '') {
            if ($this->searchTender != '') {
                $queryTenders = PerolehanBerjayaModel::where('jenis_perolehan', 1)->where('tajuk_perolehan', 'like', '%' . $this->searchTender . '%')->orderBy('created_at', 'desc')->paginate(5);
            } else if ($this->selectTenderYear != '') {
                $queryTenders = PerolehanBerjayaModel::where('jenis_perolehan', 1)->where('siri_perolehan', 'like', '%' . $this->selectTenderYear . '%')->orderBy('created_at', 'desc')->paginate(5);
            }
        } else
            $queryTenders = PerolehanBerjayaModel::where('jenis_perolehan', 1)->orderBy('created_at', 'desc')->paginate(5);

        // Quote
        if ($this->searchQuote != '' || $this->selectQuoteYear != '') {
            if ($this->searchQuote != '')
                $queryQuote = PerolehanBerjayaModel::where('jenis_perolehan', 2)->where('tajuk_perolehan', 'like', '%' . $this->searchQuote . '%')->orderBy('created_at', 'desc')->paginate(5);
            else if ($this->selectQuoteYear != '')
                $queryQuote = PerolehanBerjayaModel::where('jenis_perolehan', 2)->where('siri_perolehan', 'like', '%' . $this->selectQuoteYear . '%')->orderBy('created_at', 'desc')->paginate(5);
        } else
            $queryQuote = PerolehanBerjayaModel::where('jenis_perolehan', 2)->orderBy('created_at', 'desc')->paginate(5);

        return view('livewire.orang-awam.tawaran-perolehan.perolehan-berjaya', [
            'tenders' => $queryTenders,
            'quotes' => $queryQuote,
        ]);
    }
}
