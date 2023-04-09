<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "itemku";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("failed connection");
}
$id        = "";
$name       = "";
$email     = "";
$password   = "";
$gender    = "";
$phone     = "";
$address      = "";
if (isset($_GET['users'])) {
    $users = $_GET['users'];
} else {
    $users = "";
}
if($users == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "DELETE FROM users WHERE id = 1";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Success delete";
    }else{
        $error  = "Failed delete data";
    }
}
if ($users == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "SELECT * FROM users WHERE id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $name        = $r1['name'];
    $email       = $r1['email'];
    $password    = $r1['password'];
    $gender      = $r1['gender'];
    $phone       = $r1['phone'];
    $address     = $r1['address'];

    if ($name == '') {
        $error = "Data not found";
    }
}
if (isset($_POST['save'])) { //untuk create
    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $gender      = $_POST['gender'];
    $phone       = $_POST['phone'];
    $address     = $_POST['address'];

    if ($name && $email && $password && $gender && $phone && $address) {
        if ($users == 'edit') { //untuk update
            $sql1       = "UPDATE users set name = '$name',email='$email',password = '$password', gender='$gender',phone='$phone',address='$address' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Success update data";
            } else {
                $error  = "Update failed";
            }
        } else { //untuk insert
            $sql1   = "INSERT into users(name,email,password,gender,phone,address) values ('$name','$email','$password','$gender','$phone','$address')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Save Success";
            } else {
                $error      = "Failed to save";
            }
        }
    } else {
        $error = "Please enter the data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:15");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="password" name="password" value="<?php echo $password ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" id="gender">
                                <option value="">- select -</option>
                                <option value="Male" <?php if ($address == "Male") echo "selected" ?>>Male</option>
                                <option value="Female" <?php if ($address == "Female") echo "selected" ?>>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-2 col-form-label"> Phone </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-sm-2 col-form-label"> Address </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $address ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="save" value="Save Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Users
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from user order by user_id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $name        = $r2['name'];
                            $email       = $r2['email'];
                            $password     = $r2['password'];
                            $gender      = $r2['gender'];
                            $phone        = $r2['phone'];
                            $address        = $r2['address'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $name ?></td>
                                <td scope="row"><?php echo $email ?></td>
                                <td scope="row"><?php echo $password ?></td>
                                <td scope="row"><?php echo $gender ?></td>
                                <td scope="row"><?php echo $phone ?></td>
                                <td scope="row"><?php echo $address ?></td>
                                <td scope="row">
                                    <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a> <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Continue to delete?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>

</html>