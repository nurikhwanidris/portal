<?php

namespace App\Http\Livewire\OrangAwam\TawaranPerolehan;

use App\Models\Quote;
use App\Models\Tender;
use Livewire\Component;
use Livewire\WithPagination;

class PerolehanSemasa extends Component
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
                $queryTenders = Tender::where('title_my', 'like', '%' . $this->searchTender . '%')->orderBy('created_at', 'desc')->paginate(5);
            } else if ($this->selectTenderYear != '') {
                $queryTenders = Tender::whereYear('created_at', $this->selectTenderYear)->orderBy('created_at', 'desc')->paginate(5);
            }
        } else
            $queryTenders = Tender::orderBy('created_at', 'desc')->paginate(5);

        // Quote
        if ($this->searchQuote != '' || $this->selectQuoteYear != '') {
            if ($this->searchQuote != '')
                $queryQuote = Quote::where('title_my', 'like', '%' . $this->searchQuote . '%')->orderBy('created_at', 'desc')->paginate(5);
            else if ($this->selectQuoteYear != '')
                $queryQuote = Quote::whereYear('created_at', $this->selectQuoteYear)->orderBy('created_at', 'desc')->paginate(5);
        } else
            $queryQuote = Quote::orderBy('created_at', 'desc')->paginate(5);

        return view('livewire.orang-awam.tawaran-perolehan.perolehan-semasa', [
            'tenders' => $queryTenders,
            'quotes' => $queryQuote,
        ]);
    }
}
