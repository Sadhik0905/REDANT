<?php

$server = "localhost";
$username = "root";
$password = "";
// $db = "REDANT";

$conn = mysqli_connect($server, $username, $password);

if(!$conn)
    echo "Check the server. Connection not established ".$mysqli_connect_error();
else
    echo "success";

?>