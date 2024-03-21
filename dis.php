<?php 
include 'conn.php';?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

  </head>
  <body>
    <div class=" mb-9 container ">


    <button class="btn btn-primary my-5"><a href="car.php" class ="text-light">Add car</a></button>

  
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Car type</th>
      <th scope="col">Name</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
      <th scope="col">Battery</th>
      <th scope="col">Fuel</th>
    </tr>
  </thead>
  <tbody>
  <?php  
  
  $sql="Select * from `car`";
  $result=mysqli_query($conn,$sql);
  if($result){
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$car=$row['type'];
$name=$row['name'];
$model=$row['model'];
$year=$row['year'];
$bat=$row['battery'];
$fuel=$row['fuel'];

echo'

<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$car.'</td>
      <td>'.$name.'</td>
      <td>'.$model.'</td>
      <td>'.$year.'</td>
      <td>'.$bat.'</td>
      <td>'.$fuel.'</td>
    </tr>











';


}



  }
  
  
  
  
  
  
  
  
  
  ?>


  </tbody>
</table>
























</div>
    
  </body>
</html>