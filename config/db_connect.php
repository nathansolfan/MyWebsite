<?php 

// we create a config folder and cut/copy the connection here

// connect to the database - takes 4 parameters
$connection = mysqli_connect('localhost', 'nathan', 'test1234', 'pizza_nathan');

// check if connection works, with ! it`ll echo when it fails
if(!$connection){
    echo 'connection error:' . mysqli_connect_error();
}

?>