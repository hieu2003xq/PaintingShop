<?php
$sever ='localhost';
$user = 'root';
$password='';
$database='webBH';

$conn = mysqli_connect($sever,$user,$password,$database);
if($conn)
{
    mysqli_query($conn,"SET NAMES 'utf8'");
}
else
{
    exit('Lỗi kết nối:' .mysqli_connect_error());
}
?>