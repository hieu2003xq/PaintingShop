<?php 
include '../connect.php';
$limit = 5; // Số sản phẩm mỗi trang
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
$sql = "SELECT * FROM products LIMIT $start, $limit";
$result = $conn->query($sql);

// Đếm tổng số sản phẩm
$sql_count = "SELECT COUNT(*) AS total FROM products";
$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();
$total_products = $row_count['total'];
$total_pages = ceil($total_products / $limit);
?>
     <!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    
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
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php while($row=mysqli_fetch_assoc($result)){ ?>

                <div class="col-md-3 col-sm-6">
                    <div class="single-product">
                        <div class="product-f-image">
                            <img src="soucreClients/img/<?php echo $row['hinhAnh']; ?>" style="height:250px ;width:350px" />
                            <div class="product-hover">
                                <a href="#" class="add-to-cart-link btnadd" data-id="<?php echo $row['maSP']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                <a href="detail.php?id=<?php echo $row['maSP']; ?>" class="view-details-link btndetail"><i class="fa fa-link"></i></a>
                            </div>
                        </div>

                        <h2><a href="single-product.html"><?php echo $row['tenSP']; ?></a></h2>
                       
                        <div class="product-carousel-price">
                            <ins><?php echo $row['giaBan']; ?> VND</ins>
                        </div>
                    </div>
                </div>
            <?php  } ?>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">
                        
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <li><a href="Shop.php?page=<?php echo $i; ?>" class="<?php if ($i == $page) echo 'active'; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?>
   
                        </ul>
                    </nav>
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
                    
