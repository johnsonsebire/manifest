<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class frontendController extends Controller
{
    
    public function index() {
        return view('frontend.home');
    }

    public function service($service){
        

        switch ($service) {
            case 'sap-consulting':
                
                $banner="pixlab/images/service/sap-consulting.jpg"; 

                $highlights_data_passed=[
                    'highlight1'=> [
                        "title" => "Increased ROI", 
                        'description' => "",
                    ],
                    'highlight2'=>
                    [ 'title' => "Business Process Automation",
                       'description' => '',  
                ], 
                    'highlight3' => [
                        'title'=> "Increased Productivity", 
                        'description' => ""
                    ], 
    
                   
                ];

               

                
                return view('services.sap-consulting', compact('highlights_data_passed', 'banner')); 

                break;
            
            default:
                
                return view('frontend.comingsoon'); 
                
                break;
        }

    }

}
