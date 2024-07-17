<?php

include '../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$maDon=(int)$_POST['maDon'];
$sql = "UPDATE chiTietDon SET tinhTrangGH='Đã giao' where maDon=$maDon ";
$query=mysqli_query($conn,$sql);

header('Content-Type: application/json');
if($query){
echo json_encode(['check'=>1]);
}else{
    echo json_encode(['check'=>0]);
}

}
?>
