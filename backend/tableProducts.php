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
    <link href="../assets/vendor_components/datatable/datatables.min.css" rel="stylesheet" />
    
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
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i><span id="tenDN1"><?php echo $_SESSION['tenDN'] ?></span></a>
                                    <a class="dropdown-item" href="#" id="thongTinTK"><i class="ti-wallet text-muted mr-2"></i>Thông tin tài khoản</a>
                                    <a class="dropdown-item" href="#" id="doiMK"><i class="ti-settings text-muted mr-2"></i> Đổi mật khẩu</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logoutAD.php?tenDN=<?php echo $_SESSION['tenDN'];  ?>"><i class="ti-lock text-muted mr-2"></i> Logout</a>
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
                <h3 class="page-title">Sản Phẩm</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Sản phẩm</li>
                            <li class="breadcrumb-item active" aria-current="page">QL Sản Phẩm (Table)</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <button type="button" data-toggle="modal" id="btnadd" class="waves-effect waves-light btn btn-success mb-5"><i class="fa fa-check"></i> Thêm Mới</button>
                            <table id="tb1" class="table table-hover no-wrap product-order" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm </th>
                                        <th>Hình Ảnh </th>
                                        <th>Giá Bán </th>
                                        <th>Chức Năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /.content -->
</div>

 <div class="modal fade bs-example-modal-lg" tabindex="-1" id="add1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"> Sản Phẩm</h4>
                <button type="button" class="close btnclose1" aria-hidden="true" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                            <input id="maSP" type="hidden" />
                                <div class="form-group">
                                    <label class="font-weight-700 font-size-16">Tên Sản Phẩm</label>
                                    <input type="text" id="tenSP" class="form-control" placeholder="Tên Sản Phẩm">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-700 font-size-16">Giá Bán</label>
                                    <input type="text" id="giaBan" class="form-control" placeholder="Tên Sản Phẩm">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <!--/row-->
                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                    
                            <!--/span-->
                            <div class="col-md-3">
                                <h4 class="box-title mt-20">Upload Ảnh</h4>
                                <div class="product-img text-left">
                                    <img src="" alt="" id="reviewAnh">
                                    <div class="btn btn-info mb-20">
                                        <span>Upload Ảnh</span>
                                        <input type="file" class="upload" id="hinhAnh" accept="img/*">
                                        <span id="tenAnh"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>							<!-- /.box-body -->

                </form>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class=" btn btn-secondary btn btn-rounded btn-warning btn-outline mr-1 btnthoat" data-dismiss="modal"><i class="ti-trash"></i> Thoát </button>
                <button type="button" style="background-color:blue" class="btn btn-rounded btn-primary btn-outline btn btn-primary float-right btnmua" id="edit1"><i class="ti-save-alt"></i>Xác nhận </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal center-modal fade" id="modal-center" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Xóa sản Phẩm</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="ma1" />
                <p>Bạn có muốn xóa sản phẩm này không ?</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Không </button>
                <button type="button" class="btn btn-primary float-right" id="xoa1">Có</button>
            </div>
        </div>
    </div>
</div>
            <hr />
        </div>
    </div>


    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="doiMK1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"> Đổi mật khẩu</h4>
                <button type="button" class="close btnclose1" aria-hidden="true" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form>
                    <div class="form-body">
                    <input type="hidden" value="<?php echo $_SESSION['maTK']; ?>" id="maTK">
                        <div class="row">
                            <div class="col-md-3">
                            
                                <div class="form-group">
                                    <label class="font-weight-700 font-size-16">Mật khẩu hiện tại</label>
                                    <input type="password" id="oldPass" class="form-control pl-15 bg-transparent" placeholder="Mật khẩu hiện tại">
                                </div>
                            </div>
                            <!--/span-->
                            
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <!--/row-->
                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                                    <!--/span-->
                                    <div class="col-md-3">
                                       
                                       <div class="form-group">
                                           <label class="font-weight-700 font-size-16"> Nhập mật khẩu mới</label>
                                           <input type="password" id="newPass" class="form-control pl-15 bg-transparent" placeholder="Nhập mật khẩu mới">
                                       </div>
                                   </div>
                                   <!--/span-->
                                   
                                </div>
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-3">
                                       
                                       <div class="form-group">
                                           <label class="font-weight-700 font-size-16"> Nhập lại mật khẩu mới</label>
                                           <input type="password" id="confirmnewPass" class="form-control pl-15 bg-transparent" placeholder="Nhập lại mật khẩu mới">
                                       </div>
                                   </div>
                                   <!--/span-->
                                   
                                </div>
                    </div>							<!-- /.box-body -->

                </form>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class=" btn btn-secondary btn btn-rounded btn-warning btn-outline mr-1 btnthoat" data-dismiss="modal"><i class="ti-trash"></i> Thoát </button>
                <button type="button" style="background-color:blue" class="btn btn-rounded btn-primary btn-outline btn btn-primary float-right btnmua" id="doiPass"><i class="ti-save-alt"></i>Xác nhận </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" id="detail1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"> Thông tin tài khoản</h4>
                <button type="button" class="close btnclose1" aria-hidden="true" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <form>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md">
                            
                                <div class="form-group">
                                    <label class="font-weight-700 font-size-16">Họ Tên</label>
                                    <input type="text" id="hoTen" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                         
                        </div>
                        <!--/row-->
                        <div class="row">
                            <!--/span-->
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label class="font-weight-700 font-size-16">Tên đăng nhập</label>
                                    <input type="text" id="tenDN" class="form-control">
                                  </div>
                             </div>
                             <div class="col-md-6">
                            <div class="form-group">
                                    <label class="font-weight-700 font-size-16">Mật khẩu</label>
                                    <input type="text" id="password1" class="form-control">
                                  </div>
                             </div>
                        </div>
                       
                    </div>							<!-- /.box-body -->

                </form>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class=" btn btn-secondary btn btn-rounded btn-warning btn-outline mr-1 btnthoat" data-dismiss="modal"><i class="ti-trash"></i> Thoát </button>
                <button type="button" style="background-color:blue" class="btn btn-rounded btn-primary btn-outline btn btn-primary float-right btnmua" data-dismiss="modal"><i class="ti-save-alt"></i>Xác nhận </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
    <script src="../assets/vendor_components/datatable/datatables.min.js"></script>
    
    <script>
$(document).ready(function() {
    var table_products=null;
    load_tbl();
    function load_tbl(){
    if(table_products){
        table_products.destroy();
    }
    table_products= $('#tb1').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url":"dataTable.php",
            "type": "POST",
            "data":(d)=>{
                return $.extend({}, d, {
                    "OrderArray":"maSP,tenSP,giaBan,HinhAnh",
                });
            },
            "datatype": "json",
            dataSrc: (res) =>{
                
                    
                    res.data.forEach(element => {
                        element.Method = `<a class=" my-method-button btn_edit" data-toggle="tooltip" href="#" title="Sửa thông tin" ><i class="fa-lg fa fa-edit text-purple"></i></a>
                                        <a class=" my-method-button btn_delete"   data-toggle="tooltip" href="#" title="Xóa" ><i class="fa-trash fa-lg fa text-accent"></i></a>`;
                                    })

                    return res.data;
                
            },
        
        },
       
            "aoColumnDefs": [
            {
                "className": "text-center",
                "width": "5%",
                "orderable": false,
                "targets": [0, 1, 2, 3,4]
            },
            //{
            //    "className": "text-center",
            //    "width": "15%",
            //    "targets": [2]
            //}
        ],
        "columns": [
            { "data": null },
            { "data": "tenSP" },
            { "data": "hinhAnh",
                        "render": function (data, type, row, meta) {
                            return " <td><img src='img/" + row.hinhAnh + "' width='100' id=anh></td>"
                        } },
            { "data": "giaBan" ,
                "render": function (data, type, row, meta) {
                            return " <td>"+row.giaBan+" VND</td>"
                        }
            },
            
            {"data":"Method"},
        ],
        "language": {
            "emptyTable": "Không có dữ liệu.",
            "sLengthMenu": "Số bản ghi hiển thị trên 1 trang _MENU_ ",
            "sInfo": "Hiển thị từ _START_ đến _END_ của _TOTAL_ bản ghi",
            "sSearch": "Tìm kiếm:",
            "oPaginate": {
                "sFirst": "Đầu",
                "sPrevious": "Trước",
                "sNext": "Tiếp",
                "sLast": "Cuối"
            }
        },
        bAutoWidth: false,
        fnRowCallback: (nRow, aData, iDisplayIndex) => {
            $("td:first", nRow).html(iDisplayIndex + 1);
            return nRow;
        },
    });
}

   $('#hinhAnh').change(function () {
                var hinhAnh = $('#hinhAnh').prop('files')[0].name;
                $('#reviewAnh').attr('src', 'img/' + hinhAnh);
            });
$('#btnadd').on('click',function(){
    $('#maSP').val(-1);
    $('#hinhAnh').val('');
    $('#tenSP').val('');
    $('#giaBan').val('');
    $('#reviewAnh').attr('src', '');
    $('#tenAnh').text('');
    $('#add1').modal('show');

})
$('#tb1').on('click','.btn_edit',function(e){
    var obj = $(e.delegateTarget).DataTable().row($(this).parents('tr')).data();
    $('#maSP').val(obj.maSP);
    $('#tenSP').val(obj.tenSP);
    $('#giaBan').val(obj.giaBan);
    $('#reviewAnh').attr('src', 'img/' + obj.hinhAnh);
    $('#tenAnh').text('');
    console.log(obj);
    $('#add1').modal('show');
})
$('#edit1').on('click',function(){
    var maSP = $('#maSP').val();
    var tenSP = $('#tenSP').val();
    var giaBan = $('#giaBan').val();
    //var duongDan = $('#hinhAnh').val();
    var duongDan =$('#reviewAnh').attr('src');
    console.log(duongDan);
    console.log(duongDan.split('/').pop());
    if (maSP == '' || tenSP == '' || giaBan == '') {
                    $.toast({
                        heading: 'Cảnh Báo  ',
                        text: ' Chưa nhập đủ thông tin  ',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'warning',
                        hideAfter: 1500,
                        stack: 6
                    });
                }else {
                    var hinhAnh = duongDan.split('/').pop();
                    console.log(maSP);
                    console.log(tenSP);
                    console.log(giaBan);
                    console.log(hinhAnh);
                    $.ajax({
                        url: "crudProducts.php",
                        type: "POST",
                        data: { action:'edit',maSP: maSP, tenSP: tenSP, giaBan: giaBan, hinhAnh: hinhAnh },
                        success: function (res) {
                            if (res.data==1) {
                                $.toast({
                                    heading: 'Thành Công  ',
                                    text: '  Sản Phẩm  ',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'success',
                                    hideAfter: 50,
                                    stack: 6,
                                    afterHidden: function () {
                                        load_tbl();
                                        $('#add1').modal('hide');
                                      
                                    },
                                });

                            }else{
                                $.toast({
                        heading: 'Cảnh Báo  ',
                        text: ' Có lỗi xảy ra  ',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'warning',
                        hideAfter: 1500,
                        stack: 6
                    });
                            }
                        }
                    })
                }
})

$('#tb1').on('click','.btn_delete',function(e){
    var obj = $(e.delegateTarget).DataTable().row($(this).parents('tr')).data();
   $('#ma1').val(obj.maSP);
    $('#modal-center').modal('show');
})

$('#xoa1').on('click',function(){
    var maSP=$('#ma1').val();
    if(maSP>0){
                $.ajax({
                        url: "crudProducts.php",
                        type: "POST",
                        data: { action:'delete',maSP: maSP},
                        success: function (res) {
                            if (res.data==1) {
                                $.toast({
                                    heading: 'Thành Công  ',
                                    text: ' Xóa Sản Phẩm  ',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'success',
                                    hideAfter: 50,
                                    stack: 6,
                                    afterHidden: function () {
                                    
                                        load_tbl();
                                        $('#modal-center').modal('hide');
                                    },
                                });

                            }else{
                                $.toast({
                        heading: 'Cảnh Báo  ',
                        text: ' Có lỗi xảy ra  ',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'warning',
                        hideAfter: 1500,
                        stack: 6
                    });
                            }
                        }
})
    }else{
        console.log('loii');
    }
})
  
$('#doiMK').on('click',function(){
    $('#doiMK1').modal('show');
})
$('#doiPass').on('click',function(){
  var maTK=$('#maTK').val();
   var oldPass=$('#oldPass').val();
  var newPass=$('#newPass').val();
  var confirmnewPass=$('#confirmnewPass').val();

if(confirmnewPass!=newPass){
    $.toast({
                                    heading: 'Cảnh báo ',
                                    text: '  Hai mật khẩu không mới không giống nhau ',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'warning',
                                    hideAfter: 50,
                                    stack: 6,
                                    afterHidden: function () {
                                        
                                    },
                                }); 
}
else{
    if(maTK>0){
    $.ajax({
        url:"tkADMIN.php",
        type:"POST",
        data:{action:'doiMK',maTK:maTK,oldPass:oldPass,newPass:newPass},
        success:function(res){
            if(res.data==1){
                $.toast({
                                    heading: 'Thành Công  ',
                                    text: '  Đổi mật khẩu ',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'success',
                                    hideAfter: 1500,
                                    stack: 6,
                                    afterHidden: function () {
                                        $('#doiMK1').modal('hide');
                                    },
                                });
            }else{
                $.toast({
                                    heading: 'Cảnh báo ',
                                    text: '  Mật khẩu nhập không đúng ',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'error',
                                    hideAfter: 1500,
                                    stack: 6,
                                    afterHidden: function () {
                                        
                                    },
                                });
            }
        }
    })
}
    else{
    console.log('lỗii');
}
}
})
$('#thongTinTK').on('click',function(){
    var maTK=$('#maTK').val();
    if(maTK>0){
    $.ajax({
        url:"tkADMIN.php",
        type:"POST",
        data:{action:'thongTinTK',maTK:maTK},
        success:function(res){
            if(res.check==1){
            $('#hoTen').val(res.data.hoTen);
            $('#tenDN').val(res.data.tenDN);
            $('#password1').val(res.data.matKhau);
            console.log(res.data.matKhau);
            $('#detail1').modal('show');
            }else{
                console.log('loii');
            }
        }
    })
}

})

});


</script>
</body>
</html>