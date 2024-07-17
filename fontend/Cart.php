<?php 
include '../crudCart.php';
include '../connect.php';
$sql="SELECT *FROM products ORDER BY maSP DESC LIMIT 4 ";
$query=mysqli_query($conn,$sql);

$tong=0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="soucreClients/logo.png">
    <title>Shop Online</title>

    <!-- Google Fonts -->
    <link href="soucreClients/css/fonts1.css" rel="stylesheet" />
    <link href="soucreClients/css/fonts2.css" rel="stylesheet" />
    <link href="soucreClients/css/fonts3.css" rel="stylesheet" />
    <link href="soucreClients/css/font-awesome.min.css" rel="stylesheet" />

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
                            <li><a href="checkOut.php"><i class="fa fa-user"></i> thanh toán</a></li>
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
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Tìm kiếm</h2>
                    <form action="">
                        <input type="text" id="check" placeholder="Tìm kiếm">
                        <div class="single-sidebar" id="load_payment" style="display:none;">

                        </div>
                        <input type="submit" id="gui1" value="Tìm">
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Sản phẩm mới</h2>
                   <div id="">
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
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                           
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá bán</th>
                                        <th>Số lượng</th>
                                        <th style="text-align:center">Tổng tiền</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                                    foreach($_SESSION['cart'] as $maSP => $item){ ?>
                                    <tr>
                                        <?php 
                                        
                                        $tong+=(int)$item['soLuong']*(int)$item['giaBan'] ; ?>
                             <td><img src="soucreClients/img/<?php echo $item['hinhAnh'] ?>" alt="" width="80"></td>
                             <td> <h5><?php echo $item['tenSP'] ?></h5></td>
                             <td>  <?php echo $item['giaBan'] ?> </td>
                             <td width="70"><input type='number'  class="form-control  btnsoLuong " id="sl_<?php echo $maSP ?>" value="<?php echo $item['soLuong'] ?>" min="0"></td>
                             <td width="100"  class='font-weight-900'><span id='tongTien'><?php echo (int)$item['soLuong']*(int)$item['giaBan'] ?> </td>
                             <td><a href="#" class="text-info mr-10 btnupdate" data-id="<?php echo $maSP ?>" data-toggle='tooltip' data-original-title='Edit'><i class='ti-marker-alt'></i>sửa</a><a href="#" class="text-danger btndelete" title="" data-toggle="modal" data-target="#modal_center" data-id="<?php echo $maSP ?>" data-toggle='tooltip' data-original-title='Delete'>Xóa</a></td>
                            </tr>
                                    <?php }}else{?>
                                        <tr><?php echo 'Chưa có sản phẩm nào' ?></tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </form>
                        <div>
                            <a href="Shop.php" class="btn btn-info"><i class="fa fa-arrow-left"></i> Quay lại mua hàng</a>
                            <button class="btn btn-success pull-right" id="dat1"><i class="fa fa fa-shopping-cart"></i> Đặt hàng</button>
                        </div>

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Thông Tin Đơn</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="shipping">
                                            <th>Hình thức</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th >Tổng tiền</th>
                                            <td><strong><span class="amount" id="thanhTien1"><?php echo $tong ?> VND</span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

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
<!-- /.content -->
<div class="modal center-modal fade" id="modal_center" tabindex="-1" style="display: none;" aria-hidden="true">
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
                <p>Bạn có muốn xóa khỏi giỏ hàng</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Không </button>
                <button type="button" class="btn btn-primary float-right" id="xoa1">Có</button>
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
    <script src="soucreClients/Scripts/bootstrap.js"></script>
    <script src="soucreClients/Scripts/bootstrap.min.js"></script>
    <script src="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
<script>
$(document).ready(function(){
$('body').on('click','.btndelete',function(e){
    e.preventDefault();
    var maSP=$(this).data('id');
    if(maSP>0){
       $('#ma1').val(maSP);
    }else{
        console.log('loiii');
    }
})
$('#xoa1').on('click',function(){
    $.ajax({
        url:"../crudCart.php",
        type:"POST",
        data:{action:'delete',maSP1:$('#ma1').val()},
        dataType:'json',
        success:function(res){
            if(res.data==1){
                $.toast({
                                heading: 'Thành Công  ',
                                text: ' Xóa sản phẩm khỏi giỏ hàng  ',
                                position: 'top-right',
                                loader: true,
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 1500,
                                stack: 6,
                                afterShown: function () {window.location.reload();},
                                
                            });
                            $('#modal_center').modal('hide');
                            
            }else{
                alert('loiiii');
            }
        }
    })
})
$('body').on('click','.btnupdate',function(e){
    e.preventDefault();
    var maSP=$(this).data('id');
    var soLuong=$('#sl_'+maSP).val();
    if(maSP>0){
        
        $.ajax({
        url:"../crudCart.php",
        type:"POST",
        data:{action:'update',maSP2:maSP,soLuong:soLuong},
        dataType:'json',
        success:function(res){
            if(res.data==1){
                $.toast({
                                heading: 'Thành Công  ',
                                text: ' Sửa sản phẩm   ',
                                position: 'top-right',
                                loader: true,
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 1500,
                                stack: 6,
                                afterShown: function () {window.location.reload();},
                                
                            });
                            
                            
            }else{
                alert('loiiii');
            }
        }
    })

    }else{
        console.log('loiii');
    }
})
$('#dat1').on('click',function(){
    window.location.href="checkOut.php";
})

})

</script>
</body>
</html>