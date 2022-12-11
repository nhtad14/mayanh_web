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
    <link rel="stylesheet" type="text/css" href="./css/demosp.css">
    <title>Lifestyle Store</title>
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