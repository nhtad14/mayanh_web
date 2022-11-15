<?php 
include'header.php';
session_start();
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[];                                   
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
        height: 100%;
        background-color: white;
    }

    .bang {
        margin-left: 150px;
    }

    .back {
        margin-top: 50px;
        margin-left: 150px;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    #footer {
        width: 100%;
        height: 50px;
        background-color: black;
        color: white;
        text-align: center;
        padding-top: 5px;
    }

    .button {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
    }

    .button1:hover {
        background-color: #4CAF50;
        color: white;
    }

    h1 {
        color: red;
    }
    </style>
</head>

<body>
    </div>
    <div id="noidung">
        <div class="bang">
            <h2>Đơn hàng thanh toán</h2>
            <table style="width:100% ;padding-right:150px ;">
                <tr>
                    <th>ID SP</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Ảnh Sản Phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thanh tien</th>
                    <th>Remove</th>
                </tr>
                <tbody>
                    <?php $tong=0;?>
                    <?php foreach( $cart as $key =>  $row): 
      $tong += $row['price'] * $row['soluong'];
        ?>
                    <tr>
                        <td><?php  echo $key ?></td>
                        <td><?php echo $row['tensp'] ?></td>
                        <td><img style="width: 100px;" src="img/<?php echo $row['image'];?>"></td>
                        <td>
                            <form action="democart.php">
                                <input type="hidden" name="action" value='update'>
                                <input type="hidden" name="idsp" value="<?php echo $row['idsp'] ?>">
                                <input style="width: 40px;height: 25px;border-radius: 10px;" type="number"
                                    name="soluong" value="<?php echo $row['soluong'] ?>">
                                <button style="width: 80px;
    padding-top: 5px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    border-radius: 20px;
" type="submit" class="button button1"> Update </button>
                            </form>
                        </td>
                        <td><?php echo number_format($row['price'] )?> </td>
                        <td><?php echo number_format ($row['price'] * $row['soluong'])?></td>
                        <td>
                            <form action="democart.php">
                                <input type="hidden" name="action" value='delete'>
                                <input type="hidden" name="idsp" value="<?php echo $row['idsp'] ?>">
                                <center> <button style="
    padding-top: 5px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 5px;
  border-radius: 20px;
" type="submit" class="button button1"> Xoá </button></center>
                            </form>
                        </td>
                        <?php endforeach ?>
                    </tr>
                    <tr>
                        <td>
                            <h1>Tổng tiền</h1>
                        </td>
                        <td colspan="5" class="text-center bg-info">
                            <h1><?php echo number_format($tong)?>(VND)
                        </td>
                        </h1>
                        </td>
                        <td><a href="checkcart.php">
                                <center><button class="button button1"> Đặt hàng</button></center>
                            </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="back">
            <a href="index.php"><button class="button button1">Mua hàng</button></a>
        </div>
    </div>
</body>

</html>