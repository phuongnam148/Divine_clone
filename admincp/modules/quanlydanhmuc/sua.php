<?php 
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc Where id_danhmuc = '$_GET[iddanhmuc]' limit 1";
    $query_sua_danhmucsp =  mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<p class="h4 text-center my-2">Sửa danh mục sản phẩm</p>

<table class="table table-bordered">
    <form method="POST" action="modules/quanlydanhmuc/xuly.php?iddanhmuc= <?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)): 
        ?>

        <tr>
            <td>Tên danh mục</td>
            <td><input class="container-fluid px-2 py-1"  type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input class="container-fluid px-2 py-1"  type="text" value="<?php echo $dong['thutu']?>" name="thutu" style="width: 100%;"></td>
        </tr>
        <tr>
            <td>Icon danh mục</td>
            <td><input class="container-fluid px-2 py-1"  type="text" value="<?php echo $dong['icondanhmuc']?>" name="icon" style="width: 100%;"></td>
        </tr>
        <tr>
            <td colspan="2"><input class="btn btn-primary" type="submit" name="suadanhmuc" value="Sửa danh mục" ></td>
        </tr>
        <?php
        endwhile;
        ?>
    </form>
</table>