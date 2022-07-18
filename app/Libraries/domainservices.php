<?php

if(!function_exists('domainsearch')){

function domainsearch($domain, $tld){

//Domain Extention 

if (isset($domain) && $tld==null) {
    $extract=explode('.',$domain);

    $domain=$extract[0];
    $tld=$extract[1];
}

if (!is_null($tld)){
//Check Domain Availability

$rcuserid=config('rcs.username');
$rcpassword=config('rcs.password'); 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://httpapi.com/api/domains/available.json?auth-userid=$rcuserid&api-key=$rcpassword&domain-name=$domain&tlds=$tld");
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$httpResponse = curl_exec($ch);

$response=json_decode($httpResponse);

$domain.='.'.$tld;
    
    if(isset($response->$domain->status)){

                    switch ($response->$domain->status)
                {
                    case "regthroughus":
                        
                        echo '<p class="alert alert-danger"> Sorry the domain name <strong>'.$domain.'</strong> is already registered<p>
                        
                        
                        <hr />
                        
                        <p> If you\'re the owner of this domain you can transfer it to us. <button type="submit" class="btn btn-primary mb-2">Transfer</button></p>
                        
                        ';
                        
                        break;
                    case "available":
                        echo '<p class="alert alert-success"> Congratulations! The domain name <strong>'.$domain.'</strong> is '.$response->$domain->status.' for registration.
                        
                        <hr />
                        
                        <p> Yay! You can proceed to register this domain! <button type="submit" class="btn btn-primary mb-2">Register</button></p>
                        
                        '; 
                        
                        break;
                    case "regthroughothers":
                        echo '<p class="alert alert-danger">Oops this domain name <strong>'.$domain.'</strong> is already registered.</p> 
                        
                        <hr />
                        
                        <p> If you\'re the owner of this domain you can transfer it to us. <button type="submit" class="btn btn-primary mb-2">Transfer</button></p>';
                        
                        break;
                    
                    default:
                    echo '<p class="alert alert-info"> Try using a supported TLD. We couldn\'t recognize the response from the server.</p>'; 
                }
    };
    
}

}

}

