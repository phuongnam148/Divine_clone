<!-- <?php 
   
    // include ("connection.php");
    // include ("functions.php");
    // $user_data = check_login($con);
   
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     if ($_POST['step'] == 1) {
    //         //first form
    //         $user_name = $_POST['username'];
    //         $password = $_POST['password'];
    //         if(!empty($user_name) && !empty($password) && !is_numeric(($user_name))){
    //             // save to databass
    //             $user_id = random_num(20); 
    //             $query = "insert into users (user_id, user_name, password) values('$user_id', '$user_name', '$password')";
    //             mysqli_query($con, $query);
    
    //         }else{
    //             // echo "bạn nhập sai";
    //         }
    //       }
    //       if ($_POST['step'] == 2) {
    //         $user_name_lg = $_POST['username_lg'];
    //         $password_lg = $_POST['password_lg'];
    //         if(!empty($user_name_lg) && !empty($password_lg) && !is_numeric(($user_name_lg))){
    //             // read from databass
    //             $query = "select * from users where user_name = '$user_name_lg'";
    //             $result =  mysqli_query($con, $query);
    //             if($result){
    //                 if($result && mysqli_num_rows($result) > 0){
    //                     $user_data =  mysqli_fetch_assoc($result);
        
    //                     if ($user_data['password'] == $password_lg){
    //                         $_SESSION['user_id'] = $user_data['user_id'];
    //                         echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
    //                     }else{
    //                         echo "<script type='text/javascript'>alert('Bạn nhập sai mật khẩu');</script>";
    //                     }
    //                 }
    //             }else
    //                 echo "<script type='text/javascript'>alert('Bạn nhập sai tài khoản');</script>";
    //         }else{
    //             // echo "bạn nhập sai";
    //         }

    //         session_destroy();
    //       }
      

      
    // }
?> -->

<?php
    include 'pages/xulygiohang.php';
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
    <link rel="stylesheet" href="css/style1.css">    

</head>
<style>
   /* Dropdown Button */
   .main {
        min-height: 800px;
    }
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }


    /* The container <div> - needed to position the dropdown content */

    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }


    /* Links inside the dropdown */

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }


    /* Change color of dropdown links on hover */

    .dropdown-content a:hover {
        background-color: #ddd;
    }


    /* Show the dropdown menu on hover */

    .dropdown:hover .dropdown-content {
        display: block;
    }


    /* Change the background color of the dropdown button when the dropdown content is shown */

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

</style>
<body class="bg-light">
<script>
    function refresh() {
        window.onload = function() {
            if (!window.location.hash) {
                window.location = window.location + '#loaded';
                window.location.reload();
            }
        }   
    }
    function click() {
        document.getElementById("userbtn").click();
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container ">
        <!-- <div class="container-fluid"> -->  
        <a class="navbar-brand mt-3 h1" href="index.php"><span class="d-inline-block" style="font-size: 20px;"><i class="fa fa-dragon mx-2" ></i> Nevidi Shop</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse row " id="navbarSupportedContent">
            <div class="col-lg-6">
                <form action="index.php?action=timkiem" method="post" class="d-flex input-group w-auto">
                    <input class="form-control me-0 mb-0 rounded" name="tukhoa" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
                    <button class="btn btn-lg btn-primary" name="timkiem" type="submit" style="background-color: #0a59cc; color: white;"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-lg-3 col-md-4  col-6 my-2   ">
                    <?php 
                        if(isset($_SESSION['dangnhap'])){                                
                    ?>  
                        <div class="dropdown">
                            <button class="my-btn"><i class="fa fa-user mr-2"></i><?php echo $_SESSION['dangnhap']; ?> </button>
                            <div class="dropdown-content">
                                <a href="">Quản lý tài khoản</a>
                                <a href="">Lịch sử đơn hàng</a>
                                <a href="?dangxuat=1">Đăng xuất</a>
                            </div>
                        </div>  
            
                                    
                    <?php    
                        }else{
                    ?>                        
                        <button type="button" id="userbtn" class="my-btn" data-toggle="modal" data-target="#loginModel">
                            <i class="fa fa-user mx"></i> Đăng Nhập / Đăng Ký
                        </button>
                    <?php    
                        };
                    ?>        
            </div>
            <div class="col-lg-3 col-6 my-2 ">
                <a href="?action=cart">
                    <button type="button" class="my-btn" data-bs-toggle="modal" data-bs-target="#loginModel">
                        <i class="fa fa-shopping-cart mx-1"></i></i> Giỏ hàng
                            <span class="bg-light text-dark p-1 rounded">
                                <?php 
                                    if(isset($_SESSION['giohang'])){
                                        $sum_soluong=0;
                                        foreach($_SESSION['giohang'] as $cart_item){      
                                            $sum_soluong += $cart_item['soluong'];
                                            // header('Location:../../cart.php');
                                        }
                                        echo $sum_soluong;
                                    }else echo 0;                                    
                                ?>
                            </span>
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

<?php 
    include 'pages/login.php';
?>