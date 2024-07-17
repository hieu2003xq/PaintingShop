<?php
include '../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ho=$_POST['ho'];
    $ten=$_POST['ten'];
    $tenDN = $_POST['tenDN'];
    $matKhau = $_POST['matKhau'];
$sql="SELECT*FROM tkAD where tenDN='$tenDN' LIMIT 1";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
header('Content-Type: application/json');
if($row!=null){
    echo json_encode(['data' => 0]);
    exit();
 }else{
    $hoChuyen=strtoupper($ho);
    $tenChuyen=strtoupper($ten);
    $hoTen=$hoChuyen . "" . $tenChuyen;
    $sql1="INSERT INTO tkAD(id,hoTen,tenDN,matKhau) values('','$hoTen','$tenDN','$matKhau')";
    $query1=mysqli_query($conn,$sql1);
    echo json_encode(['data' => 1]);
 }

    
} 
?>