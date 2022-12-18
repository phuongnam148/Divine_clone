<?php 

    if(isset($_GET['action']) && $_GET['action']=='dangxuat'){
        unset($_SESSION['dangnhapadmin']);
        header("Location:login.php");
    }
?>

<p class="ml-2" style="font-size: 25px;">
    <?php 
        if(isset($_SESSION['dangnhapadmin'])){
            echo "Xin chào <strong>".$_SESSION['dangnhapadmin']."</strong>";
    ?>    
    <?php      
        }
    ?> 
</p>
<nav>
    <ul class="admincp_list">
        <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
        <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
        <li><a href="index.php?action=dangxuat">Đăng Xuất</a></li>
    </ul>
</nav>