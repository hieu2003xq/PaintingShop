<?php

session_start();
include 'connect.php';
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function addToCart($maSP, $tenSP, $hinhAnh, $giaBan,$soLuong) {
    if (isset($_SESSION['cart'][$maSP])) {
        $_SESSION['cart'][$maSP]['soLuong'] += $soLuong;
    } else {
        $_SESSION['cart'][$maSP] = [
            'tenSP' => $tenSP,
            'soLuong' => 1,
            'giaBan' => $giaBan,
            'hinhAnh'=>$hinhAnh
        ];
    }
}

function updateCart($maSP, $soLuong) {
    if (isset($_SESSION['cart'][$maSP])) {
        $_SESSION['cart'][$maSP]['soLuong'] = $soLuong;
    }
}

function removeFromCart($maSP) {
    if (isset($_SESSION['cart'][$maSP])) {
        unset($_SESSION['cart'][$maSP]);
    }
}

$action = isset($_POST['action']) ? $_POST['action'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    switch($action) {
        case 'add':
            $maSP=isset($_POST['maSP']) ? $_POST['maSP'] : '';
    $sql1="SELECT *FROM products WHERE maSP='$maSP' LIMIT 1";
    $query1=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($query1);
    if($query1!=NULL){
        //$maSP, $tenSP, $hinhAnh, $giaBan,$soLuong
        //echo $maSP,$query1['tenSP'],$query1['hinhAnh'],$query1['giaBan'],1;
        addToCart($maSP,$row['tenSP'],$row['hinhAnh'],$row['giaBan'],1);
        header('Content-Type: application/json');
  
        $data=1;
        echo json_encode(['data'=>$data]);
        
    }
    break;
    case 'delete':
        $maSP1=isset($_POST['maSP1']) ? $_POST['maSP1'] : '';
        removeFromCart((int)$maSP1);
        header('Content-Type: application/json');
  
        $data=1;
        echo json_encode(['data'=>$data]);
        break;
        case 'update':
            $maSP2=isset($_POST['maSP2']) ? $_POST['maSP2'] : '';
            $soLuong=isset($_POST['soLuong']) ? $_POST['soLuong'] : '';
            if($soLuong>0){
            updateCart((int)$maSP2,(int)$soLuong);
            }else{
                removeFromCart((int)$maSP2);
            }
        header('Content-Type: application/json');
  
        $data=1;
        echo json_encode(['data'=>$data]);
        break;

    }
}
?>