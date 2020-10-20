<?php

// Turn off error reporting
//error_reporting(1);


//web API path
//eg http://domain.com/API/
$API_path = "https://edge.buggee.app/";
define("API_path", $API_path);

define("firebase_key", "AAAAJsYtjNg:APA91bFhTo2rY3EsvpvKshXjRI0AQQ3qZkg1L44gKkF9jbDyyyshQESCFbX34ncIBp2NMYxtqzRrf_4tYhlPl6tj8gC5VTvI8TcYwrf7RMqiFgy2EmAPr89ZgBRz37dcJgVkcm_TSmjk");

//dont modify this
define("STATUS", "live"); //live or demo
define("API-KEY", "4444-3333-2222-1111"); //dont change api key from here
define("IAM_KEY", "AKIAU4Z63QBVM7CT7A64");
define("IAM_SECRET", "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");
define("BUCKET_NAME", "buggee");
define("S3_REGION", "eu-west-1");

//amazon S3 configuration
define("media_storage", "s3");  // if you want to enable AWS s3 then you have to put the value "s3" and if you put "local" videos will be stored in your local server/hosting


//database configration


$servername = "localhost";  // dont change this most of hosting work with "localhost" only cloud work with ip address
$database = "buggee_edge_db";
$username = "buggee_edgedbadmin";
$password = "lp5sgFZSPXeF=^Vn";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET SESSION sql_mode = 'NO_ENGINE_SUBSTITUTION'");
// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


?>