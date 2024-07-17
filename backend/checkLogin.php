<?php
session_start();
include '../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === 'http://localhost/project3/backend/loginAD.php') {
    $tenDN = $_POST['tenDN'];
    $matKhau = $_POST['matKhau'];
    
$sql="SELECT*FROM tkAD where tenDN='$tenDN' and matKhau='$matKhau' LIMIT 1";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
header('Content-Type: application/json');
if($row!=null){
    $_SESSION['tenDN']=$row['hoTen'];
    $_SESSION['maTK']=$row['id'];
    echo json_encode(['data' => 1,'tenDN'=>$row['hoTen']]);
exit();
 }else{
    $check=0;
    echo json_encode(['data' => $check,'ssss'=>$tenDN]);
 }

    
} 
?>