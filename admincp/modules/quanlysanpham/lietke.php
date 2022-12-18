<?php 
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc 
                      Where tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
                      ORDER BY id_sp ASC ";
    $query_lietke_sp =  mysqli_query($mysqli,$sql_lietke_sp);
?>

<p class="h4 text-center my-2">Danh mục sản phẩm hiện có</p>


<table class="table table-bordered tbl_sp" >
    <form method="POST" action="modules/quanlydanhmuc/xuly.php">
        <thead class="text-center ">
            <tr>
                <th>ID</th>
                <th>Tên SP</th>
                <th>Hình ảnh</th>
                <th>Giá SP</th>
                <th>Giá cũ SP</th>
                <th>Mã sản phẩm</th>
                <th>Nội dung</th>
                <th>Danh mục</th>
                <th>Tình trạng</th>
                <th style="width: 200px;">Quản lý</th>
            </tr>
        </thead>
        <?php 
        $i=0;
        while($row = mysqli_fetch_array($query_lietke_sp)):
            $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['tensp']; ?></td>
            <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']; ?>" alt="" style="width: 100%;"></td>
            <td><?php echo $row['giasp']; ?></td>
            <td><?php echo $row['giacusp']; ?></td>
            <td><?php echo $row['masp']; ?></td>
            <td><?php echo $row['noidung']; ?></td>
            <td><?php echo $row['tendanhmuc']; ?></td>
            <td><?php if($row['tinhtrang']==1){
                            echo 'Kích hoạt';
            }else{
                            echo 'Ẩn';
            }; ?></td>
            <td>
                <a class="btn btn-primary my-1" href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sp']; ?>">Sửa</a>
                <a class="btn btn-danger my-1" onclick="return confirm('Bạn có muốn xóa không?')" href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sp']; ?>">Xóa</a>  
            </td>
        </tr>

        <?php
            endwhile; 
        ?>
    </form>
</table>