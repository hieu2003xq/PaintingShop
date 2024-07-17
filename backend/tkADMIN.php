<?php
include '../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$action=$_POST['action'];
if($action=='doiMK'){
$maTK=$_POST['maTK'];
$oldPass=$_POST['oldPass'];
$newPass=$_POST['newPass'];
$data=0;
$sql="SELECT *FROM tkAD where id='$maTK' and matKhau='$oldPass'";
$query=mysqli_query($conn,$sql);
if($query){
    $sql1="UPDATE tkAD SET matKhau='$newPass' where id='$maTK' ";
    $query1=mysqli_query($conn,$sql1);
    if($query1){
        $data=1;
    }
}
header('Content-Type: application/json');
echo json_encode(['data' => $data]);
}
else if($action=='thongTinTK'){
    $maTK=$_POST['maTK'];
    $sql="SELECT *FROM tkAD where id='$maTK' LIMIT 1";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($query);
    if($row!=null){
        header('Content-Type: application/json');
     echo json_encode(['check' =>1,'data'=>$row]);
    }
}
}
?>