<!DOCTYPE html>
<html lang="en">

<head>
    <title>Figure World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css/style_index.css" />
    <link rel="stylesheet" href="css/icon.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/3fd576ae50.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./assets/js/home.js"></script>
</head>

<body>
    <a href="#" data-toggle="modal" data-target="#serviceModal">
        <img src="images/icon/vip.png" class="bubbleicon" alt="vip">
    </a>
    <!--Nav bar-->
    <div style="overflow: hidden;">
        <div style="position: fixed; z-index: 1000; width: 100vw; top: 0; background-color: black;">
            <nav class="navbar navbar-expand-md  navbar-dark">
                <a href="index.html" style="width:40%;">
                    <img src="images/icon/logo.png" style="width: 50px;"/>
                </a>
                
                <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-content: center;">
                    <ul class="navbar-nav" style="justify-content: space-between; width: 100%;">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <a class="nav-link" href="product.html">Sản phẩm</a>
                                <div class="dropdown-content">
                                  <a href="product.html" class="item-sp">Figure</a>
                                  <a href="product.html" class="item-sp">Nendoroid</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html" >Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" >Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--carousel-->
        <div id="demo" class="carousel slide banner-carousel" data-ride="carousel" style="margin-top: 98px;">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/fig_1.webp" alt="Kurumi (Date A Live)" width="1100" height="500" style="margin: 0px 200px;">
                </div>

                <div class="carousel-item">
                    <img src="images/fig_2.webp" alt="Misa (Death Note)" width="1100" height="500" style="margin: 0px 200px;">
                </div>

            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next" >
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

         <!--Product-->
        
         <div id="navProduct">
            <h2 class="text-center font-weight-bold" style="color: #587330; margin-top: 50px;">DANH MỤC SẢN PHẨM</h2>
            <div style="height: 50px;"></div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 service-frame" style="margin-bottom: 20px;">
                            <a href="#" style="color: black;">
                                <img src="images/produce/fig_item_1.webp" style="width: 80%; height: 70%; margin-left: 10%" />
                                <h4 class="text-center" style="margin-top: 5px;">Figure 1</h4>
                            </a>
                            <div style="margin-left:15px ;">
                                <button class="btn btn-primary">-</button>
                                <input type="text" readonly="readonly" value="0" style="width: 20%; padding: 3.5px 0px 8px;" name="" id="">
                                <button class="btn btn-primary">+</button>
                                <input type="button" class="btn btn-primary" value="Thêm vào giỏ">
                            </div>
                        </div>

                        <div class="col-md-3 service-frame" style="margin-bottom: 20px;">
                            <a href="#" style="color: black;">
                                <img src="images/produce/fig_item_1.webp" style="width: 80%; height: 70%; margin-left: 10%" />
                                <h4 class="text-center" style="margin-top: 5px;">Figure 1</h4>
                            </a>
                            <div style="margin-left:15px ;">
                                <button class="btn btn-primary">-</button>
                                <input type="text" readonly="readonly" value="0" style="width: 20%; padding: 3.5px 0px 8px;" name="" id="">
                                <button class="btn btn-primary">+</button>
                                <input type="button" class="btn btn-primary" value="Thêm vào giỏ">
                            </div>
                        </div>

                        <div class="col-md-3 service-frame" style="margin-bottom: 20px;">
                            <a href="#" style="color: black;">
                                <img src="images/produce/fig_item_1.webp" style="width: 80%; height: 70%; margin-left: 10%" />
                                <h4 class="text-center" style="margin-top: 5px;">Figure 1</h4>
                            </a>
                            <div style="margin-left:15px ;">
                                <button class="btn btn-primary">-</button>
                                <input type="text" readonly="readonly" value="0" style="width: 20%; padding: 3.5px 0px 8px;" name="" id="">
                                <button class="btn btn-primary">+</button>
                                <input type="button" class="btn btn-primary" value="Thêm vào giỏ">
                            </div>
                        </div>
                        
                        <div class="col-md-3 service-frame" style="margin-bottom: 20px;">
                            <a href="#" style="color: black;">
                                <img src="images/produce/fig_item_1.webp" style="width: 80%; height: 70%; margin-left: 10%" />
                                <h4 class="text-center" style="margin-top: 5px;">Figure 1</h4>
                            </a>
                            <div style="margin-left:15px ;">
                                <button class="btn btn-primary">-</button>
                                <input type="text" readonly="readonly" value="0" style="width: 20%; padding: 3.5px 0px 8px;" name="" id="">
                                <button class="btn btn-primary">+</button>
                                <input type="button" class="btn btn-primary" value="Thêm vào giỏ">
                            </div>
                        </div>

                        <div class="col-md-3 service-frame" style="margin-bottom: 20px;">
                            <a href="#" style="color: black;">
                                <img src="images/produce/fig_item_1.webp" style="width: 80%; height: 70%; margin-left: 10%" />
                                <h4 class="text-center" style="margin-top: 5px;">Figure 1</h4>
                            </a>
                            <div style="margin-left:15px ;">
                                <button class="btn btn-primary">-</button>
                                <input type="text" readonly="readonly" value="0" style="width: 20%; padding: 3.5px 0px 8px;" name="" id="">
                                <button class="btn btn-primary">+</button>
                                <input type="button" class="btn btn-primary" value="Thêm vào giỏ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</body>
</html>