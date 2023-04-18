<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "db_oauth";


$googleappid = "737958971922-80hdafi6ot8c4sp5rtv654akarr0200a.apps.googleusercontent.com"; 
$googleappsecret = "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"; 
$redirectURL = ""; 


$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include_once './Google/Google_Client.php';
include_once './Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('ektha23');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);

?>