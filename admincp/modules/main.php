<div class="clear"> </div>
<div class="main ">
   
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
            $query = '';
        }
        
        if($tam == 'quanlydanhmucsanpham' && $query=='them'){
            include("modules/quanlydanhmuc/them.php");
            include("modules/quanlydanhmuc/lietke.php");
        }elseif($tam == 'quanlydanhmucsanpham' && $query=='sua'){
            include("modules/quanlydanhmuc/sua.php");
        }elseif($tam == 'quanlysanpham' && $query=='them'){
            include("modules/quanlysanpham/them.php");
            include("modules/quanlysanpham/lietke.php");
        }elseif($tam == 'quanlysanpham' && $query=='sua'){
            include("modules/quanlysanpham/sua.php");
        }
        else{
            include("modules/dashboard.php");
        }
     
    ?>
</div>