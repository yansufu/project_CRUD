
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
  <a class="navbar-brand text-light" href="index.php">itemku</a>
  

  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active text-light" href="order.php">order</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-light" href="login.php">Log in</a>
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

<a class="mt-5 text-secondary" href= "addnom.php">Add nominal</a><br><br>


<!--nominal dropdown-->
<?php

include_once("config.php");


if (isset($_GET['prod_id'])){
  $id=$_GET['prod_id'];
  $result = mysqli_query($conn, "SELECT a.nom_id, a.nominal, a.prod_id, b.prod_name, a.store_id, a.price, a.quantity FROM nominal a inner join product b on a.prod_id=b.prod_id where a.prod_id = '$id' order by price");

}


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
?>

          <td scope="row">
              <a href="editnom.php?op=edit&nom_id=<?php echo $nom_id ?>"><button type="button" class="btn btn-warning">Edit</button></a> 
              <a href="deletenom.php?op=delete&nom_id=<?php echo $nom_id?>" onclick="return confirm('Continue to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
<?php
                                
           } }else{
               echo "No product found";
           }

?>

<!--Javascript-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>