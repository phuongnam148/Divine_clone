<?php 
    session_start();
    include ('modules/header.php');
    include ('config/connection.php');
    if(isset($_POST['dangnhapadmin'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']) ;
        $sql = "SELECT * From tbl_admin WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhapadmin'] = $username;
            header("Location:index.php");
        }else{
            echo '<script>alert("Bạn nhập sai tài khoản hoặc mật khẩu");</script>';
            // header("Location:login.php");
        }
    }
    // session_destroy();   
?>
    

<!-- 

   ---------------- đăng ký --------------- -->
   <?php 
     if(isset($_POST['dangkyadmin'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql_them = " INSERT INTO tbl_admin(username,password)
                      VALUE('".$username."','".$password."') ";
        mysqli_query($mysqli,$sql_them);
       
        $_SESSION['dangnhapadmin'] = $username;
        header("Location:index.php");       
        
     }

    //  ----------------- đăng xuất -----------------------
   
   ?>       



<div class="card signup_v4 mb-30" style="max-width: 50%; margin: auto;">
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation"> <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Đăng nhập</a> </li>
            <li class="nav-item" role="presentation"> <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Đăng ký</a> </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Đăng nhập</h4>

            <form method="post" action="" >
                <div class="form-group my-3">
                    <input type="text" class="form-control" name="username" id="username_lg" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group my-3">
                    <input type="password" class="form-control" name="password" id="password_lg" placeholder="Mật Khẩu">
                </div>
                <a href="#">Bạn quên mật khẩu?</a></p>
                
                <button type="submit" name="dangnhapadmin" class="btn btn-primary my-2 " style="display: block; width: 50%; margin: auto;">Đăng nhập</button>
                
                <input type="hidden" name="step" value="2" />
            </form>

               
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <h4 class="text-center mt-4 mb-4" style="text-transform: uppercase;">Đăng ký</h4>
                <form method="post" action="" >
                        <div class="form-group my-3">
                            <input type="text" class="form-control" name="username" id="username_lg" placeholder="Tên đăng nhập">
                        </div>
                        <div class="form-group my-3">
                            <input type="password" class="form-control" name="password" id="password_lg" placeholder="Mật Khẩu">
                        </div>
                        <button type="submit" name="dangkyadmin" class="btn btn-primary my-2 " style="display: block; width: 50%; margin: auto;">Đăng ký</button>
                        
                        <input type="hidden" name="step" value="2" />
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
    include ('modules/footer.php');
?>