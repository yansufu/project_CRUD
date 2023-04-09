<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itemku";
// sql to delete a record
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
if (isset($_GET['prod_id'])){
  $id=$_GET['prod_id'];
  $delete = mysqli_query($conn, "DELETE FROM product WHERE prod_id='$id'");
if ($delete === TRUE) {
echo "<h1>Deleted successfully</h1>";
} else {
echo "Error deleted: " . $conn->error;
}
}
?>
</body>
</html>
