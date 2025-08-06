
<?php
$server = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($server , $username , $password);

if(!$connection){
    echo "connection not established". mysqli_connect_error($connection);
}

else{
    // echo "connection established";
}


?>