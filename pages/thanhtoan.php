<?php
    ob_start();
    session_start();
    include '../admincp/config/connection.php';
    require('../mail/sendmail.php');

    $code_order = rand(0,9999);
    $id_khachhang = $_SESSION['id_khachhang'];
    $insert_cart = "INSERT INTO tbl_cart(id_user,code_cart,cart_status)
                    VALUE('".$id_khachhang."','".$code_order."',1)";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        foreach($_SESSION['giohang'] as $key => $value){
            $id_sp = $value['id'];
            $soluong = $value['soluong'];
            $insert_cart_details = "INSERT INTO tbl_cart_details(id_sp,code_cart,soluong)
                                    VALUE('".$id_sp."','".$code_order."','".$soluong."')";
            mysqli_query($mysqli,$insert_cart_details);
        }
        
        $mail = new Mailer();
        $sumprice = 0;
        $tieude = "Đặt hàng thành công!";
        $maildathang = $_SESSION['dangnhap'];
        $noidung = "<p>Cảm ơn quý khách đã mua hàng tại Nevidi Shop</p>
                    <p>Mã đơn hàng ".$code_order."</p>
                    <p>Đợn đặt hàng gồm:</p>";
        foreach($_SESSION['giohang'] as $key => $val){
            $sumprice += $val['giasp']*$val['soluong'];
            $noidung .= "<ul style='list-style:none;border:1px solid blue; margin=10px'>
                            <li>Tên sản phẩm".$val['tensp']."</li>
                            <li>Giá: ".number_format($val['giasp'])."đ</li>
                            <li>Số lượng: ".$val['soluong']."</li>
                        </ul>";
        }
        $noidung .= "<p>Tổng đơn hàng: ".number_format($sumprice). "đ</p>";
        $mail->dathangmail($tieude,$noidung,$maildathang) ;  
    }
    unset($_SESSION['giohang']);
    header('Location:../index.php?action=resetpass');
    ob_end_flush();
?>