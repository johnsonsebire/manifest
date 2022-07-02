<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FiatRate;

class coinPriceApi extends Controller
{
    public function btc(){
        $price=coinprice('btc');
        return ['price'=>$price]; 
    }

    public function getfiatRate(Request $request){
        $rate=''; 
        $pair=$request->pair; 

        $rate=FiatRate::where('pair', $pair)->first();

        if($rate){
            $rate=$rate->rate;

            return $rate;
        }
        else{
            return 'error'; 
        }


       // $price=json_decode(fiatConverter($request->pair));
        
        
        
    }
}
