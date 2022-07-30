<?php

$con=new mysqli('localhost','root', '','db_monitoring');

if(!$con){
    die(mysqli_error($con));
}

?>