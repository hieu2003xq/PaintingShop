
<?php
include '../connect.php';
$id=$_GET['id'];
if($id>0){
    $sql="SELECT*FROM products WHERE maSP='$id' LIMIT 1";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($query);
    $sql1="SELECT *FROM products ORDER BY maSP DESC LIMIT 4 ";
  $query1=mysqli_query($conn,$sql1);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chi Tiết</title>
    
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
                    <h2>Chi tiết sản phẩm</h2>
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
                        <div class="single-sidebar" id="load_payment" style="display:none;">

                        </div>
                        <input type="submit" id="gui1" value="Tìm">
                    </form>

                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Sản phẩm Mới</h2>
                    <div id="sP1">
                    <?php while($row1=mysqli_fetch_assoc($query1)){ ?>
                        <div class="thubmnail-recent">
                            <img src="soucreClients/img/<?php echo $row1['hinhAnh'] ?>" class="recent-thumb" alt="">
                            <h2><a href="detail.php?id=<?php echo $row1['maSP']; ?>" class="btndetail1"> <?php echo $row1['tenSP'] ?></a></h2>
                             <div class="product-sidebar-price">
                            <ins><?php echo $row1['giaBan'] ?> VND</ins>
                            </div>
                            </div>
                            <?php } ?>
                    </div>


                </div>
            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="Home.php">Home</a>
                        <a href="">Tên Sản Phẩm</a>
                        <a href=""><?php echo $row['tenSP']; ?></a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="soucreClients/img/<?php echo $row['hinhAnh']; ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name"><?php echo $row['tenSP']; ?></h2>
                                <div class="product-inner-price">
                                    <ins><?php echo $row['giaBan']; ?> VND</ins>
                                   
                                </div>
                                <div class="gap-items">
                                    <button class="btn btn-success" id="datHang1" data-id="<?php echo $row['maSP']; ?>"><i class="mdi mdi-shopping"></i> Buy Now!</button>
                                    <button class="btn btn-primary btnadd" id="add" data-id="<?php echo $row['maSP']; ?>"><i class="mdi mdi-cart-plus"></i> Add To Cart</button>

                                </div>
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
    <script src="../assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script>
$(document).ready(function(){
$(".btnadd").on('click',function(e){
    e.preventDefault();
    var maSP1=$(this).data('id');
    $.ajax({
        url: "../crudCart.php",
        type:"POST",
        data:{
            action:'add',
            maSP:maSP1
        },
        dataType:'json',
        success: function(res){
            if(res.data==1){
                $.toast({
                                heading: 'Thành Công  ',
                                text: ' Thêm vào giỏ hàng  ',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 1500,
                                stack: 6,
                                
                            });
            }else{
                alert('saiii');
            }
        }
    });
})
$('#datHang1').on('click',function(e){
    e.preventDefault();
    var maSP1=$(this).data('id');
    window.location.href="checkOutOfDetail.php?id="+maSP1;
})


})

    </script>
</body>
</html>