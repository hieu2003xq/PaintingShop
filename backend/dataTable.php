<?php
include '../connect.php';

$limit = isset($_GET['length']) ? intval($_GET['length']) : 10;
$offset = isset($_GET['start']) ? intval($_GET['start']) : 0;
$searchValue = isset($_GET['search']['value']) ? $_GET['search']['value'] : '';
$draw = isset($_GET['draw']) ? intval($_GET['draw']) : 1;
//$orderColumnIndex = $_GET['order'][0]['column'];
//$orderColumnDir = $_GET['order'][0]['dir'];

// Tên các cột trong bảng
$columns = array('maSP','tenSP', 'giaBan', 'hinhAnh');

// Tạo câu truy vấn SQL cho việc tìm kiếm và sắp xếp
$sql = "SELECT *FROM products WHERE 1=1";

if (!empty($searchValue)) {
    $sql .= " AND (name LIKE '%" . $searchValue . "%' OR description LIKE '%" . $searchValue . "%')";
}

$sql .= " LIMIT " . $limit . " OFFSET " . $offset;

// Thực thi truy vấn SQL
$result = $conn->query($sql);

// Tạo mảng dữ liệu
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Đếm tổng số hàng trong bảng products (không có điều kiện tìm kiếm)
$totalQuery = "SELECT COUNT(*) as count FROM products";
$totalResult = $conn->query($totalQuery);
$totalRow = $totalResult->fetch_assoc();
$totalRecords = $totalRow['count'];

// Đếm tổng số hàng sau khi áp dụng điều kiện tìm kiếm
$filterQuery = "SELECT COUNT(*) as count FROM products WHERE 1=1";
if (!empty($searchValue)) {
    $filterQuery .= " AND (name LIKE '%" . $searchValue . "%' OR description LIKE '%" . $searchValue . "%')";
}
$filterResult = $conn->query($filterQuery);
$filterRow = $filterResult->fetch_assoc();
$filteredRecords = $filterRow['count'];

// Trả về dữ liệu ở định dạng JSON
$response = array(
    "draw" => $draw,
    "recordsTotal" => intval($totalRecords),
    "recordsFiltered" => intval($filteredRecords),
    "data" => $data
);

echo json_encode($response);
?>