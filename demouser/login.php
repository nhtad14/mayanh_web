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
    <title>Lifestyle Store</title>
    <style>
    body {
        margin: 0px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
    }

    #noidung {
        width: auto;
        height: 761px;
        background-color: white;
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
        margin-left: 40%;
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
                    <button type="submitdk" class="signupbtn"><a href="dangki.php">Đăng kí</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php include'footer.php' ?>