<?php 
include'header.php';
session_start();
                                        $conn = new mysqli('localhost','root','','webnc');
                                        $sql = "SELECT * FROM sanpham";
                                        $result = mysqli_query($conn,$sql);
                                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Lifestyle Store</title>
    <style>

    </style>
</head>

<body>
    <div id="baner">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="./img/99fd8951d8ac406994f2ccb5989826df_banner+web+canon+2.jpg" style="width:100%">
                <div class="text">Camon</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="./img/banner_x_t100-2.jpg" style="width:100%">
                <div class="text">XT100</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="./img/tuan-le-canon-may-anh-lotte-banner.jpg" style="width:100%">
                <div class="text">Chương trình KM</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
        </script>
    </div>
    <div class="container">
        <h1>Danh Mục Sản Phẩm</h1>
        <div class="product-items">
            <?php while($row = mysqli_fetch_assoc($result)) {?>
            <div class="product-item">
                <div class="product-img">
                    <img src="img/<?php echo $row['image'];?>" />
                </div>
                <center>
                    <strong><?php echo $row['tensp']; ?></strong><br>
                    <label>Giá bán: </label><span
                        class="product-price"><?php echo number_format($row['price'])?>(VND)</span><br />
                    <a href="demosp.php?&idsp=<?php echo $row['idsp']; ?>" class="btn3">
                        Chi tiết sản phẩm >>
                    </a>
                    <br>
                    <br>
                    <a href="democart.php?&idsp=<?php echo $row['idsp'];?>"><button class="snip1582">Add to
                            cart</button></a>
                </center>
            </div>
            <?php } ?>
            <div class="clear-both"></div>
        </div>
    </div>
</body>

</html>
<?php
include'footer.php'
?>