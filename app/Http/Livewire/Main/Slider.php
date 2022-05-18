<?php

namespace App\Http\Livewire\Main;

use Livewire\Component;
use App\Models\Slider as SliderModel;
use Carbon\Carbon;

class Slider extends Component
{
    public function render()
    {
        return view('livewire.main.slider', [
            'sliders' => SliderModel::where([
                ['show', '<=', Carbon::now()],
            ])
                ->orWhere('show', null)
                ->orWhere('hide', null)
                ->with('statuses')
                ->orderBy('susunan', 'asc')->get(),
        ]);
    }
}
