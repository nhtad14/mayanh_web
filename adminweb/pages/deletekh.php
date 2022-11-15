<?php
$conn = new mysqli('localhost','root','','webnc');
if(isset($_GET['id'])){
    $idkh = $_GET['id'];
    $sql="DELETE FROM khachhang WHERE idkh='$idkh'";
    mysqli_query($conn,$sql) or die("Xóa khách hàng that bai.");
    header('location: tablekh.php');
}
 ?>