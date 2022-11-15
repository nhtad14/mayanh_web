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

    #contener {
        width: 100%;
        height: 70px;
        background-color: black;

    }

    #navbar-header {
        width: 313px;
        height: 50px;
        margin-top: 20px;
        padding-left: 150px;
        float: left;
    }

    #navbar-header a {
        text-decoration: none;
        font-size: 20px;
        color: #9d9d9d;
    }

    #navbar-header a:hover {
        color: white;
    }

    #myNavbar {
        width: 550px;
        height: 50px;
        float: left;
        margin-top: 10px;
        margin-left: 450px;
    }

    li {
        list-style-type: none;

    }

    li a {
        text-decoration: none;
        color: #9d9d9d;
        float: left;
        margin-left: 30px;
        font-size: 16px;
    }

    #myNavbar a :hover {
        color: white;
    }

    #myNavbar ul li a img {
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <div id="contener">
        <div id="navbar-header">
            <a href="#" class="navbar-brand"><b>Lifestyle Store</b></a>
        </div>
        <div id="myNavbar">
            <ul>
                <li><a href="index.php"><b><img src="img/icons8-home-page-30.png" ;> Home</b></a></li>
                <li><a href="cart.php"><b><img src="img/icons8-shopping-cart-30.png" ;> Cart</b></a></li>
                <li><a href="#"><b> <img src="img/icons8-settings-30.png" ;>Settings</b></a></li>
                <li><a href="logout.php"><b> <img src="img/icons8-sign-out-30.png" ;>Logout</b></a></li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
    </div>
</body>

</html>