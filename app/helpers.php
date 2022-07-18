<?php 

use Illuminate\Support\Facades\DB;

include('Libraries/zohoservices.php');
include('Libraries/domainservices.php');
include('Libraries/coinpriceapiservices.php');
include('Libraries/smsservices.php');

if(! function_exists('getProductDetails')) {

    function getProductDetails($id, $value) {
        
        $data=DB::table('products')->where('id', $id)->get(); 

        switch ($value) {

            case 'name':
                $response=$data['0']->name; 
                break;

            case 'description':
                $response=$data['0']->description; 
                break; 

            case 'price':
                $response=$data['0']->price; 

                break;

            case 'associated_domain':
                $response=$data['0']->associated_domain; 

                break;

            case 'details':
                $response=$data['0']->details; 

                break;
    

            default:
                break;
        }
         
        return $response; 
    }

}