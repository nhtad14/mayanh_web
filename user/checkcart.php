<?php 
include'header.php'?>
<?php 
session_start();
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[];  
if(isset($_POST['smb'])) {
  //var_dump($_POST);
  $tenkh=$_POST['tenkh'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $dc=$_POST['dc'];
  $note=$_POST['note'];
  $conn = new mysqli('localhost','root','','webnc');
  $sql = "INSERT INTO dathang (`id`, `tenkh`, `phone`, `email`, `dc`, `note`) VALUES (NULL, '$tenkh', '$phone', '$email', '$dc', '$note' )";
  $result =mysqli_query($conn,$sql) or die("Thêm du lieu that ba.");
  if($result){
    $id = mysqli_insert_id($conn);
   foreach($cart as  $row){
     $sql = "INSERT INTO order_id(`id`, `tensp`, `image`,`sl`) VALUES ('$id','$row[tensp]','$row[image]','$row[soluong]')";
     $result =mysqli_query($conn,$sql) or die("Thêm du lieu that b.");
    }
    unset($_SESSION['cart']); 
    header('location:itemsid.php');
  }
}                                
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/checkcart.css">
    <title>Lifestyle Store</title>
</head>

<body>
    <div id="noidung">
        <div class="bang">
            <br>
            <h1>Chi tiết đơn hàng </h1>
            <p>Thông tin sản phẩm trong đơn hàng </p>
            <hr>
            <table style="width:800px;padding-right:150px ;">
                <tr>
                    <th><label for="email"><b>ID</b></label></th>
                    <th><label for="email"><b>Tên Sản Phẩm</b></label></th>
                    <th><label for="email"><b>Ảnh Sản Phẩm</b></label></th>
                    <th><label for="email"><b>Số lượng</b></label></th>
                </tr>
                <tbody>
                    <?php $tong=0;?>
                    <?php foreach( $cart as $key =>  $row): 
      $tong += $row['price'] * $row['soluong'];
        ?>
                    <tr>
                        <td><?php  echo $key ?></td>
                        <td><?php echo $row['tensp'] ?></td>
                        <td><img style="width: 100px;" src="img/<?php echo $row['image'];?>"></td>
                        <td>
                            <?php echo $row['soluong'] ?>
                        </td>
                        <?php endforeach ?>
                    </tr>
                    <tr>
                        <td><label for="email"><b>Tổng tiền</b></label></td>
                        <td colspan="6" class="text-center bg-info"> <b
                                style="color: #f44336;"><?php echo number_format($tong)?>(VND)</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="thongtin">
            <form method="POST">
                <div class="container">
                    <h1>Thông tin khách hàng </h1>
                    <p>Xin hãy nhập biểu mẫu bên dưới để đặt hàng.</p>
                    <hr>
                    <label for="email"><b>Tên khách hàng</b></label>
                    <input type="text" placeholder="Nhập tên" name="tenkh" required>

                    <label for="email"><b>Nhập số điện thoại </b></label>
                    <input type="text" placeholder="nhập số điện thoại" name="phone" required>

                    <label for="email"><b>Nhập email</b></label>
                    <input type="text" placeholder="Nhập email" name="email" required>

                    <label for="email"><b>Nhập địa chỉ </b></label>
                    <input type="text" placeholder=" Nhập địa chỉ" name="dc" required>

                    <label for="psw-repeat"><b>Ghi chú </b></label>
                    <textarea style="width: 100%;height: 100px;" type="text" name="note" class="form-control"
                        rows="3"></textarea>

                    <div class="clearfix">
                        <button type="submit" name="smb" class="signupbtn">Thanh Toán</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>