<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StatsModule extends Component
{
    public function render()
    {
        return view('livewire.stats-module', ['invoices'=>3]);
    }
}
