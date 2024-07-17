<?php

include 'checkLogin.php';
if($_SESSION['tenDN']==null){
    header("Location: loginAD.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Sản Phẩm</title>

    <!-- Vendors Style-->

    <link rel="stylesheet" href="css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
    <link href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </a>
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <span class="light-logo"><img src="images/logo-dark-text.png" alt="logo"></span>
                        <span class="dark-logo"><img src="images/logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
                                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
                                <i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
                                <i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
                                <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i><span id="tenDN1"></span></a>
                                    <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href=""><i class="ti-lock text-muted mr-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
                                <i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">

                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                            <span>Quản Lý sản phẩm</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="HomeAD.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sản phẩm</a></li>
                            <li><a href="Them.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Thêm Sản Phẩm</a></li>
                            <li><a href="tableProducts.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sửa,Xóa,Chi Tiết</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                            <span>Quản Lý đơn hàng</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="tableDonHang.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Đơn hàng</a></li>
                            <li><a href="donDangGiao.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Đơn đang giao</a></li>
                            <li><a href="donDaGiao.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Đơn đã giao</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                            <span>Quản Lý tài khoản AD</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="themTKAD.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Thêm tài khoản ADMIN</a></li>
                            
                        </ul>
                    </li>

                </ul>
            </section>
            <div class="sidebar-footer">
                <!-- item-->
                <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><span class="icon-Settings-2"></span></a>
                <!-- item-->
                <a href="mailbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><span class="icon-Mail"></span></a>
                <!-- item-->
                <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><span class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></span></a>
            </div>
        </aside>
        <div class="content-wrapper">

    <div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Tạo tài khoản AD</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="HomeAD.php"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">QL Tài khoản AD</li>
                            <li class="breadcrumb-item active" aria-current="page">Tạo tài khoản</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Tạo tài khoản</h4>
                    </div>
                    <div class="box-body">
                        <form>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Nhập Họ</label>
                                            <input type="text" id="ho" class="form-control" placeholder="Nhập họ">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-700 font-size-16">Nhập Tên</label>
                                            <input type="text" id="ten" class="form-control" placeholder="Nhập tên">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                              
                                <!--/row-->
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-3">
                                       
                                       <div class="form-group">
                                           <label class="font-weight-700 font-size-16">Nhập tài khoản</label>
                                           <input type="text" id="tenDN" class="form-control" placeholder="Nhập tài khoản">
                                       </div>
                                   </div>
                                   <!--/span-->
                                   
                                </div>
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-3">
                                       
                                       <div class="form-group">
                                           <label class="font-weight-700 font-size-16"> Nhập mật khẩu</label>
                                           <input type="password" id="matKhau" class="form-control pl-15 bg-transparent" placeholder="Nhập mật khẩu">
                                       </div>
                                   </div>
                                   <!--/span-->
                                   
                                </div>
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-3">
                                       
                                       <div class="form-group">
                                           <label class="font-weight-700 font-size-16">Nhập lại mật khẩu</label>
                                           <input type="password" id="conFirmMK" class="form-control pl-15 bg-transparent" placeholder="Nhập lại mật khẩu">
                                       </div>
                                   </div>
                                   <!--/span-->
                                   
                                </div>
                            </div>
                            <button type="button" class=" btn btn-danger btnthoat" data-dismiss="modal"><i class="ti-trash"></i> Thoát </button>
                            <button type="button" style="background-color:blue" class="btn btn-primary btnmua" id="taoTK"><i class="ti-save-alt"></i>Tạo tài khoản </button><!-- /.box-body -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>

    <script src="js/vendors.min.js"></script>
    <script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
    <script src="../assets/vendor_components/moment/min/moment.min.js"></script>
    <script src="../assets/vendor_components/fullcalendar/fullcalendar.js"></script>
    <!-- EduAdmin App -->
    <script src="js/template.js"></script>
    <script src="js/pages/calendar.js"></script>
    <script src="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script>
        $(document).ready(function(){
 $('#taoTK').on('click',function(){
  var ho=$('#ho').val();
  var ten=$('#ten').val();
  var tenDN=$('#tenDN').val();
  var matKhau=$('#matKhau').val();
  var confirmMK=$('#conFirmMK').val();
  if(confirmMK!=matKhau){
    $.toast({
                        heading: 'Cảnh Báo  ',
                        text: ' Hai mật khẩu không giống nhau.  ',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'warning',
                        hideAfter: 1500,
                        stack: 6
                    });
  }else{
    $.ajax({
        url:"taoTKAD.php",
        type:"POST",
        data:{ho:ho,ten:ten,tenDN:tenDN,matKhau:matKhau},
        success: function(res){
            if(res.data==1){
                $.toast({
                                    heading: 'Thành Công  ',
                                    text: ' Tạo tài khoản  ',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'success',
                                    hideAfter: 50,
                                    stack: 6,
                                });
                                reset();
            }else{
                $.toast({
                        heading: 'Cảnh Báo  ',
                        text: ' Tài khoản đã tồn tại  ',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'error',
                        hideAfter: 1500,
                        stack: 6
                    });
            }
        }
    })
  }
 })
        })
        function reset(){
            $('#ho').val('');
  $('#ten').val('');
  $('#tenDN').val('');
  $('#matKhau').val('');
  $('#conFirmMK').val(''); 
        }
    </script>
</body>
</html>