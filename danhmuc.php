<?php
    include 'header.php';

    $sql_pro = "SELECT * FROM tbl_sanpham 
                WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' 
                ORDER BY tbl_sanpham.id_sp ASC";
    $query_pro = mysqli_query($mysqli, $sql_pro);

    $sql_cate = "SELECT * FROM tbl_danhmuc 
    WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' 
    limit 1";
    $query_cate = mysqli_query($mysqli, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>
<div class="container my-3">
    <h2 ><?php echo $row_title['tendanhmuc'] ?></h2>
    <div class="card-deck row my-3">
                <?php while($row_pro = mysqli_fetch_array($query_pro)){
    
                ?>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <a href="#" >
                        <img class="card-img-top" src="admincp/modules/quanlysanpham/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="Card image cap">
                        <div class="card_body">
                            <h5 class="card-title"><?php echo $row_pro['tensp'] ?></h5>
                            <p class="card-text"><?php echo number_format($row_pro['giasp']).'đ' ?><del class="mx-2"><?php echo number_format($row_pro['giacusp'] ).'đ' ?></del>
                                <span id="sale-box">-<?php 
                                $num = 100 - ($row_pro['giasp']/$row_pro['giacusp']*100);
                                echo  (int)$num.'%' ?></span> </p>
                        </div>
                    </a>
                    <form action="cart.php" method="get">              
                        <label for="addCart" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                        <input type="submit" name="addCart" id="addCart" class="d-none" >
                   
                        <input type="hidden" name="tenSP" value="<?php echo $row_pro['tensp'] ?>">
                        <input type="hidden" name="gia" value="790.000">
                        <input type="hidden" name="hinh" value="https://steamcdn-a.akamaihd.net/steam/apps/1245620/header.jpg">
                            
                    </form>
                </div>  
                <?php } ?>
    </div>
</div>