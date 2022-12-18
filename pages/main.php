<div class="main ">
    
    <?php
        if(isset($_GET['action']) ){
            $tam = $_GET['action'];           
        }else{
            $tam = '';
        }
        
        if($tam == 'danhmuc'){
            include("pages/danhmuc.php");
        }elseif($tam == 'cart'){
            include("pages/cart.php");
        }elseif($tam == 'timkiem'){
            include("pages/timkiem.php");
        }elseif($tam == 'camon'){
            include("pages/camon.php");
        }elseif($tam == 'resetpass'){
            include("pages/resetpass.php");
        }
        else{
            include("pages/dashboard.php");
        }
     
    ?>
</div>



