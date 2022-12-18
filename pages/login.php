
   <!-- --------------- đăng nhập ------------- -->
    

    <div class="modal " id="loginModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <a class="h4 link-dark" href="#">Đăng nhập</a>
                    <a href="#" class="h4 link-secondary mx-4" data-toggle="modal" data-target="#signupModel" data-dismiss="modal" aria-label="Close">Đăng ký</a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body row align-items-start">
                    <div class="col-6">
                        <p>Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích và nhận nhiều ưu đãi hấp dẫn</p>
                        <form role="form" method="post" action="#">
                            <div class="form-group my-3">
                                <input type="text" class="form-control" name="username" id="username_lg" placeholder="Email Đăng Nhập">
                            </div>
                            <div class="form-group my-3">
                                <input type="password" class="form-control" name="password" id="password_lg" placeholder="Mật Khẩu">
                            </div>
                            <p id="loginFail" class="text-danger"></p> 
                            <a href="#" class="link-secondary " data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#forgotPass">Bạn quên mật khẩu?</a>
                            
                            <div class="d-grid gap-2  col-6 mx-auto">
                                <button type="submit" name="dangnhap" class="btn btn-primary my-2 ">Đăng nhập</button>
                            </div>
                            <input type="hidden" name="step" value="2" />
                        </form>
                    </div>
                    <div class="col-6 ms-auto">
                        <img class="container-fluid" loading="lazy" src="https://cdn.divineshop.vn/static/368e705d45bfc8742aa9d20dbcf4c78c.svg" alt="Đăng nhập / Đăng ký">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php 
        if(isset($_POST['dangnhap'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM tbl_accounts WHERE email = '".$username."' AND matkhau = '".$password."' LIMIT 1 ";
            $row = mysqli_query($mysqli,$sql);
            $count = mysqli_num_rows($row);                                    
            if($count>0){
                $row_data = mysqli_fetch_array($row);
                $_SESSION['dangnhap'] = $row_data['email'];

                $_SESSION['id_khachhang'] =  $row_data['id_user'];

                echo '<script>refresh()</script>';                                      
            }else{
    ?>            
            <script>
            document.getElementById('loginFail').innerHTML = 'Bạn nhập sai tài khoản hoặc mật khẩu';
            $(document).ready(function(){
                $("#loginModel").modal("show");
            });
            </script>
    <?php        
            }
        }
    ?> 
<!-- 

   ---------------- đăng ký --------------- -->
  
    <div class="modal " id="signupModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <a href="#" class="h4 link-secondary " data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#loginModel">Đăng nhập</a>
                    <a class="h4 mx-4 link-dark" href="#">Đăng ký</a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body row align-items-start">
                    <div class="col-6">
                        <p>Đăng ký để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích và nhận nhiều ưu đãi hấp dẫn</p>
                        <form method="post" role="form" action="">
                            <div class="form-group my-3">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                            <div class="form-group my-3">
                                <input type="text" class="form-control" id="username" required name="username" placeholder="Tên đăng nhập">
                            </div>
                            <div class="form-group my-3">
                                <input type="password" class="form-control" id="password" required name="password" placeholder="Mật Khẩu">
                            </div>
                            <p id="signupFail" class="text-danger"></p> 
                            <div class="d-grid gap-2  col-6 mx-auto">
                                <button type="submit" name="dangky" class="btn btn-primary my-2 ">Tạo tài khoản</button>
                            </div>
                            <p>Khi bấm <strong>Tạo tài khoản</strong> , bạn đã đồng ý với <a href="">Điều khoản dịch vụ của Nevidi Shop</a> </p>
                     
                            <input type="hidden" name="step" value="1" />
                        </form>
                    </div>
                    <div class="col-6 mx-auto">
                        <img class="container-fluid" loading="lazy" src="https://cdn.divineshop.vn/static/235dccb09069e3d4eebc6227236f9dc2.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php 
     if(isset($_POST['dangky'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql_dk = "SELECT * FROM tbl_accounts WHERE email = '".$email."'  LIMIT 1 ";
        $row_dk = mysqli_query($mysqli,$sql_dk);
        $count = mysqli_num_rows($row_dk);                                    
        if($count>0){           
        ?>
         <script>
            document.getElementById('signupFail').innerHTML = 'Email đã tồn tại';
            $(document).ready(function(){
                $("#signupModel").modal("show");
            });
            </script>
        <?php                                             
        }else{
            $sql_them = " INSERT INTO tbl_accounts(tendangnhap,email,matkhau)
                        VALUE('".$username."','".$email."','".$password."') ";
            $sql_dangky = mysqli_query($mysqli,$sql_them);
            if( $sql_dangky){
                $_SESSION['dangnhap'] = $email ;
                $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
                echo "<script>refresh();</script>";  
            }
         }
        
     }

    //  ----------------- đăng xuất -----------------------
     if(isset($_GET['dangxuat'])&& $_GET['dangxuat'] == 1 ){
         if(isset($_SESSION['dangnhap'])){                         
            unset($_SESSION['dangnhap']);
            echo '<script>refresh();</script>';
            
         }
     }
   ?>                                        



    <div class="modal " id="forgotPass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-2">
                <div class="modal-header">
                    <a class="h4 link-dark" href="#">Quên mật khẩu</a>
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body row align-items-start">
                    <div class="col-6">
                        <p>Bạn vui lòng hoàn tất các thông tin xác thực bên dưới để chúng tôi đặt lại mật khẩu cho tài khoản của bạn</p>
                        <form role="form" method="post" action="#">
                            <!-- <div class="form-group my-3">
                                <input type="text" class="form-control" name="email" id="username_lg" placeholder="Email Đăng Nhập">
                            </div> -->
                            <div class="form-group my-3">
                                <input type="text" class="form-control" name="email" id="password_lg" placeholder="Nhập Email">
                            </div>
                            <!-- <div class="form-group my-3">
                                <input type="password_new2" class="form-control" name="password" id="password_lg" placeholder="Nhập lại mật khẩu mới">
                            </div> -->
                            <p id="loginFail" class="text-danger"></p> 
                         
                            <div class="d-grid gap-2  col-6 mx-auto">
                                <button type="submit" name="matkhaumoi" class="btn btn-primary my-2 ">Đặt lại mật khẩu</button>
                            </div>
                            <input type="hidden" name="step" value="2" />
                        </form>
                    </div>
                    <div class="col-6 ms-auto">
                        <img class="container-fluid" loading="lazy" src="https://cdn.divineshop.vn/static/368e705d45bfc8742aa9d20dbcf4c78c.svg" alt="Đăng nhập / Đăng ký">
                    </div>
                </div>

            </div>
        </div>
    </div>

<div style="display: none;">
<?php
    if(isset($_POST['matkhaumoi'])){ //sửa
        $email = $_POST['email'];
        require('mail/sendmail.php');
          
        $mail = new Mailer();
        $tieude = "Đặt lại mật khẩu";
        $mailuser = $email;
        $noidung = "<p>Đặt lại mật khẩu tại: <a href='http://localhost/22_PS19516_ASM/index.php?action=resetpass'>Đây</a></p>"     ;
        $mail->dathangmail($tieude,$noidung,$mailuser) ;  
        // echo '<script>refresh();</script>';

    }
?>
</div>