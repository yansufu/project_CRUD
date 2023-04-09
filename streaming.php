
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
    <a class="nav-link active text-light" href="#"><i class="fa-regular fa-cart-shopping"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-light" href="#">notification</a>
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

    <!--category-->
    

<div class="d-flex justify-content-center my-5">

<div class=" mx-3 border-bottom " style="width: 18rem;">
  <div class="card-body">
    <a href="index.php" class="card-text">mobile game</a>
  </div>
</div>
<div class=" mx-3 border-bottom " style="width: 18rem;">
  <div class="card-body">
    <a href="PC.php" class="card-text">PC game</a>
  </div>
</div>
<div class=" mx-3 border-bottom border-primary" style="width: 18rem;">
  <div class="card-body">
    <a href="streaming.php" class="card-text">streaming app</a>
  </div>
</div>
<div class=" mx-3 border-bottom" style="width: 18rem;">
  <div class="card-body">
    <a href="voucher.php" class="card-text">voucher code</a>
  </div>
</div>
<div class=" mx-3 border-bottom" style="width: 18rem;">
  <div class="card-body">
    <a href="utility.php" class="card-text">utility</a>
  </div>
</div>
<div class=" mx-3 border-bottom" style="width: 18rem;">
  <div class="card-body">
    <a href="app.php" class="card-text">application</a>
  </div>
</div>
<div class=" mx-3 border-bottom" style="width: 18rem;">
  <div class="card-body">
    <a href="console.php" class="card-text">console game</a>
  </div>
</div>
</div>

<!--table-->
<?php
include_once("config.php");

?>
    <a class="mt-5 text-secondary" href= "add.php">Add new product</a><br><br>

<div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">category</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from product where cat_id='A0003' order by prod_id desc ";
                        $q2     = mysqli_query($conn, $sql2);
                        while ($product = mysqli_fetch_array($q2)) {
                            $prod_id         = $product['prod_id'];
                            $prod_name        = $product['prod_name'];
                            $cat_id       = $product['cat_id'];
                            

                        ?>
                            <tr>
                                <th scope="row"><?php echo $prod_id ?></th>
                                <td scope="row"><?php echo $prod_name ?></td>
                                <td scope="row"><?php echo $cat_id ?></td>
                                
                                <td scope="row">
                                    <a href="edit.php?op=edit&prod_id=<?php echo $prod_id ?>"><button type="button" class="btn btn-warning">Edit</button></a> <a href="delete.php?op=delete&prod_id=<?php echo $prod_id?>" onclick="return confirm('Continue to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                    <a href="nominal.php?op=nominal&prod_id=<?php echo $prod_id ?>"><button type="button" class="btn btn-primary">nominal</button></a>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>

    <!--Javascript-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>