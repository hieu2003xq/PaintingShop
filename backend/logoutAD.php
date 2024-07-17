<?php
session_start();
function removeSesion($tenDN) {
    if ($_SESSION['tenDN']==$tenDN) {
        unset($_SESSION['tenDN']);
        unset($_SESSION['maTK']);
        header("Location: loginAD.php");
    }
}
$ten = str_replace('%20', ' ', $_GET['tenDN']);
if($ten!=null){
    removeSesion($ten);
 
}
?>