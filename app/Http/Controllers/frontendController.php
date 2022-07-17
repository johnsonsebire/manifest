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
                

                $highlights_data_passed=[
                    'highlight1'=> [
                        "title" => "Increased ROI", 
                        'description' => "More money!",
                    ],
                    'highlight2'=>
                    [ 'title' => "Business Process Automation",
                       'description' => 'Complete Business process automation',  
                ], 
                    'highlight3' => [
                        'title'=> "Increased Productivity", 
                        'description' => "Workflow process management."
                    ], 
    
                   
                ];

               

                
                return view('services.sap-consulting', compact('highlights_data_passed')); 

                break;
            
            default:
                
                return 'Requested Service Page is not available or down for maintenance.'; 
                
                break;
        }

    }

}
