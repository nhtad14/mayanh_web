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
    <title>Lifestyle Store</title>
    <style>
    body {
        margin: 0px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
    }

    #baner {
        background-color: white;
        width: 100%;
        height: 390px;
    }

    .slideshow-container {
        width: 1000px;
        height: 350px;
        background-color: #eee;
        margin-left: 150px;
    }

    * {
        box-sizing: border-box
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0
    }

    .mySlides {
        display: none
    }

    img {
        vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        padding-left: 28px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
        background-color: #717171;
    }

    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

        .prev,
        .next,
        .text {
            font-size: 11px
        }
    }

    .container {
        width: 1000px;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
    }

    .product-items {
        border: 1px solid #ccc;
        padding: 30px;
    }

    .product-item {
        float: left;
        width: 23%;
        margin: 1%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        line-height: 26px;
    }

    .product-item label {
        font-weight: bold;
    }

    .product-item p {
        margin: 0;
        line-height: 26px;
        max-height: 52px;
        overflow: hidden;
    }

    .product-price {
        color: red;
        font-weight: bold;
    }

    .product-img {
        padding: 5px;
        border: 1px solid #ccc;
        margin-bottom: 5px;
    }

    .product-item img {
        max-width: 100%;
    }

    .product-item ul {
        margin: 0;
        padding: 0;
        border-right: 1px solid #ccc;
    }

    .product-item ul li {
        float: left;
        width: 33.3333%;
        list-style: none;
        text-align: center;
        border: 1px solid #ccc;
        border-right: 0;
        box-sizing: border-box;
    }

    .clear-both {
        clear: both;
    }

    a {
        text-decoration: none;
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

    #pagination {
        text-align: right;
        margin-top: 15px;
    }

    .page-item {
        border: 1px solid #ccc;
        padding: 5px 9px;
        color: #000;
    }

    .current-page {
        background: #000;
        color: #FFF;
    }

    .wrapper {
        margin: 150px auto;
        text-align: center;
        width: 100%;
        position: relative;
    }

    .btn3 {
        color: #fff;
        font-family: sans-serif;
        text-transform: uppercase;
        text-align: center;
        position: relative;
        text-decoration: none;
        display: inline-block;

    }

    .btn::before {
        content: '';
        position: absolute;
        bottom: 50%;
        left: 0px;
        width: 100%;
        height: 1px;
        background: #6098FF;
        display: block;
        -webkit-transform-origin: left top;
        -ms-transform-origin: left top;
        transform-origin: left top;
        -webkit-transform: scale(0, 1);
        -ms-transform: scale(0, 1);
        transform: scale(0, 1);
        -webkit-transition: transform 0.4s cubic-bezier(1, 0, 0, 1);
        transition: transform 0.4s cubic-bezier(1, 0, 0, 1)
    }

    .btn:hover::before {
        -webkit-transform-origin: right top;
        -ms-transform-origin: right top;
        transform-origin: right top;
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        transform: scale(1, 1)
    }

    .btn3::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-color: #000;
        -webkit-transform: scaleX(.3);
        transform: scaleX(.3);
        opacity: 0;
        transition: all .3s
    }

    .btn3:hover::before {
        opacity: 1;
        background-color: #6098FF;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        transition: -webkit-transform .6s cubic-bezier(.08, .35, .13, 1.02), opacity .4s;
        transition: transform .6s cubic-bezier(.08, .35, .13, 1.02), opacity
    }
    </style>
</head>

<body>
    <div id="baner">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/99fd8951d8ac406994f2ccb5989826df_banner+web+canon+2.jpg" style="width:100%">
                <div class="text">Camon</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/banner_x_t100-2.jpg" style="width:100%">
                <div class="text">XT100</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/tuan-le-canon-may-anh-lotte-banner.jpg" style="width:100%">
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