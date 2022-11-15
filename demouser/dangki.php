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
   header('location:login.php');
  }
  else{
    echo"Đăng kí thất bại ";
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
    <title>Lifestyle Store</title>
    <style>
    .thongtin {
        width: 600px;
        float: left;
        margin-left: 350px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');

    * {
        box-sizing: border-box
    }

    body {
        font-family: 'Noto Sans JP', sans-serif;
    }

    h1,
    label {
        color: DodgerBlue;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        width: 100%;
        resize: vertical;
        padding: 15px;
        border-radius: 15px;
        border: 0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    }

    input[type=text]:focus,
    input[type=password]:focus {
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .signupbtn {
        float: left;
        width: 100%;
        border-radius: 15px;
        border: 0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    </style>
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