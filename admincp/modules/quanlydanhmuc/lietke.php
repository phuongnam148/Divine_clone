<?php 
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp =  mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

<p class="h4 text-center my-2">Danh mục sản phẩm hiện có</p>


<table class="table table-bordered">
    <form method="POST" action="modules/quanlydanhmuc/xuly.php">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Quản lý</th>
        </tr>
        <?php 
            $i=0;
            while($row = mysqli_fetch_array( $query_lietke_danhmucsp)):
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <i class="mr-1 <?php echo $row['icondanhmuc']; ?>"></i> <?php echo $row['tendanhmuc']; ?>
            </td>
            <!-- <td><?php echo $row['thutu']; ?></td> -->
            <td>
                <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')" href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']; ?>">Xóa</a>  
                <a class="btn btn-primary " href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']; ?>">Sửa</a>
            </td>
        </tr>

        <?php
            endwhile; 
        ?>
    </form>
</table>