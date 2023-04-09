<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
</head>
<body>
    <a href="index.php">Go Home</a>
    <table>
        <form action="add.php" method="post">
        
        <tr><td><label>product name : <label></td>
        <td><input type = "text" name = "prod_name"></td></tr>
        <tr><td><label>Category ID : <label></td>
        <td><input type = "text" name = "cat_id"></td></tr>
       
        <tr><td><input type = "submit" name = "submit" value ="add"></td></tr>
        </form>
    </table>
</body>
</html>

<?php
// check if form submitted, insert form data into student table
if(isset($_POST['submit'])){
   
    $prod_name = $_POST['prod_name'];
    $cat_id = $_POST['cat_id'];
    

    //include database connection file
    include_once("config.php");

    //Insert student data into table
    $result = mysqli_query($conn, "INSERT INTO product(prod_name,cat_id) VALUE ('$prod_name', '$cat_id')");

    // Show Message
    echo "Product added sucessfully <a href='index.php'>View product</a>";
}
?>