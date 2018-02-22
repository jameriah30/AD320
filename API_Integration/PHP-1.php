


<?php



$book = $_GET['book'];



$ch = curl_init();


$url = "https://www.googleapis.com/books/v1/volumes?q=".$book."/".".json";

//print_r($url);
//Set the URL that you want to GET by using the CURLOPT_URL option.
curl_setopt($ch, CURLOPT_URL, $url);

//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Skip SSL Verification

//Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

//Set method to GET
curl_setopt($ch, CURLOPT_HTTPGET, true);


//Execute the request.
$data = curl_exec($ch);



//Close the cURL handle.
curl_close($ch);
$json_output = json_decode($data);
//$item = $json_output;

print_r($json_output);


//foreach($json_output as $k=>$v){
//    foreach($v as $key => $value){
//        print_r($key);
//        print_r('=>');
//        print_r($value);
//        echo '<br/>';
//    }
//
//}
?>