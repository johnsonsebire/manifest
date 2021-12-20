<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coinPriceApi extends Controller
{
    function btc(){
        $price=coinprice('btc');
        return ['price'=>$price]; 
    }
}
