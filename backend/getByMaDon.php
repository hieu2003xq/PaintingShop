<?php
include '../connect.php';
include 'checkLogin.php';
if($_SESSION['tenDN']==null){
    header("Location: loginAD.php");
exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$maDon=$_POST['maDon'];
$sql = "SELECT STT,donDat.maDon,maSP,tenSP,soLuong,giaBan,tinhTrangGH,thanhTien,hinhAnh,ngayDat FROM chiTietDon INNER JOIN donDat ON chiTietDon.maDon=donDat.maDon WHERE donDat.maDon='$maDon'";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)){
    $data[]=$row;
}
header('Content-Type: application/json');
if(!empty($data)){
echo json_encode(['data' => $data,'check'=>1]);
}else{
    echo json_encode(['data' => $data,'check'=>0]);
}

}
?>