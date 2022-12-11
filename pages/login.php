<?php
if(isset($_POST['submit'])){
  $u=$_POST['tk'];
  $psw=$_POST['psw'];
  $conn = new mysqli('localhost','root','','webnc');
  $sql = "select * from admin where username= '$u' and password= '$psw'";
  $result=mysqli_query($conn,$sql) or die("Thêm du lieu that bai.");
  $row = mysqli_num_rows($result);
    if ($row==1)
    {

        header("location:index.php");
       
    }
    else{
    echo  "Tài khoản hoặc mật khẩu chưa chính xác!!!";  
      //header("location:login.php");
      
    }
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <style>
    #noidung {
        width: auto;
        height: 550px;
        background-color: white;
        margin-top: 100px;
    }

    .container {
        border: 2px solid black;
        padding: 10px;
        border-radius: 25px;
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

    form {
        width: 400px;
        margin-left: 700px;
    }

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

    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    .signupbtn {
        float: left;
        width: 100%;
        border-radius: 15px;
        border: 0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 16px;

    }

    .clearfix {
        width: 250px;
        margin-left: 60px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    a {
        text-decoration: none;
        color: cornsilk;
    }
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
                    <button type="submitdk" class="signupbtn"><a href="newacc.php">Đăng kí</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>