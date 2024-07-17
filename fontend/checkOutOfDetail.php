<?php 
include '../connect.php';
$id=$_GET['id'];
$sql="SELECT *FROM products ORDER BY maSP DESC LIMIT 4 ";
$query=mysqli_query($conn,$sql);
$sql1="SELECT*FROM products WHERE maSP='$id' LIMIT 1";
$query1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($query1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thanh toán</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="soucreClients/logo.png">
    <title>Shop Online</title>

    <!-- Google Fonts -->
    <link href="soucreClients/css/fonts1.css" rel="stylesheet" />
    <link href="soucreClients/css/fonts2.css" rel="stylesheet" />
    <link href="soucreClients/css/fonts3.css" rel="stylesheet" />

    <!-- Bootstrap -->

    <link href="soucreClients/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="soucreClients/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="soucreClients/css/owl.carousel.css">
    <link href="soucreClients/style1.css" rel="stylesheet" />
    <link rel="stylesheet" href="soucreClients/css/responsive.css">
    <link href="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css" rel="stylesheet" />
    
</head>
<body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="Cart.php"><i class="fa fa-shopping-cart text-success"></i>Giỏ hàng</a></li>
                            <li><a href=""><i class="fa fa-user"></i> thanh toán</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="soucreClients/logo.png" /></a></h1>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="Cart.php">Giỏ hàng - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Home.php">Trang chủ</a></li>
                        <li><a href="Shop.php">Cửa Hàng Sản Phẩm</a></li>
                        <li><a href="Cart.php">Giỏ Hàng</a></li>
                        <li><a href="checkOut.php">Thanh toán</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Check Out</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Tìm kiếm</h2>
                    <form action="">
                        <input type="text" id="check" placeholder="Tìm kiếm">
                        <div class="single-sidebar" id="load_payment1" style="display:none;">

                        </div>
                        <input type="submit" id="gui1" value="Tìm">
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Sản phẩm mới</h2>
                    <div id="sP1">
                    <?php while($row=mysqli_fetch_assoc($query)){ ?>
                        <div class="thubmnail-recent">
                            <img src="soucreClients/img/<?php echo $row['hinhAnh'] ?>" class="recent-thumb" alt="">
                            <h2><a href="detail.php?id=<?php echo $row['maSP']; ?>" class="btndetail1"> <?php echo $row['tenSP'] ?></a></h2>
                             <div class="product-sidebar-price">
                            <ins><?php echo $row['giaBan'] ?> VND</ins>
                            </div>
                            </div>
                            <?php } ?>
                    </div>
                </div>

               
            </div>

            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Hình Ảnh</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá bán</th>
                                <th class="w-200">Số lượng </th>
                                <th>Thành tiền</th>
                                
                            </tr>
                        </thead>
                        <tbody id="donMua1">
                        <tr>    
                            <input type="hidden" value="<?php echo $row1['maSP'] ?>" id="ma1"/>
                             <td><img src="soucreClients/img/<?php echo $row1['hinhAnh']; ?>" alt="" width="80"></td>
                             <td> <h5 class="btnma"><?php echo $row1['tenSP']; ?></h5></td>
                             <td>  <?php echo $row1['giaBan']; ?> VND</td>
                             <td width="70"><div class="btnSL">1</div></td>
                             <td width="100"  class='font-weight-900'><span id='tongTien'><?php echo $row1['giaBan']; ?> VND</td> 
                                     </tr>
                                     <tr><th colspan='3' class='text-right'>Tổng Tiền </th><th><span id='tongTien2'><?php echo $row1['giaBan']; ?></span>VND</th></tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <h3>Thông tin khách hàng</h3>
                
                <div class="form-group">
                    <label>Họ tên khách hàng</label>
                    <input type="text" id="tenKH" name="CustomerName" required class="form-control" autocomplete="off" />
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" id="SDT" name="Phone" class="form-control" autocomplete="off" />
                    <span style="color:red" id="errorphone"></span>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" id="diaChi" name="Address" class="form-control" autocomplete="off" />
                </div>
                <div class="form-group">
                    <button type="submit" id="datHang" class="btn btn-block btn-success">Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>u<span>Stora</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="">My account</a></li>
                        <li><a href="">Order history</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li><a href="">Vendor contact</a></li>
                        <li><a href="">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="">Mobile Phone</a></li>
                        <li><a href="">Home accesseries</a></li>
                        <li><a href="">LED TV</a></li>
                        <li><a href="">Computer</a></li>
                        <li><a href="">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <input type="email" placeholder="Type your email">
                        <input type="submit" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="soucreClients/js/jsS1.js"></script>
    <!-- Bootstrap JS form CDN -->
    <script src="soucreClients/js/jsS2.js"></script>
    <!-- jQuery sticky menu -->
    <script src="soucreClients/js/owl.carousel.min.js"></script>
    <script src="soucreClients/js/jquery.sticky.js"></script>
    <!-- jQuery easing -->
    <script src="soucreClients/js/jquery.easing.1.3.min.js"></script>
    <!-- Main Script -->
    <script src="soucreClients/js/main.js"></script>
    <script src="soucreClients/js/bxslider.min.js"></script>
    <script src="soucreClients/js/script.slider.js"></script>
    <script src="soucreClients/Scripts/jquery-3.4.1.min.js"></script>
    <script src="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script>
 $(document).ready(function () {
    $('#datHang').on('click',function(){
   var tenKH = $('#tenKH').val();
    var diaChi = $('#diaChi').val();
   var sdt = $('#SDT').val().trim();
   var tongTien=$('#tongTien2').text();
   var tien = tongTien.toString();
   var maSP=$('#ma1').val();
   var ktraSDT = /^[0-9]{10}$/;
   var text="Chưa có thông tin";
   var ktra=$('h2#checkdon1').text().trim();
  

    if (tenKH == "" || diaChi == "" || sdt == "") {

                            $.toast({
                                heading: 'Thông tin nhập chưa đủ',
                                text: 'Cần nhập đầy đủ thông tin',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'warning',
                                hideAfter: 3500,
                                stack: 6,

                            });

                        }
     else {
        if(ktraSDT.test(sdt)==false){
    $('#errorphone').text("SDT không đúng định dạng");
   }else{
                            if (ktra=== text) {
                                $.toast({
                                    heading: 'Đơn Chưa có sản phẩm',
                                    text: 'Vào Shop để chọn sản phẩm phù hợp',
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'warning',
                                    hideAfter: 3500,
                                    stack: 6,

                                });
                            }
                            else {
                              
                                $.ajax({
                                    url: "xuLyDatHang.php",
                                    type: "POST",
                                    data: { maSP:maSP,tenKH: tenKH, diaChi: diaChi, tienTra: tien, SDT: sdt},
                                    success: function (res) {
                                        if (res.data==1) {
                                            $.toast({
                                                heading: 'Thành Công  ',
                                                text: 'Mua Hàng ',
                                                position: 'top-right',
                                                loaderBg: '#ff6849',
                                                icon: 'success',
                                                hideAfter: 1500,
                                                stack: 1,

                                            });
                                            reset();
                                        } else {
                                            console.log(res.ass);
                                            $.toast({
                                                heading: 'Cảnh Báo',
                                                text: 'có lỗi xảy ra....',
                                                position: 'top-right',
                                                loaderBg: '#ff6849',
                                                icon: 'error',
                                                hideAfter: 3500

                                            });
                                        }

                                    }
                                })
                            }
                        }
                    }
            

                    })
 

                })
                function reset() {
            $('#tenKH').val('');
            $('#diaChi').val('');
            $('#SDT').val('');
            $('#donMua1').html('');
        }
    </script>
</body>
</html>