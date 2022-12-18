
    <div class=" " id="forgotPass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="form-group my-3">
                                <input type="text" class="form-control" name="email" id="username_lg" placeholder="Email Đăng Nhập">
                            </div>
                            <div class="form-group my-3">
                                <input type="password" class="form-control" name="password_new1" id="password_lg" placeholder="Mật khẩu mới">
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

<?php
    if(isset($_POST['matkhaumoi'])){ //sửa
        $email = $_POST['email'];
        $newpass = $_POST['password_new1'];
        $sql_update = "UPDATE tbl_accounts 
                        SET matkhau='".$newpass."'
                        Where email = '$email'                        
                        ";
        mysqli_query($mysqli,$sql_update);
        // header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
        echo "<script>alert('Đổi mật khẩu thành công');</script>";
        
    }
?>