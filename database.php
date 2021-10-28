<?php
$db_host = "localhost";
$db_name = "itec370";
$db_user = "tony";
$db_pass = "torres907898";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}
echo "connected successfully";
?>


