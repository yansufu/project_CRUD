<?php include("server.php")
?>
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
    <a class="nav-link active text-light" href="order.php">Order</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-light" href="login.php">Log in</a>
  </li>
</nav>
  
</div>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form class="form-group" method="post" action="register.php">
  	
  	<div class="form-group w-75">
  	  <label>Username</label>
  	  <input class="form-control" type="text" name="name" >
  	</div>
  	<div class="form-group w-75">
  	  <label>Email</label>
  	  <input class="form-control" type="email" name="email" >
  	</div>
      <div class="form-group w-75">
  	  <label>Phone number</label>
  	  <input class="form-control" type="number" name="phone" >
  	</div>
      <div class="form-group w-75">
  	  <label>Gender</label>
  	  <input class="form-control" type="radio" id="" name="Gender" value="1"> Male <br>
        <input class="form-control" type="radio" id="" name="Gender" value="2"> Female<br>
  	</div>
      <div class="form-group w-75">
  	  <label>Birth date</label>
  	  <input type="date" name="birth" >
  	</div>
  	<div class="form-group w-75">
  	  <label>Password</label>
  	  <input class="form-control" type="password" name="password_1">
  	</div>
  	<div class="form-group w-75">
  	  <label>Confirm password</label>
  	  <input class="form-control" type="password" name="password_2">
  	</div>
  	<div class="form-group w-75">
  	  <button class="btn-primary" type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

</body>
</html>