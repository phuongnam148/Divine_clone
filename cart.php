<?php
    include 'header.php'; 
    
    
?>

<div class="container my-4" >
    <p>
    <?php 
        if(isset($_SESSION['dangky'])){
            echo "Xin chào <strong>".$_SESSION['dangky']."</strong>";
    ?>    
        <a href="cart.php?dangxuat=1" class="text-danger ml-2">Đăng xuất</a> 
    <?php      
        }
    ?> 
    </p>
    <div class="card" style="min-height: 700px;">
        <div class="row m-2 ">
            <div class="col-md-8 col-12 p-2" >
                <?php        
                if(isset($_SESSION['giohang'])){
                    $soLuongSP = sizeof($_SESSION['giohang']);
                    echo "
                    <p>
                        <span class='card-title'>Giỏ hàng</span> ($soLuongSP sản phẩm)
                    </p> ";
                    for ($i=0; $i < $soLuongSP; $i++):
                ?>
                    <div class="m-2 row border p-2 rounded cart-block">
                        <div class="col-lg-4 col-12 card-img-top">
                            <a href="">
                                <img src="admincp/modules/quanlysanpham/uploads/<?php echo $_SESSION['giohang'][$i]['hinhanh']; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4 ">
                            <a href=""><h5 class="card-title font-weight-bold">
                                <?php 
                                    $name_src = $_SESSION['giohang'][$i]['tensp'];
                                    echo "$name_src"; 
                                ?>
                            </h5></a>
                            <p class="card-text">
                                <?php 
                                    echo $_SESSION['giohang'][$i]['noidung']; 
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-4 soluong_block ">
                                <button type="button" class="btn btn-outline-light" id="btnMinutes" onclick="btnMinutes(this)"> - </button>
                                <input class="btn btn-outline-light" id="so-luong" name="soluong" value="<?php echo $_SESSION['giohang'][$i]['soluong'] ?>" type="input" onchange="calcPrice(this)">
                                <button type="button" class="btn btn-outline-light" id="btnAdd" onclick="btnAdd(this)"> + </button>
                                <span class="ml-2 price" id="price">
                                    <?php 
                                        $price_src = $_SESSION['giohang'][$i]['giasp'];
                                        $sumPrice  +=   $price_src* $_SESSION['giohang'][$i]['soluong'];
                                        echo number_format($price_src ).'đ' 
                                    ?>
                                </span>
                                <input type="hidden" name="price" value="<?php echo $_SESSION['giohang'][$i]['giasp'] ?>"  >
                        </div>

                        <div class="w-100"></div>
                            <div class="col-lg-8 ml-md-auto">
                                <hr style="font-weight: 800;">
                                <span>Tình trạng: <span class="text-success" style="font-size:larger; font-weight: bolder;">Còn hàng</span></span>
                                <a href="cart.php?xoa=<?php echo $_SESSION['giohang'][$i]['id'];?>" style="color: red; float: right;" onclick="return confirm('Xác nhận xóa sản phẩm')"><i class="fa fa-trash-alt"></i></a>
                            </div>
                       
                    </div>

                    
                <?php 
                        endfor;
                        // session_destroy();
                    }else{
                        
                    
                ?> 
                 <h3 >Giỏ hàng trống</h3>
                 <p style="font-size: larger;">Thêm sản phẩm vào giỏ và quay lại trang này để thanh toán nha bạn !</p>
                 <img src="https://cdn.divineshop.vn/static/4e0db8ffb1e9cac7c7bc91d497753a2c.svg" alt="" width="300px" height="300px">
                 <?php 
                     }
                ?> 
            </div>   
               
            <div class="col p-3 mt-2">
                <h4>Thanh toán</h4>
                <?php if(isset($_SESSION['giohang'])):
                ?>
                    <p class="container-fluid"  style="font-size: 20px;">Tổng giá trị sản phẩm
                         <span style="float: right;" name="tongtien"> 
                            <?php              
                                 echo number_format( $sumPrice  ).'đ'   ?>
                         </span>
                    </p>
                    <hr>
                    <p class="container-fluid"  style="font-size: 20px;">Tổng giá trị phải thanh toán
                         <strong style="float: right;" name="tongtien"> 
                            <?php 
                                echo number_format( $sumPrice  ).'đ'   ?>
                         </strong>
                    </p>
                    <p class="container-fluid" style="font-size: 20px;">Số dư hiện tại
                         <strong style="float: right;"> 
                            <?php 
                                 echo "0 đ";  ?>
                         </strong>
                    </p>
                    <p class="container-fluid"  style="font-size: 20px;">Số tiền cần nạp thêm
                         <strong style="float: right;" name="tongtien"> 
                            <?php 
                                echo number_format( $sumPrice  ).'đ'  ?>
                         </strong>
                    </p>
                    
                <?php endif;
                ?>
                
                <?php 
                if(isset($_SESSION['dangky'])){
                    
                    
                ?> 
                <button class="btn btn-primary btn-block rounded py-3" data-toggle="modal" data-target="#loginModel" style="font-size: 20px;"><i class="fa fa-dragon mx-2" ></i> Đăng nhập để thanh toán</button>
                <?php 
                } else{
             
                ?> 
                <button class="btn btn-primary btn-block rounded py-3" style="font-size: 20px;"><i class="fa fa-dragon mx-2" ></i>Thanh toán</button>
                <?php 
                }
             
                ?> 
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>