<?php
require_once ("include/connection.php");
include("include/registerfunction.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Librarian | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="include/favicon/fav.png">
    <!-- css code -->
    <style>
        /**{*/
        /*    margin: 0px;*/
        /*    padding: 0px;*/
        /*}*/
        body{
            height: 100%;
        }
        .bg-image{
            background-image: url("include/images/signup_bg.jpg");
            filter: blur(5px);
            -webkit-filter: blur(5px);
            height: 920px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .main{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /*z-index: 2;*/
        }
        .header{
            width: 600px;
            margin: 10px auto auto 350px;
        }
        .header .msg{
            width: 600px;
            margin: 10px auto auto -80px;
        }
        .card{
            width: 600px;
            margin:10px auto auto;
        }
    </style>
</head>

<body>
<div class="bg-image"></div>
<div class="container main">
    <div class="row">
        <div class="header">
            <h1 class="text-white ml-4"><b>Librarian Registration</b></h1>
            <!-- alert msg when registrtation is success and error -->
            <?php
            if(isset($success)){
                ?>
                <div class="alert alert-success alert-dismissible fade show msg" role="alert">
                    <strong><?= $success;?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }
            ?>
            <?php
            if(isset($error)){
                ?>
                <div class="alert alert-danger alert-dismissible fade show msg" role="alert">
                    <strong><?= $error;?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }
            ?>
        </div>
                <!-- form starts here -->
        <div class="card" style="background: #dfe4ea">
            <div class="card-body">
                <p class="login-box-msg">Register for new Librarian</p>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="name" placeholder="Your Name" class="form-control" autocomplete="off" value="<?= isset($name) ? $name :'' ?>">
                            <?php
                            if (isset($errors['name'])) {
                                echo '<span class="text-danger">'. $errors['name'] .'</span>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" autocomplete="off" value="<?= isset($email) ? $email : ''?>">
                            <?php
                            if (isset($errors['email'])) {
                                echo "<span class='text-danger'>".$errors['email']."</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">User Name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="user_name" class="form-control" placeholder="User Name" autocomplete="off" value="<?= isset($user_name) ? $user_name : ''?>">
                            <?php
                            if (isset($errors['user_name'])) {
                                echo "<span class='text-danger'>".$errors['user_name']."</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Password</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="password" class="form-control" placeholder="Your Password" autocomplete="off">
                            <?php
                            if (isset($errors['password'])) {
                                echo "<span class='text-danger'>".$errors['password']."</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Phone No</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="phone_no" class="form-control" placeholder="Your Phone No" autocomplete="off" value="<?= isset($phone_no) ? $phone_no : ''?>">
                            <?php
                            if (isset($errors['phone_no'])) {
                                echo "<span class='text-danger'>".$errors['phone_no']."</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="register" class="btn btn-outline-primary btn-block btn-flat">
                                Register
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="login.php" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</div>
<!-- jQuery -->
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.min.js"></script>
</body>
</html>


