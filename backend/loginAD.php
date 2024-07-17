
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 01:43:44 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>QL Tranh - Đăng nhập </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	
    <style>
        body {
            background-image: url('images/auth-bg/bg-1.jpg');
            background-size: cover; /* Để ảnh phủ toàn bộ màn hình */
            background-repeat: no-repeat; /* Không lặp lại ảnh */
        }
    </style>
</head>
	
<body class="hold-transition theme-primary bg-img" >
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">ADMIN</h2>
								<p class="mb-0">Đăng nhập ADMIN</p>							
							</div>
							<div class="p-40">
							<span id="loi" style="color:red"></span>
								<form id="formDN" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" id="tenDN" class="form-control pl-15 bg-transparent" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" id="matKhau" class="form-control pl-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Nhớ</label>
										  </div>
								
										</div>
										
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-right">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" id="btnDN" class="btn btn-danger mt-10">Đăng nhập</button>
										</div>
                                        
										<!-- /.col -->
									  </div>
								</form>	
								
							</div>						
						</div>
						<div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	
   
    <!-- <script src="~/Scripts/jquery-3.7.0.slim.js"></script> -->
   
    <!--<script src="~/Scripts/jquery-3.7.0.slim.min.js"></script> -->
  
    <!--<script src="~/Scripts/jquery-3.7.0.min.js"></script> -->
    <script src="Scripts/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#formDN').on('submit', function(event) {
                event.preventDefault(); // Ngăn form gửi thông thường

                var formData = {
                    tenDN: $('#tenDN').val(),
                    matKhau: $('#matKhau').val()
                };

                $.ajax({
                    url: 'checkLogin.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
						console.log(response.tenDN);
						console.log(response.data);
                        if (response.data == 0) {
                            $('#loi').text('Tài khoản mất khẩu không chính xác');
							
                        } else{
							window.location.href="HomeAD.php";
						}
                    },
                    
                });
            });
        });
    </script>
   
</body>

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Nov 2020 01:43:45 GMT -->
</html>
