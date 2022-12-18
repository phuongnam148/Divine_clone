<?php 
   
    include ("connection.php");
    include ("functions.php");
    $user_data = check_login($con);
   
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if ($_POST['step'] == 1) {
            //first form
            $user_name = $_POST['username'];
            $password = $_POST['password'];
            if(!empty($user_name) && !empty($password) && !is_numeric(($user_name))){
                // save to databass
                $user_id = random_num(20); 
                $query = "insert into users (user_id, user_name, password) values('$user_id', '$user_name', '$password')";
                mysqli_query($con, $query);
    
            }else{
                // echo "bạn nhập sai";
            }
          }
          if ($_POST['step'] == 2) {
            $user_name_lg = $_POST['username_lg'];
            $password_lg = $_POST['password_lg'];
            if(!empty($user_name_lg) && !empty($password_lg) && !is_numeric(($user_name_lg))){
                // read from databass
                $query = "select * from users where user_name = '$user_name_lg'";
                $result =  mysqli_query($con, $query);
                if($result){
                    if($result && mysqli_num_rows($result) > 0){
                        $user_data =  mysqli_fetch_assoc($result);
        
                        if ($user_data['password'] == $password_lg){
                            $_SESSION['user_id'] = $user_data['user_id'];
                            echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
                        }else{
                            echo "<script type='text/javascript'>alert('Bạn nhập sai mật khẩu');</script>";
                        }
                    }
                }else
                    echo "<script type='text/javascript'>alert('Bạn nhập sai tài khoản');</script>";
            }else{
                // echo "bạn nhập sai";
            }

            session_destroy();
          }
      

      
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>PS19516 - Nguyễn Lê Phương Nam</title>
    <link rel="stylesheet" href="index.css">

    <style>
        <?php include './index.css';?>
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container ">
            <!-- <div class="container-fluid"> -->
            <a class="navbar-brand mt-3 h1" href="index.php"><span class="d-inline-block" style="font-size: 20px;"><i class="fa fa-dragon mx-2" ></i> Nevidi Shop</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse row " id="navbarSupportedContent">
                <div class="col-lg-6">
                    <form class="d-flex input-group w-auto">
                        <input class="form-control me-0 mb-0 rounded" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                        <button class="btn btn-lg btn-primary " type="submit" style="background-color: #0a59cc; color: white;"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-4  col-6 my-2   ">
        
                        <button type="button" class="btn btn-outline-light container-fluid" data-toggle="modal" data-target="#loginModel">
                            <i class="fa fa-user mx-1"></i> Đăng Nhập / Đăng Ký
                        </button>
              
                </div>
                <div class="col-lg-3 col-6 my-2 ">
                    <a href="cart.php">
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModel">
                            <i class="fa fa-shopping-cart mx-1"></i></i> Giỏ hàng
                          </button>
                    </a>
                </div>
            </div>

            <!-- <button type="button" class="btn btn-outline-light">
                <i class="fa fa-shopping-cart mx-1"></i></i> Giỏ hàng
              </button> -->
            <!-- </div> -->
        </div>
    </nav>

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
                                <input type="text" class="form-control" name="username_lg" id="username_lg" placeholder="Email hoặc tên đăng nhập">
                            </div>
                            <div class="form-group my-3">
                                <input type="password" class="form-control" name="password_lg" id="password_lg" placeholder="Mật Khẩu">
                            </div>
                            <a href="#">Bạn quên mật khẩu?</a></p>
                            <div class="d-grid gap-2  col-6 mx-auto">
                                <button type="submit" class="btn btn-primary my-2 ">Đăng nhập</button>
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
                        <form method="post" role="form">
                            <div class="form-group my-3">
                                <input type="text" class="form-control"  placeholder="Email">
                            </div>
                            <div class="form-group my-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập">
                            </div>
                            <div class="form-group my-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mật Khẩu">
                            </div>
                            <div class="d-grid gap-2  col-6 mx-auto">
                                <button type="submit" class="btn btn-primary my-2 ">Tạo tài khoản</button>
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