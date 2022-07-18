<?php 

if(!function_exists('coinprice')){

    function coinprice($currency){

        if (isset($currency)){
            switch ($currency) {
                case 'btc':
                    $from="btc"; 
                    $to="usd"; 
                    $amount=1; 
            
                    break;
                
                default:
                    
                    return "Invalid Currency Value"; 

                    break;
            }
        }

        try {

            $apikey=config('nowpay.api_key');
            //code...
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nowpayments.io/v1/estimate?amount=$amount&currency_from=$from&currency_to=$to",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "x-api-key: $apikey"
            ),
            ));
    
            $response = curl_exec($curl);
    
            curl_close($curl);

            // dd($response);
            $response=json_decode($response); 
            $rounded=round($response->estimated_amount,2);
            return '$'.$rounded.' USD';

        } catch (\Throwable $th) {
            //throw $th;
            return $th; 
        }

       
        
    }


}

//Fiat Converter

if (!function_exists('fiatConverter')){

    function fiatConverter($pairs){

        $from='';
        $to='';
        $amount='';

        switch ($pairs) {
            case 'usdghs':
                $from='usd';
                $to='ghs';
                $amount=1;

                break;
            
            default:
                $from='usd';
                $to='ghs';
                $amount=1;

                break;
        }
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.apilayer.com/fixer/convert?to=$to&from=$from&amount=$amount",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: Eth2vWpQaDuoSLJz1HlXLHTn5u6lQOlG"
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }



}