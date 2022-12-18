<?php 
include('../../config/connection.php');

$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
$icon = $_POST['icon'];

if(isset($_POST['themdanhmuc'])){ //thêm
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu,icondanhmuc) VALUE('".$tenloaisp."','".$thutu."','".$icon."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');

} elseif(isset($_POST['suadanhmuc'])){ //sửa
    $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc = '".$tenloaisp."', thutu='".$thutu."', icondanhmuc='".$icon."' where id_danhmuc = '$_GET[iddanhmuc]' ";
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}  else{ //xóa danh mục
    $id = $_GET['iddanhmuc'];
    $sql_xoa ="DELETE FROM tbl_danhmuc where id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}

?>