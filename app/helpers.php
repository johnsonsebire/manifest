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

if(!function_exists('domainsearch')){

  function domainsearch($domain, $tld){

    //Domain Extention 

if (!is_null($tld)){
//Check Domain Availability

$rcpassword='NaGrRSvLtYzSGMBPbyHWMybHzvqzOOcJ'; 
$rcuserid='668813';


 
//$tld='com';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://httpapi.com/api/domains/available.json?auth-userid=$rcuserid&api-key=$rcpassword&domain-name=$domain&tlds=$tld");
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$httpResponse = curl_exec($ch);

//print_r($httpResponse);

$response=json_decode($httpResponse);
// dd($response);
$domain.='.'.$tld;
return "You've requested for the domain $domain";

switch ($response->$domain->status)
 {
    case "regthroughus":
        
		return '<p class="alert alert-danger"> Sorry the domain name <strong>'.$domain.'</strong> is already registered<p>
		
		
		<hr />
        
        <p> If you\'re the owner of this domain you can transfer it to us. <button type="submit" class="btn btn-primary mb-2">Transfer</button></p>
		
		';
        
		break;
    case "available":
        return '<p class="alert alert-success"> Congratulations! The domain name <strong>'.$domain.'</strong> is '.$jay->$domain->status.' for registration.
        
        <hr />
        
        <p> Yay! You can proceed to register this domain! <button type="submit" class="btn btn-primary mb-2">Register</button></p>
        
        '; 
        
		break;
    case "regthroughothers":
        return '<p class="alert alert-danger">Oops this domain name <strong>'.$domain.'</strong> is already registered.</p> 
        
        <hr />
        
        <p> If you\'re the owner of this domain you can transfer it to us. <button type="submit" class="btn btn-primary mb-2">Transfer</button></p>';
		
        break;
    
    default:
       return '<p class="alert alert-info"> Try using a supported TLD. We couldn\'t recognize the response from the server.</p>'; 
}


};


  }


}