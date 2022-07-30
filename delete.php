<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `project` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Deleted Succesfull";
       header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
    }
?>