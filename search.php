<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itemku</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-light" href="#">itemku</a>
  

  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active text-light" href="login.php">Order</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-light" href="order.php">Log in</a>
  </li>
</nav>
  
    <!--search-->
    <form action="search.php" method="post">
  <div class="form-group d-flex justify-content-center my-3">
    
    <input class="mx-2 w-50" type = "text" name = "search" placeholder="Enter product name">
    <input class="bg-white text-dark " type = "submit" name = "submit" value ="search">
  </div>
  
</form>

  
</div>

<?php
// check if form submitted, insert form data into student table
if(isset($_POST['submit'])){
    $search = $_POST['search'];

    //include database connection file
    include_once("config.php");
    //Insert student data into table
    $result = mysqli_query($conn, "SELECT a.nom_id, a.nominal, a.prod_id, b.prod_name, a.store_id, a.price, a.quantity FROM nominal a inner join product b on a.prod_id=b.prod_id WHERE nominal LIKE '%$search%'") or die (mysql_error());}

    if ($result->num_rows > 0){
     // Show Message
    
     echo    "<table class='table' border=1>";
       
     echo    "<br><br>";
     echo    "<table class='table' border=1>";
     echo    "<th class='px-2 thead-dark'>";
     echo    "<td>nominal</td>";
     echo    "<td>prod_id</td>";
     echo    "<td>prod_name</td>";
     echo    "<td>store_id</td>";
     echo    "<td>price</td>";
     echo    "<td>quantity</td>";
     echo    "</th>" ;
         
     
             
     while($nominal = mysqli_fetch_array($result)){
         echo "<tr>";
         echo "<td>".$nominal['nom_id']."</td>";
         echo "<td>".$nominal['nominal']."</td>";
         echo "<td>".$nominal['prod_id']."</td>";
         echo "<td>".$nominal['prod_name']."</td>";
         echo "<td>".$nominal['store_id']."</td>";
         echo "<td>".$nominal['price']."</td>";
         echo "<td>".$nominal['quantity']."</td>";
         } }else{
             echo "No product found";
         }

            ?>
       
        

