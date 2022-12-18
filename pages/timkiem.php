<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa = '';
    }
    $sql_pro = "SELECT * FROM tbl_sanpham 
                WHERE tensp LIKE '%".$tukhoa."%'  ";
    $query_pro = mysqli_query($mysqli, $sql_pro);

?>
<div class="container my-3">
   
    <h4 >Tìm kiếm sản phẩm: <strong style="font-size: 30px;"><?php echo $tukhoa ; ?></strong></h4>
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
 
                            
                    </form>
                </div>  
                <?php } ?>
    </div>
</div>