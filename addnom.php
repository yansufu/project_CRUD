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


    <a href="index.php">Go Home</a>
    <table>
        <form class="form-group" action="addnom.php" method="post">
        
        <tr><td><label>nominal : <label></td>
        <td><input class="form-control w-75" type = "text" name = "nominal"></td></tr>
        <tr><td><label>Product ID : <label></td>
        <td><input class="form-control w-75" type = "text" name = "prod_id"></td></tr>
        <tr><td><label>Store ID : <label></td>
        <td><input class="form-control w-75" type = "text" name = "store_id"></td></tr>
        <tr><td><label>Price : <label></td>
        <td><input class="form-control w-75" type = "number" name = "price"></td></tr>
        <tr><td><label>Quantity : <label></td>
        <td><input class="form-control w-75" type = "number" name = "quantity"></td></tr>
       
        <tr><td><button class="btn btn-primary" type = "submit" name = "submit" value ="add">add</button></td></tr>
        </form>
    </table>
</body>
</html>

<?php
// check if form submitted, insert form data into student table
if(isset($_POST['submit'])){
   
    $nominal = $_POST['nominal'];
    $prod_id = $_POST['prod_id'];
    $store_id = $_POST['store_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


    //include database connection file
    include_once("config.php");

    //Insert student data into table
    $result = mysqli_query($conn, "INSERT INTO nominal(nominal,prod_id, store_id, price, quantity) VALUE ('$nominal', '$prod_id', '$store_id','$price','$quantity')");

    // Show Message
    echo "nominal added sucessfully <a href='nominal.php'>View nominal</a>";
}
?>