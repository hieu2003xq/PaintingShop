<?php

include '../connect.php';
$sql="SELECT *FROM products ORDER BY maSP DESC LIMIT 4 ";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)){
    $data[]=$row;
}
$sql1="SELECT *FROM products";
$query1=mysqli_query($conn,$sql1);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    
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
    

    <!-- Slider -->
    <div class="slider-area">
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
           <?php foreach ($data as $row){ ?>
            
                <li>
                    <img src="soucreClients/img/<?php echo $row['hinhAnh']; ?>" style="height:500px" />
                    <div class="caption-group">
                        <h2 class="caption title" style="color:white">
                        <?php echo $row['tenSP']; ?>
                        </h2>

                        <a class="caption button-radius" href="Shop.php"><span class="icon"></span>Shop now</a>
                    </div>
            <?php } ?>  </li>
            

        </ul>
    </div>
    </div>
    <!-- ./Slider -->


<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Sẩn phẩm mới</h2>
                    <div class="product-carousel">
                       <?php foreach($data as $row){ ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="soucreClients/img/<?php echo $row['hinhAnh']; ?>" style="height:250px ;width:350px" />
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link btnadd"  data-id="<?php echo $row['maSP']; ?>"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="detail.php?id=<?php echo $row['maSP']; ?>" class="view-details-link btndetail"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html"><?php echo $row['tenSP']; ?></a></h2>
                            </div>
                        
<?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <?php while($row1=mysqli_fetch_assoc($query1)){ ?>
                        <a href="detail.php?id=<?php echo $row1['maSP']; ?>"><img src="soucreClients/img/<?php echo $row1['hinhAnh'] ?>" alt=""></a>
                       <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Sản Phẩm bán chạy</h2>
                    <?php foreach ($data as $row){?>
                    
                    <div class="single-wid-product">
                        <a href="detail.php?id=<?php echo $row['maSP']; ?>" class="btndetail"><img src="soucreClients/img/<?php echo $row['hinhAnh'] ?>" alt="" class="product-thumb"></a>
                        <h2><a href="detail.php?id=<?php echo $row['maSP']; ?>" class="btndetail"><?php echo $row['tenSP'] ?></a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                       
                        <div class="product-wid-price">
                            <ins><?php echo $row['giaBan'] ?> VNĐ</ins>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Vừa xem</h2>
                    <div id="xemGanDay1">

                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Sản phẩm mới nhất</h2>
                    <?php foreach ($data as $row){?>
                    
                        <div class="single-wid-product">
                            <a href="#" class="btndetail" data-id="@item.maSP"><img src="soucreClients/img/<?php echo $row['hinhAnh'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="#" class="btndetail" data-id="@item.maSP"><?php echo $row['tenSP'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                           
                            <div class="product-wid-price">
                                <ins><?php echo $row['giaBan'] ?> VNĐ</ins>
                            </div>
                        </div>
                        <?php } ?>
                    
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


})

    </script>
</body>
</html>
