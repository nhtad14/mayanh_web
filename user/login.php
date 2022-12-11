<?php include'header.php' ;
if(isset($_POST['submit'])){
    $u=$_POST['tk'];
    $psw=$_POST['psw'];
    $conn = new mysqli('localhost','root','','webnc');
    $sql = "select * from khachhang where tk= '$u' and password= '$psw'";
    $result=mysqli_query($conn,$sql) or die("Thêm du lieu that bai.");
    $row = mysqli_num_rows($result);
      if ($row==1)
      {
          header("location:index.php");
      }
      else{
        echo  "Tài khoản hoặc mật khẩu chưa chính xác!!!";
      }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Lifestyle Store</title>
    <style>

    </style>
</head>

<body>
    <div id="noidung">
        <form method="POST">
            <div class="container">
                <center>
                    <h1>Form Đăng Nhập</h1>
                    <p>Xin hãy nhập biểu mẫu bên dưới để đăng nhập.</p>
                </center>
                <hr>
                <label for="email"><b>Tài khoản</b></label>
                <input type="text" placeholder="Nhập tài khoản" name="tk" required>
                <label for="psw"><b>Mật Khẩu</b></label>
                <input type="password" placeholder="Nhập Mật Khẩu" name="psw" required>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
                </label>
                <div class="clearfix">
                    <button type="submit" name="submit" class="signupbtn">Đăng Nhập</button>
                </div>
                <div class="clearfix">
                    <button type="submitdk" class="signupbtn"><a href="dangki.php">Đăng kí</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php include'footer.php' ?>