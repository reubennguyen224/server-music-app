<?php
session_start();
if ( ! empty( $_SESSION['username'] ) ) {
    header('Location:index.php?');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý ứng dụng nghe nhạc - Đăng nhập</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<?php
    require_once('dbconfig.php');
    require_once('model.php');
    
    if (isset($_POST["btn_submit"])) {
        $username  = $_POST['username'];
        $password  = $_POST['password'];

        $password  = addslashes($password);
        $username = addslashes($username);
    
        if ($username == "" && $password == "") {
            echo "<script type='text/javascript'> alert ('Không bỏ trống tên đăng nhập và mật khẩu!'); </script>";
        } else {
            $loginQuery = "SELECT * FROM `Account` WHERE `Username` = '$username' AND `Password` = '$password'";
            $query = mysqli_query($dbconn, $loginQuery);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows == 1) {
                sessionstart();
                $_SESSION['username'] = $username;
                header('Location:index.php?');
                exit;
            } else {
                echo "<script type='text/javascript'> alert ('Tên đăng nhập và mật khẩu không đúng!'); </script>";
            }
        }
    }
    
?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div id="error-msg" role="alert" class="col-lg-3 d-none d-lg-block"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Chào mừng quay trở lại!</h1>
                                    </div>
                                    <form name="login-form" class="user" method="POST" action="login.php" id="login-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Tên đăng nhập">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Mật khẩu">
                                        </div>
                                        <input id="login" type="submit" name="btn_submit" class="btn btn-primary btn-user btn-block" value="Đăng nhập">
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>