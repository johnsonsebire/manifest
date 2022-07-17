<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PixlabServiceDetailLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $service_tagline;

     public $highlights;
     public $process; 
     public $steps; 
     public $portfolio;
     public $banner; 

     public $highlight_data;
     

    public function __construct($tagline, $highlights, $data, $url)
    {

      $this->banner=$url; 

        if(!is_null($tagline)){

            $this->service_tagline=$tagline;
        } else{
            $this->service_tagline=""; 
        }

        if(!is_null($highlights)){
            $this->highlights=$highlights;
        }
         else {
            $this->highlights=""; 
         } 

         if(!is_null($data)){

             $this->highlight_data=$data; 
         }
         else{
            $this->highlight_data=[]; 
         }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pixlab-service-detail-layout');
    }
}
