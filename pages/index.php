
<?php 
session_start();
include 'header.php'; 
?>
    <div class="container  my-2 ">

        <div class="row row-eq-height ">
            <div class="col-12 col-lg-8 my-2 ">
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
        <h4>Game trên Steam</h4>
        <p>Những trò chơi được đánh giá tốt, nội dung hấp dẫn thu hút đang chờ bạn</p>
        <div class="card-deck row my-2">
            <div class="col-lg-3 col-md-6 col-12 pb-2 ">
                <a href="#" >
                    <img class="card-img-top" src="https://steamcdn-a.akamaihd.net/steam/apps/1245620/header.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Elden Ring (CD Key Steam)</h5>
                        <p class="card-text">790.000đ <del class="mx-2">800.000đ</del>
                            <span id="sale-box">-1%</span> </p>
                    </div>
                </a>
                <form action="cart.php" method="get">              
                    <label for="addCart" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart" class="d-none" >
               
                    <input type="hidden" name="tenSP" value="Elden Ring (CD Key Steam)">
                    <input type="hidden" name="gia" value="790.000">
                    <input type="hidden" name="hinh" value="https://steamcdn-a.akamaihd.net/steam/apps/1245620/header.jpg">
                        
                </form>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-2">
                <a href="#">
                    <img class="card-img-top" src="https://cdn.divineshop.vn/image/catalog/Anh-san-pham/GTA%20V19.png?hash=1629362388" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Grand Theft Auto V: Premium Edition (GTA 5)</h5>
                        <p class="card-text">225.000đ
                            <del class="mx-2">459.000đ</del>
                            <span id="sale-box">-51%</span> </p>
                    </div>
                </a>
                <form action="cart.php" method="get"> 
                    <label for="addCart2" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart2" class="d-none" >
            
                    <input type="hidden" name="tenSP" value="Grand Theft Auto V: Premium Edition (GTA 5)">
                    <input type="hidden" name="gia" value="459.000">
                    <input type="hidden" name="hinh" value="https://cdn.divineshop.vn/image/catalog/Anh-san-pham/GTA%20V19.png?hash=1629362388">
                        
                  
                </form>
            </div>
            <div class="col-lg-3 col-md-6 col-12  pb-2">
                <a href="#">
                    <img class="card-img-top" src="https://steamcdn-a.akamaihd.net/steam/apps/941973/header.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Devil May Cry 5 - 1000000 Red Orbs</h5>
                        <p class="card-text">136.000đ <del class="mx-2">273.000đ</del>
                            <span id="sale-box">-50%</span> </p>
                    </div>
                </a>
                <form action="cart.php" method="get">

                    <label for="addCart3" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart3" class="d-none" >
                        <input type="hidden" name="tenSP" value="Devil May Cry 5 - 1000000 Red Orbs">
                        <input type="hidden" name="gia" value="273.000">
                        <input type="hidden" name="hinh" value="https://steamcdn-a.akamaihd.net/steam/apps/941973/header.jpg">
        
                </form>
            </div>
            <div class="col-lg-3 col-md-6 pb-2">
                <a href="#">
                    <img class="card-img-top" src="https://cdn.cloudflare.steamstatic.com/steam/apps/1313860/header.jpg?t=1610974344" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">EA SPORTS™ FIFA 21 Champions Edition</h5>
                        <p class="card-text">1.750.000đ </p>
                    </div>
                </a>
               <form action="cart.php" method="get">
                     <label for="addCart4" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart4" class="d-none" >
                        <input type="hidden" name="tenSP" value="EA SPORTS™ FIFA 21 Champions Edition">
                        <input type="hidden" name="gia" value="1.750.000">
                        <input type="hidden" name="hinh" value="https://cdn.cloudflare.steamstatic.com/steam/apps/1313860/header.jpg?t=1610974344">
                 
                </form>
            </div>

        </div>
        <div class="card-deck row my-2">
            <div class="col-lg-3 col-md-6 col-12 pb-2 ">
                <a href="#" >
                    <img class="card-img-top" src="https://steamcdn-a.akamaihd.net/steam/apps/582160/header.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Assassin's Creed® Origins - Gold Edition</h5>
                        <p class="card-text">293.000đ <del class="mx-2">1.405.000đ</del>
                            <span id="sale-box">-79%</span> </p>
                    </div>
                </a>
                <form action="cart.php" method="get">              
                    <label for="addCart" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart" class="d-none" >
               
                    <input type="hidden" name="tenSP" value="Assassin's Creed® Origins - Gold Edition">
                    <input type="hidden" name="gia" value="293.000">
                    <input type="hidden" name="hinh" value="https://steamcdn-a.akamaihd.net/steam/apps/582160/header.jpg">
                        
                </form>
            </div>
            <div class="col-lg-3 col-md-6 col-12 pb-2">
                <a href="#">
                    <img class="card-img-top" src="https://steamcdn-a.akamaihd.net/steam/apps/431960/header.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wallpaper Engine</h5>
                        <p class="card-text">69.000đ
                            </p>
                    </div>
                </a>
                <form action="cart.php" method="get"> 
                    <label for="addCart2" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart2" class="d-none" >
            
                    <input type="hidden" name="tenSP" value="Wallpaper Engine">
                    <input type="hidden" name="gia" value="69.000đ">
                    <input type="hidden" name="hinh" value="https://steamcdn-a.akamaihd.net/steam/apps/431960/header.jpg">
                        
                  
                </form>
            </div>
            <div class="col-lg-3 col-md-6 col-12  pb-2">
                <a href="#">
                    <img class="card-img-top" src="https://steamcdn-a.akamaihd.net/steam/apps/967050/header.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pacify</h5>
                        <p class="card-text">136.000đ <del class="mx-2">69.000đ</del>
                            <span id="sale-box">-50%</span> </p>
                    </div>
                </a>
                <form action="cart.php" method="get">

                    <label for="addCart3" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart3" class="d-none" >
                        <input type="hidden" name="tenSP" value="Pacify">
                        <input type="hidden" name="gia" value="69.000">
                        <input type="hidden" name="hinh" value="https://steamcdn-a.akamaihd.net/steam/apps/941973/header.jpg">
        
                </form>
            </div>
            <div class="col-lg-3 col-md-6 pb-2">
                <a href="#">
                    <img class="card-img-top" src="https://steamcdn-a.akamaihd.net/steam/apps/387990/header.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Scrap Mechanic</h5>
                        <p class="card-text">186.000đ </p>
                    </div>
                </a>
               <form action="cart.php" method="get">
                     <label for="addCart4" class="btn btn-primary btn-block rounded"><i class="fa fa-cart-plus mx-2 "></i>Thêm vào giỏ</label>
                    <input type="submit" name="addCart" id="addCart4" class="d-none" >
                        <input type="hidden" name="tenSP" value="EA SPORTS™ FIFA 21 Champions Edition">
                        <input type="hidden" name="gia" value="1.750.000">
                        <input type="hidden" name="hinh" value="https://cdn.cloudflare.steamstatic.com/steam/apps/1313860/header.jpg?t=1610974344">
                 
                </form>
            </div>

        </div>
      
    </div>


<?php include './footer.php' ?>