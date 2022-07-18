<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $language; 
    public $default_language; 


    public function mount(){
        $this->language=session()->get('locale');

        switch ($this->language) {
            case 'en':
                $this->default_language="English";
                break;
            case 'fr':
                $this->default_language="French";
                break;
            default:
                # code...
                break;
        }
        // $this->default_language=session()->get('locale');
        // $this->selected_language="Language";

    }

    public function render()
    {
        return view('livewire.language-switcher');
    }

    public function english(){
        $this->default_language="English";
        redirect('language/en');
    }
    public function french(){
        $this->default_language="French";
        redirect('language/fr');
    }

    
}
