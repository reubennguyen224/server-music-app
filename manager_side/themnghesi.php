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
                    <span>Thêm nghệ sĩ</span></a>
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
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý Album:</h6>
                        <a class="collapse-item" href="themalbum.php">Tạo Album</a>
                        <a class="collapse-item" href="capnhatthongtin.php">Chỉnh sửa Album</a>
                        <a class="collapse-item" href="xoaalbum.php">Xoá Album</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Artist Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Nghệ sĩ</span>
                </a>
                <div id="collapseArtist" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý Album:</h6>
                        <a class="collapse-item" href="themnghesi.php">Thêm nghệ sĩ</a>
                        <a class="collapse-item" href="capnhatnghesi.php">Chỉnh sửa thông tin nghệ sĩ</a>
                        <a class="collapse-item" href="xoanghesi.php">Xoá nghệ sĩ</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Genre Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Thể loại</span>
                </a>
                <div id="collapseGenre" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
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

                <!--Begin content-->
                <div class="container-fluid">
                    <!--Page Heading-->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Thêm bài hát</h1>
                    </div>
                    <!--End of heading-->

                    <!--Form input-->
                    <div class="row">
                        <div class="col-lg-12 mb-10">
                            <div class="card shadow mb-9">
                                <div class="card-header py-4">
                                    <h6 class="m-1 font-weight-bolder text-primary text-center">Thêm thể loại</h6>
                                </div>
                                <form class="user" method="post" enctype="multipart/form-data" action="themnghesi.php">
                                        <div class="form-group">
                                            <label for="tenns">Tên nghệ sĩ:</label>
                                            <input type="text" id="tenns" name="tenns" class="form-control" placeholder="Bảo Thy">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Giới thiệu nghệ sĩ</label>
                                            <input type="text" id="description" name="description" class="form-control" placeholder="Ca sĩ nổi tiếng">
                                        </div>

                                        <div class="form-group">
                                            <label for="avatarURI">Ảnh đại diện nghệ sĩ</label>
                                            <input type="file" id="avatarURI" name="avatarURI" class="form-control-file">
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Ngày gia nhập nền tảng</label>
                                            <input type="date" id="date" name="date" class="form-control">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-sm-0 mb-3"></div>
                                            <div class="col-sm-4 ">
                                                <input type="submit" class="btn btn-primary btn-user btn-block" onclick="alert('Nhận dữ liệu thành công!')" value="Nhập vào">
                                            </div>
                                            <div class="col-sm-4 mb-sm-0 mb-3"></div>
                                        </div>
                                    </form>
                                </div>
<?php
require_once('dbconfig.php');
require_once('model.php');
    if (isset($_REQUEST['nhapvao'])) {

        $tenns = "";
        $description = "";
        $date = "";
        $avatarURI = "";
        $file_path = "../img/artist/";
    $filepath = "/img/artist/";
    if (!is_dir($file_path)){
        mkdir($file_path, 0755, true);
    }
    $file_path = $file_path . basename($_FILES['avatarURI']['name']);
    if (move_uploaded_file($_FILES['avatarURI']['tmp_name'], $file_path)) {
        $avatarURI = "https://hoang2204.000webhostapp.com/" . $filePath . basename($_FILES['avatarURI']['name']);
    } else {
        echo "<script type='text/javascript'> alert('File của bạn không thể upload') </script>";
        header('Location:themnghesi.php?');
    }
    
        if (isset($_POST['tenns'])) {
            $tenns = $_POST['tenns'];
        }
        if (isset($_POST['description'])) {
            $description = $_POST['description'];
        }
    $date = strtotime($_POST['date']);
        
        $query1 = "INSERT INTO `Artist`(`Name`, `AvatarURI`, `Introduction`, `DateCreated`) VALUES ('$tenns','$avatarURI','$description', '$date')";
        mysqli_query($dbconn, $query1);
 

    }
?>
                            </div>
                        </div>
                    </div>
                    <!--End of Form-->
                </div>
                <!--End of content-->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Nguyễn Huy Hoàng - E18CN01</span>
                            <span>B18DCAT099</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn thoát khỏi hệ thống?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn <i>Đăng xuất</i> để kết thúc phiên làm việc.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ</button>
                    <input type="submit" name="btn_logout" class="btn btn-primary" value="Đăng xuất">
                </div>
            </div>
        </div>
    </div>

<?php 
if (isset($_REQUEST['btnlogout'])) {
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