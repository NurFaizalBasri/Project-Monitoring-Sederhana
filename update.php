<?php

include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $project_name=$_POST['project_name'];
    $client_name=$_POST['client_name'];
    $project_leader=$_POST['project_leader'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $progress=$_POST['progress'];

    $sql="update `project` set id=$id,project_name='$project_name',client_name='$client_name',project_leader='$project_leader',
    start_date='$start_date',end_date='$end_date',progress='$progress' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "updated succesfull";
       header('location:index.php');
    }else{ 
        die (mysqli_error($con));
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Update Project</title>
    </head>
    <body>
    <h1 class="row justify-content-center mt-5"> Update Project</h1>
    <div class="container my-2">
    <form method="POST">
    <div class="form-group">
    <label>Project Name</label>
    <input type="text" class="form-control" 
    placeholder="Enter project name" name="project_name" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Client</label>
    <input type="text" class="form-control" 
    placeholder="Enter Client" name="client_name" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Project Leader</label>
    <input type="text" class="form-control" 
    placeholder="Enter Project Leader" name="project_leader" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Start Date</label>
    <input type="text" class="form-control" 
    placeholder="Enter Start Date" name="start_date" autocomplete="off">
    </div>
    <div class="form-group">
    <label>End Date</label>
    <input type="text" class="form-control" 
    placeholder="Enter End Date" name="end_date" autocomplete="off">
    </div>
    <div class="form-group">
    <label>Progress</label>
    <input type="text" class="form-control" 
    placeholder="Enter progress" name="progress" autocomplete="off">
    </div>
    <div class="form-group row">
    <div class="col-sm-10">
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </div>
  </div>
</form> 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>