<?php 
if (! function_exists('SMSnotify')){
    function SMSnotify($destination, $message){
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://l4rr2.api.infobip.com/sms/2/text/advanced',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{"messages":[{"from":"ManifestGH",
                "destinations":[{"to":"'.$destination.'"}],
                "text":"'.$message.'"}]}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: App f584b3866283b93034ab857f1436cbe0-f281cf22-2662-4e2f-b6eb-56d94fbf99f0',
                'Content-Type: application/json',
                'Accept: application/json'
            ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
    
        return $response;
    }   
}

if(! function_exists('getProductDetails')) {

    function getProductDetails($id, $value) {
        
        $data=DB::table('products')->where('id', $id)->get(); 

        switch ($value) {

            case 'name':
                $response=$data['0']->name; 
                # code...
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
                # code...
                break;
        }
        // dd($data['0']->name); 
        return $response; 
    }

}