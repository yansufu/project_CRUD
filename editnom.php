
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
        <form class="form-group" action="edit.php" method="post">
        <tr><td><label>product ID : <label></td>
        <td><input class="form-control w-75" type = "text" name = "ID"></td></tr>
        <tr><td><label>category ID : <label></td>
        <td><input class="form-control w-75" type = "text" name = "cat_id"></td></tr>
        <tr><td><label>product name : <label></td>
        <td><input class="form-control w-75" type = "text" name = "prod_name"></td></tr>
        
        <tr><td><button class="btn btn-primary" type = "submit" name = "submit" value ="Edit">edit</button></td></tr>
        </form>
    </table>
</body>
</html>

<?php
include_once("config.php");
$ID = $_GET['prod_id'];
if(isset($_POST["submit"])){
    $prod_id = $_POST['ID'];
    $cat_id = $_POST['cat_id'];
    $prod_name = $_POST['prod_name'];

    //update user data
    $result = mysqli_query($conn, "UPDATE product SET cat_id='$cat_id', prod_name='$prod_name' WHERE prod_id=$prod_id");

    // Redirect to hompeage
    header("location: index.php");



}
?>