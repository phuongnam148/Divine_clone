<?php
    session_start();
    include 'admincp/config/connection.php';
    // if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [] ;
    $price_src = 0;
    $sumPrice  =0;
    
    // if(isset($_GET['addCart'])&&($_GET['addCart'])){
    //     $tenSP = $_GET['tenSP'];
    //     $gia = $_GET['gia']; 
    //     $hinh = $_GET['hinh']; 
    //     $sp = [$hinh,$tenSP,$gia];
    //     $_SESSION['cart'][] = $sp;
      
    //     // var_dump($_SESSION['cart']);
    // }
    // session_destroy();
    if(isset($_SESSION['giohang']) && isset($_GET['xoa'])){
        $id = $_GET['xoa'];
      
        foreach($_SESSION['giohang'] as $cart_item){
            if($cart_item['id'] == $id){
                continue;
            }
            $product[] =array( 'tensp'=>$cart_item['tensp'],
                                            'id'=> $cart_item['id'],
                                            'soluong'=>$cart_item['soluong'],
                                            'giasp'=>$cart_item['giasp'],
                                            'hinhanh'=>$cart_item['hinhanh'],
                                            'noidung'=>$cart_item['noidung'],
                                            'tinhtrang'=>$cart_item['tinhtrang']);
            
            $_SESSION['giohang'] = $product;
            // header('Location:../../cart.php');
        }
        if(sizeof($_SESSION['giohang']) == 1){
            unset($_SESSION['giohang']);
         }
    }

    if(isset($_POST['addCart'])){
        $id = $_GET['idsanpham'];
        echo $id;
        $soluong = 1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sp = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($query);
        if ($row){
            $new_product = array(array( 'tensp'=>$row['tensp'],
                                        'id'=> $id,
                                        'soluong'=>$soluong,
                                        'giasp'=>$row['giasp'],
                                        'hinhanh'=>$row['hinhanh'],
                                        'noidung'=>$row['noidung'],
                                        'tinhtrang'=>$row['tinhtrang']));
            //kiểm tra session giỏ hàng tổn tại

            if(isset($_SESSION['giohang'])){
                $found = false;
                foreach($_SESSION['giohang'] as $cart_item){
                    if($cart_item['id'] == $id){
                        $product[] =array( 'tensp'=>$cart_item['tensp'],
                                            'id'=> $cart_item['id'],
                                            'soluong'=>$cart_item['soluong']+1,
                                            'giasp'=>$cart_item['giasp'],
                                            'hinhanh'=>$cart_item['hinhanh'],
                                            'noidung'=>$cart_item['noidung'],
                                            'tinhtrang'=>$cart_item['tinhtrang']);
                        $found = true;
                    }else{
                        $product[] =array( 'tensp'=>$cart_item['tensp'],
                                            'id'=> $cart_item['id'],
                                            'soluong'=>$soluong,
                                            'giasp'=>$cart_item['giasp'],
                                            'hinhanh'=>$cart_item['hinhanh'],
                                            'noidung'=>$cart_item['noidung'],
                                            'tinhtrang'=>$cart_item['tinhtrang']);
                    }
                }
                if($found == false){
                    $_SESSION['giohang'] = array_merge($product,$new_product);
                }else{
                    $_SESSION['giohang'] = $product;
                }
            }else{
                $_SESSION['giohang'] = $new_product;
            }
        }
        header('Location:index.php');
    }

?>