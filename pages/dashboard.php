<?php 
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc 
     WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc
     ORDER BY tbl_sanpham.id_sp ASC
     LIMIT 25";
    $query_pro = mysqli_query($mysqli, $sql_pro);

    // $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc 
    // WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
    // LIMIT 1";
    // $query_pro = mysqli_query($mysqli, $sql_chitiet);
    // session_destroy();
?>

<div class="container  my-2 ">
        <div class="row row-eq-height ">
            <div class="col-3 col-lg-2 rounded">

                <!-- ----------danh mục ------------ -->
                <ul class="danhmuc">
                <?php 
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                ?>
                
                <li class="">
                    <a href="?action=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc']?>"> 
                       <i class="<?php echo $row_danhmuc['icondanhmuc'] ?>"></i> <?php echo $row_danhmuc['tendanhmuc']?> 
                    </a>
                </li>
               
                <?php 
                    }
                ?>    
                </ul>
            </div>
            <div class="col-9 col-lg-7 my-2 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner rounded ">
                        <div class="carousel-item active rounded overflow-hidden">
                            <img class="d-block rounded overflow-hidden" src="https://cdn.divineshop.vn/image/catalog/Anh/24.12.21/Elden%20Ring%201512-46477.png?hash=1645785809" alt="First slide" >
                        </div>
                        <div class="carousel-item rounded">
                            <img class="d-block  rounded" src="https://cdn.divineshop.vn/image/catalog/Kho%20game%20ti%E1%BB%81n%20tri%E1%BB%87u%20ch%E1%BB%89%20v%E1%BB%9Bi%2029k%20t3-44730.png?hash=1646211619" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block rounded " src="https://cdn.divineshop.vn/image/catalog/Anh/24.12.21/discord%20divine-33358.png?hash=1640349471">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block rounded" src="https://cdn.divineshop.vn/image/catalog/Anh/24.12.21/%E1%BB%A9ng%20d%E1%BB%A5ng%20gi%E1%BA%A3i%20tr%C3%AD-61206.png?hash=1640349474">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block rounded" src="https://cdn.divineshop.vn/image/catalog/Anh/24.12.21/discord%20divine-33358.png?hash=1640349471">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col gx">
                <div class="row ">
                    <div class="col-6 col-lg-12 my-2 ">
                        <a href="#"><img class="rounded" src="https://cdn.divineshop.vn/image/catalog/Anh/14.03.2022/Adobe1503-71585.png?hash=1647313033" alt=""></a>
                    </div>
                    <div class="col-6 col-lg-12 my-2 ">
                        <a href="#"><img class="rounded" src="https://cdn.divineshop.vn/image/catalog/Anh/14.03.2022/Spotify1503-87863.png?hash=1647313046" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-2">
        <div class=" row">
            <div class="col-3">
                <a href="#"><img class="rounded" src="https://cdn.divineshop.vn/image/catalog/Anh/14.03.2022/Steam1503-30573.png?hash=1647313060" alt=""></a>
            </div>
            <div class="col-3">
                <a href="#"><img class="rounded" src="https://cdn.divineshop.vn/image/catalog/Anh/14.03.2022/Discord1503-72764.png?hash=1647313071" alt=""></a>
            </div>
            <div class="col-3">
                <a href="#"><img class="rounded" src="https://cdn.divineshop.vn/image/catalog/Anh/14.03.2022/gmail1503-88919.png?hash=1647313082" alt=""></a>

            </div>
            <div class="col-3">
                <a href="#"><img class="rounded" src="img/banner.png" alt="" style="height: 101%;"></a>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <h4>Sản phẩm hiện có</h4>
        <p>Những trò chơi được đánh giá tốt, nội dung hấp dẫn thu hút đang chờ bạn</p>
        <div class="card-deck row my-3">
                <?php while($row_pro = mysqli_fetch_array($query_pro)){
    
                    ?>
                    <div class="col-lg-3 col-md-6 col-12 my-2">
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
                        <form method="POST" action="?idsanpham=<?php echo $row_pro['id_sp'] ?>" >              
                            <label for="addCart<?php echo $row_pro['id_sp'] ?>" class="btn btn-primary btn-block rounded">
                                <i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ
                            </label>
                            <input type="submit" name="addCart" id="addCart<?php echo $row_pro['id_sp'] ?>" value="" type="hidden" style="display: none;" >
                       
                        </form>
                            
                        <!-- <input type="hidden" name="tenSP" value="<?php echo $row_pro['tensp'] ?>">
                        <input type="hidden" name="gia" value="<?php echo $row_pro['giasp'] ?>">
                        <input type="hidden" name="hinh" value="<?php echo $row_pro['hinhanh'] ?>"> -->
                            
                    </div>  
                <?php } ?>
    </div>
      
    </div>