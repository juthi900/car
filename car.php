<?php 
include 'conn.php';
if(isset($_POST['submit'])){

$car=$_POST['car'];
$name=$_POST['name'];
$model=$_POST['model'];
$year=$_POST['Year'];
$bat=$_POST['bat'];
$fuel=$_POST['fuel'];
$sql="insert into `car`
(type,name,model,year,battery,fuel)
values('$car','$name','$model','$year','$bat','$fuel')";


$result=mysqli_query($conn,$sql);
if($result){
    echo " success";
}



}




?>





<!doctype html>

<script>
    function changetype(){
var stat=document.getElementById("Type");
if(stat.value=="elec"){

    document.getElementById("fuel").style.visibility="hidden";
}



else if(stat.value=="gas"){

document.getElementById("bat").style.visibility="hidden";
}

 
    

}



</script>

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

    <form method="post">
  <!-- <div class="from-group ">
    <label >Cartype</label>
    <input type="text" class="form-control" placeholder="Enter car type name" name="car">
  </div> -->
  <div class="from-group ">
    <label >Cartype</label>
    <select name="car"  id="Type" onchange="changetype()" class="from-control">
        <option value="">---CAR type-----</option>
<option value="elec">electrec</option>
<option value="gas">gas</option>
    </select>
  </div>






  <div class=" from-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter  name" name="name">
  </div>
  <div class=" from-group">
    <label >Model</label>
    <input type="text" class="form-control" placeholder="Enter  model" name="model">
  </div>

  <div class="from-group">
    <label >Year</label>
    <input type="text" class="form-control" placeholder="Enter  Year" name="Year">
  </div>
  <div class="from-group" id="bat">
    <label >Battery</label>
    <input type="text" class="form-control" placeholder="Enter  battery" name="bat">
  </div>

  <div class="from-group" id="fuel">
    <label >Fuel</label>
    <input type="text" class="form-control" placeholder="Enter  Fuel" name="fuel">
  </div>

  <button type="submit" class="btn btn-primary my-5" name="submit">Submit</button>
</form>
    

























</div>
    
  </body>
</html>