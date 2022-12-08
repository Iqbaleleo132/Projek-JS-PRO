<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSPRO</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tampro.css">

  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <!-- FONT AWESONE -->
  <script src="https://kit.fontawesome.com/078f865654.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="user.css">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');html, body{height: 100%}body{display: grid;background: #fff;font-family: 'Manrope', sans-serif}.mydiv{margin-top: 50px;margin-bottom: 50px}.cross{font-size:10px}.padding-0{padding-right: 5px;padding-left: 5px}.img-style{margin-left: -11px;box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);border-radius: 5px;max-width: 104% !important}.m-t-20{margin-top: 20px}.bbb_background{background-color: #E0E0E0 !important}.ribbon{width: 150px;height: 150px;overflow: hidden;position: absolute}.ribbon span{position: absolute;display: block;width: 34px;border-radius: 50%;padding: 8px 0;background-color: #3498db;box-shadow: 0 5px 10px rgba(0, 0, 0, .1);color: #fff;font: 100 18px/1 'Lato', sans-serif;text-shadow: 0 1px 1px rgba(0, 0, 0, .2);text-transform: uppercase;text-align: center}.ribbon-top-right{top: -10px;right: -10px}.ribbon-top-right::before, .ribbon-top-right::after{border-top-color: transparent;border-right-color: transparent}.ribbon-top-right::before{top: 0;left: 17px}.ribbon-top-right::after{bottom: 17px;right: 0}.sold_stars i{color: orange}.ribbon-top-right span{right: 17px;top: 17px}div{display: block;position: relative;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box}.bbb_deals_featured{width: 100%}.bbb_deals{width: 100%;margin-right: 7%;padding-top: 80px;padding-left: 25px;padding-right: 25px;padding-bottom: 34px;box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);border-radius: 5px;margin-top: 0px}.bbb_deals_title{position: absolute;top: 10px;left: 22px;font-size: 18px;font-weight: 500;color: #000000}.bbb_deals_slider_container{width: 100%}.bbb_deals_item{width: 100% !important}.bbb_deals_image{width: 100%}.bbb_deals_image img{width: 100%}.bbb_deals_content{margin-top: 33px}.bbb_deals_item_category a{font-size: 14px;font-weight: 400;color: rgba(0, 0, 0, 0.5)}.bbb_deals_item_price_a{font-size: 14px;font-weight: 400;color: rgba(0, 0, 0, 0.6)}.bbb_deals_item_price_a strike{color: red}.bbb_deals_item_name{font-size: 24px;font-weight: 400;color: #000000}.bbb_deals_item_price{font-size: 24px;font-weight: 500;color: #6d6e73}.available{margin-top: 19px}.available_title{font-size: 16px;color: rgba(0, 0, 0, 0.5);font-weight: 400}.available_title span{font-weight: 700}@media only screen and (max-width: 991px){.bbb_deals{width: 100%;margin-right: 0px}}@media only screen and (max-width: 575px){.bbb_deals{padding-left: 15px;padding-right: 15px}.bbb_deals_title{left: 15px;font-size: 16px}.bbb_deals_slider_nav_container{right: 5px}.bbb_deals_item_name, .bbb_deals_item_price{font-size: 20px}}
    </style>
    <!-- Awal Nav -->
    <header class="header bg-light ">
        <nav class="navbar navbar-expand-lg bg-light  ">
            <div class="container">
                <a href="afterlog.php" class="navbar-brand">
                    <h4 style="color:black"><b>JS</b> <span style="color:red">PRO</span></h4>
                </a>
                <form class="d-flex ms-auto ">
                    <input class="form-control me-2" type="search" placeholder="Cari Barang" aria-label="Search">
                    <button type="button" class="btn btn-dark"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXBJREFUSEu1lH1VA0EMxGcUgAUUAAoAB1QBVAGgAKqAooCigFZBWwdFAeCgVRDe8LK8Pbp7TT8u/93b2/1lkkmIjoMdv48iwMyOAdwBuAZw5kksAIwBvJBcRhNbA5jZLYBnAIKUQo8/kBxFIA2AP/7qFycAhiRn+jazSwBPAC78vEdSilrjD+Bl+fTM+7UMzUyQRwBScrKpXDkgXZyQVO2rYWZSJSUDkrpXjRygJp4CuEplqd3yck0BLEieRwGmH0mGrGtmof9zBaELKVsHrEjW3Pb7664lUo/eAcxJyl2hHqQmj0n2gk3WPAyjAEn9AnAkv5MclC5mNv3WlIdt6sOUpOtTVhRong2a/J9KstGijR5kzdOqkGwpKcXKzwWTtTXtb7UytS27e192mg3Fhy87Pbg0szQ3OhuR7JcgIc9XeiGlaW9VITsDvC/aqDdZAmtK9gJEIHsDCpDGJj4IIIPM/q/5gwG2smnb6G971rmCH/JPnxkOXXf0AAAAAElFTkSuQmCC"/></button>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation disable">
                     <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-1.5">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="container">
                            <div class="row">
                                <div class="navbar-nav ms-auto ">
                                    <a class="nav-link current" href="#">Home</a>
                                    <a class="nav-link" href="#">Categories</a>
                                    <a class="nav-link" href="#">Product</a>
                                    <!-- <a class="btn btn-secondary" href="login/index.php" role="button">login</a> 
                                    <a class="btn btn-secondary" href="register/index.php" role="button">Register</a> -->
                                    <div class="icons-home">
                                      <a href="#"><i class='bx bx-user'></i></a>
                                      <a href="#"><i class='bx bx-cart-alt ms-2'></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
        </nav>
        <!-- Akhir Nav -->
        
       <!-- awal carosuel -->
       <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide my-5" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/banner2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/banner.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
       <!-- akhir carosuel -->
    <!-- Kategori Awal -->
       <div class="container mt-5">
        <div class="judul-categorie" style="background-color: #fff; padding:5px 10px;">
            <h4 class="text-center" style="margin-top: 5px;">CATEGORIES</h4>
        </div>
        <div class="row text-center row-container mt-2">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/noodle.png" class="img-categorie mt-3" alt=""></a>
                    <p class="mt-2">instant Noodle</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/snack.png" class="img-categorie mt-3" alt=""></a>
                    <p class="mt-2">Snack</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/bread.png" class="img-categorie mt-3" alt=""></a>
                    <p class="mt-2">Bread</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/milk.png" class="img-categorie mt-3" alt=""></a>
                    <p class="mt-2">Milk</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/coffee.png" class="img-categorie mt-3" alt=""></a>
                    <p class="mt-2">Coffe</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href=""><img src="assets/water.png" class="img-categorie mt-3" alt=""></a>
                    <p class="mt-2">Water</p>
                </div>
            </div>
        </div>
       </div>
       <!-- Akhir Kategori -->

       <!-- awal produk -->
       <div class="container bg-light">
        <h3 class="text-center">New Product</h3>
        <div class="row">
            <div class="col-md-3 col-mt-4 col-6">
                <!-- bbb_deals -->
                <div class="bbb_deals">
                    <div class="ribbon ribbon-top-right"><span><small class="cross">x </small>6</span></div>
                    <div class="bbb_deals_title">Today's Offer</div>
                    <div class="bbb_deals_slider_container">
                        <div class=" bbb_deals_item">
                            <div class="bbb_deals_image"><img src="assets/SeekPng.com_nescafe-png_4243400.png" width="100px" alt=""></div>
                            <div class="bbb_deals_content">
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                    <div class="bbb_deals_item_category"><a href="#">Coffe</a></div>
                                </div>
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                    <div class="bbb_deals_item_name">Kopi Nescafe</div>
                                    <div class="bbb_deals_item_price ms-auto">Rp15.000</div>
                                </div>
                                <div class="btn-">
                                    <button type="button" class="btn btn-dark bg-dark"><a href="detailproduk.php" style="text-decoration: none;color:#fff;">Beli</a></button>
                                </div>
                                <div class="available">
                                    <div class="available_line d-flex flex-row justify-content-start">
                                        <div class="available_title">Available: <span>6</span></div>
                                        <div class="sold_stars ml-auto"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                    </div>
                                    <div class="available_bar"><span style="width:17%"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>