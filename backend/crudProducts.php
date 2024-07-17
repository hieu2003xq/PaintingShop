<?php
include '../connect.php';
include 'checkLogin.php';
if($_SESSION['tenDN']==null){
    header("Location: loginAD.php");
exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$action=$_POST['action'];
if($action=='edit'){
    $check=0;
    $maSP=$_POST['maSP'];
    $tenSP=$_POST['tenSP'];
    $giaBan=$_POST['giaBan'];
    $hinhAnh=$_POST['hinhAnh'];
    if($maSP<0){
        $sql="INSERT INTO products(maSP,tenSP,giaBan,hinhAnh) values('','$tenSP','$giaBan','$hinhAnh')";
        $query=mysqli_query($conn,$sql);
        if($query){
   $check=1;
        }
    }else{
       $sql1="UPDATE products SET tenSP='$tenSP',giaBan='$giaBan',hinhAnh='$hinhAnh' where maSP='$maSP' ";
       $query1=mysqli_query($conn,$sql1);
       if($query1){
        $check=1;
       }else{
        echo 'loiii';
       }
    }
   
}else if($action=='delete'){
    $maSP1=$_POST['maSP'];
    $sql2="DELETE FROM products where maSP='$maSP1' ";
       $query2=mysqli_query($conn,$sql2);
       if($query2){
        $check=1;
       }
}

header('Content-Type: application/json');
echo json_encode(['data' => $check]);
}
?>