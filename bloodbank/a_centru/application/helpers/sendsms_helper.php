<?php
/**
 * @param $mobileno
 * @param $message
 */
function sendsms($mobileno, $message){

    $message = urlencode($message);
    $sender = 'Blood Bank'; 
    $apikey = '9yjf5r4l0jqftpq1zudvo46t9uq3sp6z5f37';
    $baseurl = 'https://seeme.ro/gateway?key='.$apikey;

    $url = $baseurl.'&sender='.$sender.'&to='.$mobileno.'&message='.$message;    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Use file get contents when CURL is not installed on server.
    if(!$response){
        $response = file_get_contents($url);
    } 
}
?>