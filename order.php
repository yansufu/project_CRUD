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
    <a class="nav-link active text-light" href="order.php">Order</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-light" href="login.php">Log in</a>
  </li>
</nav>

<!--Table-->

<?php
include_once("config.php");

?>

<div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Transaction ID</th>
                            <th scope="col">Payment method</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Product</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Price</th>
                            <th scope="col">Datetime</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select a.tran_id, b.name as pay_met, c.name, d.prod_name, e.nominal, e.price, a.order_date from transaction a join payment_method b on a.paymet_id=b.id join user c on a.cust_id=c.user_id join product d on a.prod_id=d.prod_id join nominal e on a.nom_id=e.nom_id order by order_date";
                        $q2     = mysqli_query($conn, $sql2);
                        while ($order = mysqli_fetch_array($q2)) {
                            $tran_id      = $order['tran_id'];
                            $paymet       = $order['pay_met'];
                            $custname     = $order['name'];
                            $prod_name    = $order['prod_name'];
                            $nominal      = $order['nominal'];
                            $price        = $order['price'];
                            $datetime     = $order['order_date'];


                            

                        ?>
                            <tr>
                                <th scope="row"><?php echo $tran_id ?></th>
                                <td scope="row"><?php echo $paymet ?></td>
                                <td scope="row"><?php echo $custname ?></td>
                                <td scope="row"><?php echo $prod_name ?></td>
                                <td scope="row"><?php echo $nominal ?></td>
                                <td scope="row"><?php echo $price ?></td>
                                <td scope="row"><?php echo $datetime ?></td>



                                <td scope="row">
                                    <a href="edit.php?op=edit&prod_id=<?php echo $prod_id ?>"><button type="button" class="btn btn-warning">Edit</button></a> <a href="delete.php?op=delete&prod_id=<?php echo $prod_id?>" onclick="return confirm('Continue to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>            

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