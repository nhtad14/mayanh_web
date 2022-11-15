<?php 
include'header.php';
  $idsp = $_GET['idsp'];
  $conn = new mysqli('localhost','root','','webnc');
  $sql = "SELECT * FROM sanpham where idsp='$idsp'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
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

    #ctietsp {
        width: auto;
        height: 100%;
        background-color: white;
    }

    html,
    body {
        height: 100%;
        width: 100%;
        margin: 0;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px;
        display: flex;
    }

    /* Columns */
    .left-column {
        width: 65%;
        position: relative;
    }

    .right-column {
        width: 35%;
        margin-top: 60px;
    }

    /* Left Column */
    .left-column img {
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .left-column img.active {
        opacity: 1;
    }

    /* Product Description */
    .product-description {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .product-description span {
        font-size: 12px;
        color: #358ED7;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .product-description h1 {
        font-weight: 300;
        font-size: 35px;
        color: #43484D;
        letter-spacing: -2px;
    }

    .product-description p {
        font-size: 16px;
        font-weight: 300;
        color: #86939E;
        line-height: 24px;
    }

    /* Product Color */
    .product-color {
        margin-bottom: 30px;
    }

    .color-choose div {
        display: inline-block;
    }

    .color-choose input[type="radio"] {
        display: none;
    }

    .color-choose input[type="radio"]+label span {
        display: inline-block;
        width: 40px;
        height: 40px;
        margin: -1px 4px 0 0;
        vertical-align: middle;
        cursor: pointer;
        border-radius: 50%;
    }

    .color-choose input[type="radio"]+label span {
        border: 2px solid #FFFFFF;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
    }

    .color-choose input[type="radio"]#red+label span {
        background-color: #C91524;
    }

    .color-choose input[type="radio"]#blue+label span {
        background-color: #314780;
    }

    .color-choose input[type="radio"]#black+label span {
        background-color: #323232;
    }

    .color-choose input[type="radio"]:checked+label span {
        background-image: url(images/check-icn.svg);
        background-repeat: no-repeat;
        background-position: center;
    }

    /* Cable Configuration */
    .cable-choose {
        margin-bottom: 20px;
    }

    .cable-choose button {
        border: 2px solid #E1E8EE;
        border-radius: 6px;
        padding: 13px 20px;
        font-size: 14px;
        color: #5E6977;
        background-color: #fff;
        cursor: pointer;
        transition: all .5s;
    }

    .cable-choose button:hover,
    .cable-choose button:active,
    .cable-choose button:focus {
        border: 2px solid #86939E;
        outline: none;
    }

    .cable-config {
        border-bottom: 1px solid #E1E8EE;
        margin-bottom: 20px;
    }

    .cable-config a {
        color: #358ED7;
        text-decoration: none;
        font-size: 12px;
        position: relative;
        margin: 10px 0;
        display: inline-block;
    }

    .cable-config a:before {
        content: "?";
        height: 15px;
        width: 15px;
        border-radius: 50%;
        border: 2px solid rgba(53, 142, 215, 0.5);
        display: inline-block;
        text-align: center;
        line-height: 16px;
        opacity: 0.5;
        margin-right: 5px;
    }

    /* Product Price */
    .product-price {
        display: flex;
        align-items: center;
    }

    .product-price span {
        font-size: 26px;
        font-weight: 300;
        color: #43474D;
        margin-right: 20px;
    }

    .cart-btn {
        display: inline-block;
        background-color: #7DC855;
        border-radius: 6px;
        font-size: 16px;
        color: #FFFFFF;
        text-decoration: none;
        padding: 12px 30px;
        transition: all .5s;
    }

    .cart-btn:hover {
        background-color: #64af3d;
    }

    /* Responsive */
    @media (max-width: 940px) {
        .container {
            flex-direction: column;
            margin-top: 60px;
        }

        .left-column,
        .right-column {
            width: 100%;
        }

        .left-column img {
            width: 300px;
            right: 0;
            top: -65px;
            left: initial;
        }
    }

    @media (max-width: 535px) {
        .left-column img {
            width: 220px;
            top: -85px;
        }
    }

    .snip1582 {
        background-color: #c47135;
        border: none;
        color: #ffffff;
        cursor: pointer;
        display: inline-block;
        font-family: 'BenchNine', Arial, sans-serif;
        font-size: 1em;
        font-size: 22px;
        line-height: 1em;

        outline: none;
        padding: 6px 12px 6px 12px;
        position: relative;
        text-transform: uppercase;
        font-weight: 700;
    }

    .snip1582:before,
    .snip1582:after {
        border-color: transparent;
        -webkit-transition: all 0.25s;
        transition: all 0.25s;
        border-style: solid;
        border-width: 0;
        content: "";
        height: 24px;
        position: absolute;
        width: 24px;
    }

    .snip1582:before {
        border-color: #c47135;
        border-top-width: 2px;
        left: 0px;
        top: -5px;
    }

    .snip1582:after {
        border-bottom-width: 2px;
        border-color: #c47135;
        bottom: -5px;
        right: 0px;
    }

    .snip1582:hover,
    .snip1582.hover {
        background-color: #c47135;
    }

    .snip1582:hover:before,
    .snip1582.hover:before,
    .snip1582:hover:after,
    .snip1582.hover:after {
        height: 100%;
        width: 100%;
    }
    </style>
</head>

<body>
    </div>
    <div id="ctietsp">
        <main class="container">
            <!-- Left Column / Headphones Image -->
            <div class="left-column">
                <img style="width: 650px;height: 600px;" ;data-image="red" class="active"
                    src="img/<?php echo $row['image'];?>">
            </div>
            <!-- Right Column -->
            <div class="right-column">
                <!-- Product Description -->
                <div class="product-description">
                    <span>Camera</span>
                    <h1><?php echo $row['tensp']; ?></h1>
                    <p><?php echo $row['information']; ?></p>
                </div>
                <!-- Product Configuration -->
                <div class="product-configuration">

                    <!-- Product Color -->
                    <div class="product-color">
                    </div>
                    <!-- Cable Configuration -->
                    <div class="cable-config">
                        <label style="font-size: 30px;color:crimson;">Giá
                            bán:<span><?php echo number_format($row['price'])?>(VND)</span></label>
                    </div>
                </div>
                <!-- Product Pricing -->
                <div class="product-price">
                    <a href="democart.php?&idsp=<?php echo $row['idsp'];?>"><button class="snip1582">Mua
                            ngay</button></a>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
<?php
include'footer.php'
?>