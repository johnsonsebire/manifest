@php
echo "getting data... <br />"; 
$obj=json_decode($_POST['app']);


print_r($obj); 

echo 'something new'; 
$new=json_decode($_REQUEST['app']);
print_r($new);

@endphp