<?php
    require_once ("include/connection.php");
    include('include/loginfunction.php');

    if(isset($_SESSION['admin_login'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Librarian | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../asset/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../asset/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="include/favicon/favicon.ico">
    <style>
        /**{*/
        /*    margin: 0px;*/
        /*    padding: 0px;*/
        /*}*/
        body{
            height: 100%;
        }
        .bg-image{
            background-image: url("include/images/login_bg.jpg");
            filter: blur(5px);
            -webkit-filter: blur(5px);
            height: 920px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .main{
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            /*z-index: 2;*/
        }
        .header{
            width: 600px;
            margin: 50px auto auto 400px;
        }
        .header .msg{
            width: 600px;
            margin: 10px auto auto -130px;
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
            <h1 class="text-white ml-4"><b>Librarian Login</b></h1>
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
        <!-- /.login-logo -->
        <div class="card bg-gradient-danger">
            <div class="card-body">
                <p class="login-box-msg">Sign in</p>

                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Email</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control" placeholder="Your Email" autocomplete="off" value="<?= isset($email) ? $email : ''?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="">Password</label>
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" placeholder="Your Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>
<!-- jQuery -->
<script src="../asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../asset/dist/js/adminlte.min.js"></script>

</body>
</html>