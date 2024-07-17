<?php
include '../connect.php';
include '../crudCart.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenKH = isset($_POST['tenKH']) ? $_POST['tenKH'] : '';
    $diaChi = isset($_POST['diaChi']) ? $_POST['diaChi'] : '';
    $tienTra = isset($_POST['tienTra']) ? $_POST['tienTra'] : '';
    $SDT = isset($_POST['SDT']) ? $_POST['SDT'] : '';

    $sql = "INSERT INTO khachHang(maKH, tenKH, SDT, diaChi) VALUES ('', '$tenKH', '$SDT', '$diaChi')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $sql1 = "SELECT maKH FROM khachHang ORDER BY maKH DESC LIMIT 1";
        $query1 = mysqli_query($conn, $sql1);
        if ($query1) {
            $row = mysqli_fetch_assoc($query1);
            $maKH = $row['maKH'];
            $ngayDat = new DateTime();
            $ngayDatFormatted = $ngayDat->format('Y-m-d H:i:s');

            $sql2 = "INSERT INTO donDat(maDon, maKH, ngayDat, tongTien) VALUES ('', '$maKH', '$ngayDatFormatted', '$tienTra')";
            $query2 = mysqli_query($conn, $sql2);

            if ($query2) {
                $sql3 = "SELECT maDon FROM donDat ORDER BY maDon DESC LIMIT 1";
                $query3 = mysqli_query($conn, $sql3);
                if ($query3) {
                    $row1 = mysqli_fetch_assoc($query3);
                    $maDon = (int)$row1['maDon'];
                    $allQueriesSuccessful = true;

                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        foreach ($_SESSION['cart'] as $maSP => $item) {
                            $thanhTien = (int)$item['giaBan'] * (int)$item['soLuong'];
                            $sql4 = "INSERT INTO chiTietDon(STT, maDon, maSP, tenSP, soLuong, giaBan, hinhAnh, thanhTien, tinhTrangGH) VALUES ('', '$maDon', '$maSP', '{$item['tenSP']}', '{$item['soLuong']}', '{$item['giaBan']}', '{$item['hinhAnh']}', '$thanhTien', 'Đang giao')";
                            $query4 = mysqli_query($conn, $sql4);
                            if (!$query4) {
                                $allQueriesSuccessful = false;
                                break;
                            } else {
                                removeFromCart($maSP);
                            }
                        }
                    }

                    $maSP1 = isset($_POST['maSP']) ? $_POST['maSP'] : '';
                    if ($maSP1 > 0) {
                        $sql5 = "SELECT * FROM products WHERE maSP='$maSP1' LIMIT 1";
                        $query5 = mysqli_query($conn, $sql5);
                        if ($query5) {
                            $row2 = mysqli_fetch_assoc($query5);
                            if ($row2 != null) {
                                $ma = (int)$maSP1;
                                $sql6 = "SELECT * FROM products WHERE maSP='$ma' LIMIT 1";
                                $query6 = mysqli_query($conn, $sql6);
                                if ($query6) {
                                    $row2 = mysqli_fetch_assoc($query6);
                                    if ($row2 != null) {
                                        $sql7 = "INSERT INTO chiTietDon(STT, maDon, maSP, tenSP, soLuong, giaBan, hinhAnh, thanhTien, tinhTrangGH) VALUES ('', '$maDon', '$ma', '{$row2['tenSP']}', '1', '{$row2['giaBan']}', '{$row2['hinhAnh']}', '{$row2['giaBan']}', 'Đang giao')";
                                        $query7 = mysqli_query($conn, $sql7);
                                        if (!$query7) {
                                            $allQueriesSuccessful = false;
                                        }
                                    }
                                }
                            }
                        }
                    }

                    header('Content-Type: application/json');
                    if ($allQueriesSuccessful) {
                        echo json_encode(['data' => 1]);
                    } else {
                        echo json_encode(['data' => 0]);
                    }
                    exit;
                }
            }
        }
    }

    // Nếu bất kỳ truy vấn nào không thành công
    header('Content-Type: application/json');
    echo json_encode(['data' => 0, 'error' => mysqli_error($conn)]);
    exit;
}
?>