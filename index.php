<?php
include 'connect.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Project Monitoring</title>
  </head>
  <body>
  <h1 class="row justify-content-center mt-5"> Project Monitoring</h1>
    <div class="container-fluid">
    <button class="btn btn-primary my-2"><a href="addproject.php" class="text-light">+ New Project</a>
    </button>
    <table class="table ">
  <thead class="thead-light">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">PROJECT NAME</th>
      <th scope="col">CLIENT</th> 
      <th scope="col">PROJECT LEADER</th>
      <th scope="col">START DATE</th>
      <th scope="col">END DATE</th>
      <th scope="col">PROGRESS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
    $sql="Select * from `project`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $project_name=$row['project_name'];
            $client_name=$row['client_name'];
            $project_leader=$row['project_leader'];
            $start_date=$row['start_date'];
            $end_date=$row['end_date'];
            $progress=$row['progress'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$project_name.'</td>
            <td>'.$client_name.'</td>
            <td>'.$project_leader.'</td>
             <td>'.$start_date.'</td>
            <td>'.$end_date.'</td>
            <td>'.$progress.'</td>
            <td>     
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td> 
    
            </tr>';
        }
    }
?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>