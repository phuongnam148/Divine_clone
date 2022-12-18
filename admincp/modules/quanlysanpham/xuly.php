<?php 
include('../../config/connection.php');

$tensp = $_POST['tensp'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$giacusp = $_POST['giacusp'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];


// xứ lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;


if(isset($_POST['themsanpham'])){ //thêm
    $sql_them = "INSERT INTO tbl_sanpham(tensp,masp,giasp,giacusp,hinhanh,noidung,tinhtrang, id_danhmuc)
         VALUE('".$tensp."','".$masp."','".$giasp."','".$giacusp."','".$hinhanh."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

    header('Location:../../index.php?action=quanlysanpham&query=them');

} elseif(isset($_POST['suasanpham'])){ //sửa
    $sql_update = "UPDATE tbl_sanpham SET tensp = '".$tensp."', masp='".$masp."', giasp='".$giasp."', giacusp='".$giacusp."', noidung='".$noidung."', tinhtrang='".$tinhtrang."', id_danhmuc='".$danhmuc."'
                    where id_sp = '$_GET[idsanpham]' ";
    mysqli_query($mysqli,$sql_update);
    if($_FILES['hinhanh']['name'] != ''){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        $sql = "SELECT * From tbl_sanpham WHERE id_sp = '$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_update2 = "UPDATE tbl_sanpham SET hinhanh= '".$hinhanh."' 
                        WHERE id_sp = '$_GET[idsanpham]' ";
        mysqli_query($mysqli,$sql_update2);
        //xoa ảnh cũ
   
    }
    header('Location:../../index.php?action=quanlysanpham&query=them');
}  else{ //xóa danh mục
    $id = $_GET['idsanpham'];
    $sql = "SELECT * From tbl_sanpham WHERE id_sp = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa ="DELETE FROM tbl_sanpham where id_sp= '$id' ";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}

?>