<?php 
session_start();
if(isset($_GET['idsp'])){
    $idsp = $_GET['idsp'];
}
$action = (isset($_GET['action'])) ? $_GET['action'] :'add';
$soluong= (isset($_GET['soluong'])) ? $_GET['soluong'] :'1';
//var_dump($action);
    //echo $action;
    //echo "<br>";
//echo $tensp;
    //die();
//session_destroy();
//die();
//var_dump($action);
//echo $idsp;
//die();
$conn = new mysqli('localhost','root','','webnc');
                                        $sql = "SELECT * FROM sanpham where idsp='$idsp'";
                                        $query = mysqli_query($conn,$sql); 
                                        
                                        if($query){
                                            $row = mysqli_fetch_assoc($query);
                                            //$i=0; 
                                        }
                                        $item =[
                                            'idsp'=>$row['idsp'],
                                            'tensp'=>$row['tensp'],
                                            'image'=>$row['image'],
                                            'price'=>$row['price'],
                                            'soluong'=> 1
                                        ];
                                        if($action =='add'){
                                            if(isset($_SESSION['cart'][$idsp])){
                                               $_SESSION['cart'][$idsp]['soluong'] += $soluong;
                                            }
                                            else{
                                                $_SESSION['cart'][$idsp]=$item;
                                            }
                                        }
                                         if($action == 'delete'){
                                             
                                            unset($_SESSION['cart'][$idsp]); 
                                         }                                     
                                        if($action == 'update'){
                                          $_SESSION['cart'][$idsp]['soluong']= $soluong;
                                        }
                                        header('location:cart.php');
                                       echo'<pre>';
                                        print_r($_SESSION['cart']);
                                       
?>