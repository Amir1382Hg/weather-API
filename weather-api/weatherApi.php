<?php



$apiKey = "9ac9f4f90c1084b7ec7e6bc84c81d17b";
$error = "";

if (isset($_GET['city']) && $_GET['city']!=null) {
    $city = $_GET['city'];
    try{
        $url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . $apiKey . "&units=metric";
        $response = @file_get_contents($url);
        if ($response!==false) {
            $data = json_decode($response);
            $error = "";
        }
        else{
            $error =  "can not get response try again. Please!";
        }
    }
    catch(Exception $e){
        $error =  "somthing is wrong try again. Please!";
    }
}





?>