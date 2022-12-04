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
    <link rel="stylesheet" href="css/style_about.css" />
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

        <!-- Contact -->
        <div id="navContact">
            <h2 class="text-center font-weight-bold" style="color: #587330; margin-top: 50px;">LIÊN HỆ</h2>
            <p class="text-center w-responsive mx-auto mb-5">Nếu bạn có thắc mắc về dịch vụ của chúng tôi? 
                Vui lòng liên hệ với chúng tôi thông qua form sau đây.
            </p>
            
            <div style="height: 50px;"></div>
            <section class="mb-4">
                <div class="row">
                    <div class="col-6 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>123 HCM, Việt Nam</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>2727272727</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>figureworld@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <div class="col-6 mb-md-0 mb-5" style="padding-right: 30px;">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label for="customer-name" class="col-sm-2 col-form-label">Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="contact-name">
                                    <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-contact-name"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="customer-email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="contact-email">
                                    <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-contact-email"></div>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="comment" class="col-sm-2 col-form-label">Lời nhắn:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="contact-comment"></textarea>
                                    <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-contact-comment"></div>
                                </div>
                                
                            </div>

                        </form>

                        <div id="contact-submit-success" class="text-center text-success" style="margin-bottom: 10px;"></div>

                        <div class="text-center text-md-center">
                            <a class="btn btn-primary contact-submit">Gửi</a>
                        </div>
                        <div class="status"></div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</body>
</html>