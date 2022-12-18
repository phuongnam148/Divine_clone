<?php 
    $sql_sua_sp = "SELECT * FROM tbl_sanpham Where id_sp= '$_GET[idsanpham]' limit 1";
    $query_sua_sp =  mysqli_query($mysqli, $sql_sua_sp);
?>

<p class="h4 text-center my-2">Sửa sản phẩm</p>

<table class="table table-bordered">
<?php
    while($row = mysqli_fetch_array($query_sua_sp )){
?>
   <form method="POST" action="modules/quanlysanpham/xuly.php?idsanpham= <?php echo $row['id_sp'] ?>" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input class="container-fluid px-2 py-1" type="text" name="tensp" style="width: 100%;" value="<?php echo $row['tensp'] ?>"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="masp" style="width: 100%;" value="<?php echo $row['masp'] ?>"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="giasp" style="width: 100%;" value="<?php echo $row['giasp'] ?>"></td>
        </tr>
        <tr>
            <td>Giá cũ sản phẩm</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="giacusp" style="width: 100%;" value="<?php echo $row['giacusp'] ?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input class="container-fluid px-2 py-1"  type="file" name="hinhanh" style="width: 100%;">
                <img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']; ?>" alt="" style="width: 150px;">
            </td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea class="container-fluid px-2 py-1"  name="noidung" id="" cols="80" rows="5"><?php echo $row['noidung'] ?></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select class="p-1" name="danhmuc" id="">
                    <?php 
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }else{
                    ?>   
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    
                    <?php
                        }
                    };
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select class="p-1" name="tinhtrang" id="">
                    <?php
                        if($row['tinhtrang'] == 1){
                    ?>
                            <option value="1" selected>Kích hoạt</option>
                            <option value="0">Ẩn</option>
                    <?php    
                        }else{
                    ?>
                            <option value="1">Kích hoạt</option>
                            <option value="0" selected>Ẩn</option>
                    <?php  
                        }
                    ?>
                
          
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input class="btn btn-primary" type="submit" name="suasanpham" value="Sửa sản phẩm" ></td>
        </tr>
    </form>
<?php
    }
?>
</table>