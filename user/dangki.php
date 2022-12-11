<?php include'header.php'?>
<?php 
if(isset($_POST['smb'])) {
  //var_dump($_POST);
  $tenkh=$_POST['tenkh'];
  $tk=$_POST['tk'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $conn = new mysqli('localhost','root','','webnc');
  $sql = "INSERT INTO `khachhang`(`idkh`, `tenkh`, `tk`, `password`, `phone`, `address`) VALUES (Null,'$tenkh','$tk','$password','$phone','$address')";
  $result =mysqli_query($conn,$sql) or die("Thêm du lieu that bai.");
  
  if($result){
    echo '<script>alert("Đăng kí tài khoản thành công")</script>';
   //header('location:login.php');
  }
  else{
    echo '<script>alert("Đăng kí thất bại")</script>';
  }
}                                
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="./css/dangki.css">
    <title>Lifestyle Store</title>
</head>

<body>
    <div class="thongtin">
        <form method="POST">
            <div class="container">
                <h1>Đăng kí tài khoản khách hàng </h1>
                <p>Xin hãy nhập biểu mẫu bên dưới để đăng kí tài khoản.</p>
                <hr>
                <label for="email"><b>Tên khách hàng</b></label>
                <input type="text" placeholder="Nhập tên của khách hàng" name="tenkh" required>
                <label for="email"><b>Tên tài khoản </b></label>
                <input type="text" placeholder="Nhập tên tài khoản" name="tk" required>

                <label for="email"><b> Password</b></label>
                <input type="text" placeholder="Nhập Password" name="password" required>

                <label for="email"><b>Phone </b></label>
                <input type="text" placeholder=" Nhập phone" name="phone" required>

                <label for="email"><b>Địa Chỉ </b></label>
                <input type="text" placeholder=" Nhập địa chỉ khách hàng " name="address" required>

                <div class="clearfix">
                    <button type="submit" name="smb" class="signupbtn">Đăng kí tài khoản</button>
                </div>
            </div>
        </form>
    </div>

</html>