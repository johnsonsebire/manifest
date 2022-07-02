<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coinPriceApi extends Controller
{
    public function btc(){
        $price=coinprice('btc');
        return ['price'=>$price]; 
    }

    public function getfiatRate(Request $request){
       
        $price=json_decode(fiatConverter($request->pair));
        
        return $price->result;
        
    }
}
