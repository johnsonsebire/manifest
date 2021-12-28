<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OnboardWebsite extends Component
{
    public $domain=null; 
    public $websitetype=null;
    public $availability=null; 

    public function render()
    {
        return view('livewire.onboard-website');
    }

    public function updateddomain(){
        $availability=domainsearch($this->domain, null); 
        // $this->availability="available"; 
    }
}
