<?php
$conn = new mysqli('localhost','root','','webnc');
if(isset($_GET['id'])){
    $idsp = $_GET['id'];
    $sql="DELETE FROM sanpham WHERE idsp='$idsp'";
    mysqli_query($conn,$sql) or die("Xóa Sản Phẩm that bai.");
    header('location: tables.php');
}
 ?>