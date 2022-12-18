<p class="h4 text-center my-2">Thêm sản phẩm</p>

<table class="table table-bordered">
    <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input class="container-fluid px-2 py-1" type="text" name="tensp" style="width: 100%;" required ></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="masp" style="width: 100%;" required></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="giasp" style="width: 100%;" required></td>
        </tr>
        <tr>
            <td>Giá cũ sản phẩm</td>
            <td><input class="container-fluid px-2 py-1"  type="text" name="giacusp" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input class="container-fluid px-2 py-1"  type="file" name="hinhanh" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea class="container-fluid px-2 py-1"  name="noidung" id="" cols="80" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select class="p-1" name="danhmuc" id="">
                    <?php 
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                    };
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select class="p-1" name="tinhtrang" id="">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input class="btn btn-primary" type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>