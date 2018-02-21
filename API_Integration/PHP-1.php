


<?php



$book = $_GET['book'];

//$city_state = 'new_york:ny';

//$params = explode(':',$book);

//print_r($book);

$ch = curl_init();

//$url = "http://api.wunderground.com/api/9cbeeefb5645e05c/conditions/q/".$params[1]."/".$params[0].".json";
$url = "https://www.googleapis.com/books/v1/volumes?q=/".$book."/".".json";

//print_r($url);
//Set the URL that you want to GET by using the CURLOPT_URL option.
curl_setopt($ch, CURLOPT_URL, $url);

//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

//Set method to GET
curl_setopt($ch, CURLOPT_HTTPGET, true);
//Execute the request.
$data = curl_exec($ch);

//Close the cURL handle.
curl_close($ch);
$json_output = json_decode($data);

//print_r($json_output);

//print the time at which we got this data
$time_of_call = $json_output->current_observation->local_time_rfc822;
print_r($time_of_call);
//conditions and temperature

//$weather_condition = $json_output->current_observation->weather;
//print_r($weather_condition);
//
//$temperature_string = $json_output->current_observation->temperature_string;
//print_r($temperature_string);

//dvar_dump($json_output);
foreach($json_output as $k=>$v){
    foreach($v as $key => $value){
        print_r($key);
        print_r('=>');
        print_r($value);
        echo '<br/>';
    }

}
?>