<?php

namespace App\Http\Livewire\OrangAwam\TawaranPerolehan;

use Livewire\Component;
use App\Models\Quote as QuoteModel;
use Livewire\WithPagination;

class SebutHarga extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $searchQuote = '';
    public $selectQuoteYear;

    public function render()
    {

        // Quote
        if ($this->searchQuote != '' || $this->selectQuoteYear != '') {
            if ($this->searchQuote != '')
                $queryQuote = QuoteModel::where('title_my', 'like', '%' . $this->searchQuote . '%')->orderBy('created_at', 'desc')->paginate(5);
            else if ($this->selectQuoteYear != '')
                $queryQuote = QuoteModel::whereYear('created_at', $this->selectQuoteYear)->orderBy('created_at', 'desc')->paginate(5);
        } else
            $queryQuote = QuoteModel::orderBy('created_at', 'desc')->paginate(5);

        return view('livewire.orang-awam.tawaran-perolehan.sebut-harga',[
            'quotes' => $queryQuote,
        ]);
    }
}
