<?php
session_start();
ob_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
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

    <title>Quản lý ứng dụng nghe nhạc - Trang chủ</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">Quản lý ứng dụng nghe nhạc</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <span>Trang chủ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Công cụ quản lý
            </div>

            <!-- Nav Item - Music Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>Bài hát</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý bài hát:</h6>
                        <a class="collapse-item" href="thembaihat.php">Thêm bài hát</a>
                        <a class="collapse-item" href="capnhatbaihat.php">Chỉnh sửa thông tin bài hát</a>
                        <a class="collapse-item" href="xoabaihat.php">Xoá bài hát</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Album Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Album</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý Album:</h6>
                        <a class="collapse-item" href="themalbum.php">Tạo Album</a>
                        <a class="collapse-item" href="capnhatalbum.php">Chỉnh sửa Album</a>
                        <a class="collapse-item" href="xoaalbum.php">Xoá Album</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Artist Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArtist" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Nghệ sĩ</span>
                </a>
                <div id="collapseArtist" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý Nghệ sĩ:</h6>
                        <a class="collapse-item" href="themnghesi.php">Thêm nghệ sĩ</a>
                        <a class="collapse-item" href="capnhatnghesi.php">Chỉnh sửa thông tin nghệ sĩ</a>
                        <a class="collapse-item" href="xoanghesi.php">Xoá nghệ sĩ</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Genre Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGenre" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Thể loại</span>
                </a>
                <div id="collapseGenre" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý Thể loại:</h6>
                        <a class="collapse-item" href="themtheloai.php">Tạo thể loại</a>
                        <a class="collapse-item" href="capnhattheloai.php">Chỉnh sửa thể loại</a>
                        <a class="collapse-item" href="xoatheloai.php">Xoá thể loại</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                    if($_SESSION['username']==true){ 
                                        echo '<span class="mr-2 d-none d-lg-inline text-gray-600 small">', $_SESSION["username"] ,'</span>';
                                    }
                                ?>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Đăng xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Trang chủ</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Song Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Tổng số bài hát</div>
<?php
    require_once('dbconfig.php');
    require_once('model.php');

    $sql = "SELECT COUNT(Song.Id) AS tong FROM `Song`";
    $query = mysqli_query($dbconn, $sql);
        $row = mysqli_fetch_row($query);
        $num = number_format($row[0], 0, ',', '.');
        echo'<div class="h5 mb-0 font-weight-bold text-gray-800">'.$num.'</div>';

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tổng số nghệ sĩ</div>
<?php
    require_once('dbconfig.php');
    require_once('model.php');

    $sql = "SELECT COUNT(Artist.Id) AS tong FROM `Artist`";
    $query = mysqli_query($dbconn, $sql);
        $row = mysqli_fetch_row($query);
        $num = number_format($row[0], 0, ',', '.');
        echo'<div class="h5 mb-0 font-weight-bold text-gray-800">'.$num.'</div>';

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tổng số Album</div>
<?php
    require_once('dbconfig.php');
    require_once('model.php');

    $sql = "SELECT COUNT(Album.Id) AS tong FROM `Album`";
    $query = mysqli_query($dbconn, $sql);
        $row = mysqli_fetch_row($query);
        $num = number_format($row[0], 0, ',', '.');
        echo'<div class="h5 mb-0 font-weight-bold text-gray-800">'.$num.'</div>';

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Tổng số thể loại</div>
<?php
    require_once('dbconfig.php');
    require_once('model.php');

    $sql = "SELECT COUNT(Genre.Id) AS tong FROM `Genre`";
    $query = mysqli_query($dbconn, $sql);
        $row = mysqli_fetch_row($query);
        $num = number_format($row[0], 0, ',', '.');
        echo'<div class="h5 mb-0 font-weight-bold text-gray-800">'.$num.'</div>';

?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Songs Card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Quản lý bài hát</h6>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-success btn-user btn-block" href="thembaihat.php">Thêm bài hát</a>
                                    <a class="btn btn-primary btn-user btn-block" href="capnhatbaihat.php">Chỉnh sửa thông tin bài hát</a>
                                    <a class="btn btn-danger btn-user btn-block" href="xoabaihat.php">Xoá bài hát</a>
                                </div>
                            </div>

                            <!-- Album Card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Quản lý Album</h6>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-success btn-user btn-block" href="themalbum.php">Tạo Album</a>
                                    <a class="btn btn-primary btn-user btn-block" href="capnhatalbum.php">Chỉnh sửa Album</a>
                                    <a class="btn btn-danger btn-user btn-block" href="xoaalbum.php">Xoá Album</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Artist Card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Quản lý nghệ sĩ</h6>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-success btn-user btn-block" href="themnghesi.php">Thêm nghệ sĩ</a>
                                    <a class="btn btn-primary btn-user btn-block" href="capnhatnghesi.php">Chỉnh sửa thông tin nghệ sĩ</a>
                                    <a class="btn btn-danger btn-user btn-block" href="xoanghesi.php">Xoá nghệ sĩ</a>
                                </div>
                            </div>

                            <!-- Genre Card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Quản lý Thể loại</h6>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-success btn-user btn-block" href="themtheloai.php">Tạo thể loại</a>
                                    <a class="btn btn-primary btn-user btn-block"href="capnhattheloai.php">Chỉnh sửa thể loại</a>
                                    <a class="btn btn-danger btn-user btn-block" href="xoatheloai.php">Xoá thể loại</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nguyễn Huy Hoàng 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn muốn đăng xuất?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Đăng xuất để kết thúc phiên làm việc.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                    <a class="btn btn-primary" name="logout_btn" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.btn_logout').click(function(){
                var clickBtnValue = $(this).val();

            })
        })
    </script>
    <?php
    if (isset($_POST['action'])){
        logout();
    }
    function logout(){
        session_start();
        // Xoá session
        session_destroy();
        // Di chuyển đến trang index.php
        header('Location: login.php');
    }

    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>