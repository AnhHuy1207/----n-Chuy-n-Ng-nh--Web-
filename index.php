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
    <!-- BubbleIcon -->
    <a href="#" data-toggle="modal" data-target="#serviceModal">
        <img src="images/icon/vip.png" class="bubbleicon" alt="vip">
    </a>

    <!--Menu-->
    <div style="overflow: hidden;">
        <div style="position: fixed; z-index: 1000; width: 100vw; background-color: black;">
            <nav class="navbar navbar-expand-md  navbar-dark">
                <a href="index.html" style="width:40%;">
                    <img src="images/icon/logo.png" style="width: 50px;"/>
                </a>
                
                <div class="collapse navbar-collapse" id="collapsibleNavbar" style="justify-content: center;">
                    <ul class="navbar-nav" style="justify-content: space-between; width: 100%;">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Trang ch???</a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <a class="nav-link" href="product.html">S???n ph???m</a>
                                <div class="dropdown-content">
                                  <a href="product.html" class="item-sp">Figure</a>
                                  <a href="product.html" class="item-sp">Nendoroid</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html" >Gi???i thi???u</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" >Li??n h???</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">????ng nh???p</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--banner-animation-->
        <div id="demo" class="carousel slide banner-carousel" data-ride="carousel" style="margin-top: 98px;">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/fig_1.webp" alt="Kurumi (Date A Live)" width="1100" height="500">
                    <div class="carousel-caption">
                        <form class="row domain-search bg-pblue">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7" style="left: 55mm;">
                                        <div class="input-group">
                                            <input type="search" placeholder="Search..." class="form-control">
                                            <span class="input-group-addon">
                                                <input type="submit" value="T??m ki???m" class="btn btn-primary">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/fig_2.webp" alt="Misa (Death Note)" width="1100" height="500">
                    <div class="carousel-caption">
                        <form class="row domain-search bg-pblue">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7" style="left: 55mm;">
                                        <div class="input-group">
                                            <input type="search" placeholder="Search..." class="form-control">
                                            <span class="input-group-addon">
                                                <input type="submit" value="T??m Ki???m" class="btn btn-primary">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
            <h2 class="text-center font-weight-bold" style="color: #587330; margin-top: 50px;">DANH M???C S???N PH???M</h2>
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
                                <input type="button" class="btn btn-primary" value="Th??m v??o gi???">
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
                                <input type="button" class="btn btn-primary" value="Th??m v??o gi???">
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
                                <input type="button" class="btn btn-primary" value="Th??m v??o gi???">
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
                                <input type="button" class="btn btn-primary" value="Th??m v??o gi???">
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
                                <input type="button" class="btn btn-primary" value="Th??m v??o gi???">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <!--Services-->
        <div id="navService">
            <h2 class="text-center font-weight-bold" style="color: #587330; margin-top: 100px;">D???ch v???</h2>
            <div style="height: 50px;"></div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4 service-frame" style="margin-bottom: 20px;">
                            <div style="display: flex; justify-content: center;">
                                <i class="fas fa-headphones" style="font-size: 4em;"></i>
                            </div>
                            <h3 class="text-center">Ch??m s??c kh??ch h??ng</h3>
                            <div class="text-center" style="margin-top: 10px;">
                                24/7 lu??n c?? nh??n vi??n t?? v???n t???n t??nh, gi???i ????p m???i th???c m???c c???a b???n
                            </div>
                            <div style="display: flex; justify-content: center; margin-top: 20px;">
                                <a style="color: chocolate" href="./pages/service.html">Chi ti???t &rarr;</a>
                            </div>
                        </div>

                        <div class="col-md-4 service-frame" style="margin-bottom: 20px;">
                            <div style="display: flex; justify-content: center;">
                                <i class="fas fa-shipping-fast" style="font-size: 4em;"></i>
                            </div>
                            <h3 class="text-center">Mi???n ph?? giao h??ng</h3>
                            <div class="text-center" style="margin-top: 10px;">
                                Mi???n ph?? giao h??ng m???i t??nh th??nh v???i ho?? ????n > 250,000 VND
                            </div>
                            <div style="display: flex; justify-content: center; margin-top: 20px;">
                                <a style="color: chocolate" href="./pages/service.html">Chi ti???t &rarr;</a>
                            </div>

                        </div>

                        <div class="col-md-4 service-frame">
                            <div style="display: flex; justify-content: center;">
                                <i class="fas fa-exchange-alt" style="font-size: 4em;"></i>
                            </div>
                            <h3 class="text-center">Cho ph??p ?????i tr???</h3>
                            <div class="text-center" style="margin-top: 10px;">
                                Cho ph??p ?????i tr??? trong v??ng 7 ng??y mua h??ng
                            </div>
                            <div style="display: flex; justify-content: center; margin-top: 20px;">
                                <a style="color: chocolate" href="./pages/service.html">Chi ti???t &rarr;</a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>


        <!--Service price-->
        <div id="navPricing">
            <h2 class="text-center font-weight-bold" style="color: #587330; margin-top: 100px;">??u ????i</h2>
            <div style="height: 50px;"></div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4" style="margin-bottom: 20px;">
                            <div class="card">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: center;">
                                        <i class="fas fa-gift" style="font-size: 4em;"></i>
                                    </div>
                                    <h3 class="text-center">Khuy???n m??i Combo</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-center" style="margin-top: 10px;">
                                        Khi mua 3 s???n ph???m b???t k?? s??? ???????c gi???m gi?? ngay 10% tr??n t???ng ho?? h??n
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="button" class="btn btn-primary open-service-modal" data-toggle="modal"
                                        data-target="#serviceModal" data-service="service1">
                                        L???a ch???n
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="margin-bottom: 20px;">
                            <div class="card">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: center;">
                                        <i class="fas fa-arrows-alt-h" style="font-size: 4em;"></i>
                                    </div>
                                    <h3 class="text-center">Thu c?? ?????i m???i</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-center" style="margin-top: 10px;">
                                        Mang b???t k?? s???n ph???m ???? mua t???i c???a h??ng ?????n ????? ???????c gi???m 50% tr??n t???ng ho?? ????n
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="button" class="btn btn-primary open-service-modal" data-toggle="modal"
                                        data-target="#serviceModal" data-service="service2">
                                        L???a ch???n
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: center;">
                                        <i class="far fa-id-card" style="font-size: 4em;"></i>
                                    </div>
                                    <h3 class="text-center">????ng k?? th??? th??nh vi??n</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-center" style="margin-top: 10px;">
                                        ????ng k?? th??? th??nh vi??n ????? ???????c gi???m 10% tr??n t???ng ho?? ????n
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="button" class="btn btn-primary open-service-modal" data-toggle="modal"
                                        data-target="#serviceModal" data-service="service3">
                                        L???a ch???n
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>

        <!-- Service price The Modal -->

        <!-- <div class="modal" id="serviceModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Form ????ng k?? d???ch v???</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="name">T??n:</label>
                                <input type="text" class="form-control" placeholder="Nh???p t??n" id="serviceModalName">
                                <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-service-name"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" placeholder="Nh???p email" id="serviceModalEmail">
                                <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-service-email"></div>
                            </div>
                            <div class="form-group">
                                <label for="phonenumber">S??? ??i???n tho???i:</label>
                                <input type="text" class="form-control" placeholder="Nh???p s??? ??i???n tho???i"
                                    id="serviceModalPhoneNumber">

                                <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-service-phone"></div>
                            </div>
                            <br />
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="checkService1">Khuy???n m??i combo
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="checkService2">Thu c?? ?????i m???i
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  id="checkService3" >????ng k?? th??? th??nh vi??n
                                </label>
                            </div>

                            <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-service-check"></div>
                            <br />

                            <div class="form-group">
                                <label for="comment">Th??ng tin th??m:</label>
                                <textarea class="form-control" rows="5" id="serviceModalComment"></textarea>
                                <div style="color: red; font-size: .8em; margin-top: 7px;" id="invalid-service-comment"></div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary service-submit-modal">G???i</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">????ng</button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="modal" id="serviceModal">
            <div class="modal-dialog">
                    <!-- <h2 class="text-center font-weight-bold" style="color: #587330; margin-top: 100px;">??u ????i</h2> -->
                    <div style="height: 50px;"></div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row" >
                                <div class="col-md-4" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header">
                                            <div style="display: flex; justify-content: center;">
                                                <i class="fas fa-gift" style="font-size: 4em;"></i>
                                            </div>
                                            <h3 class="text-center">Khuy???n m??i Combo</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center" style="margin-top: 10px;">
                                                Khi mua 3 s???n ph???m b???t k?? s??? ???????c gi???m gi?? ngay 10% tr??n t???ng ho?? h??n
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="button" class="btn btn-primary open-service-modal" data-toggle="modal"
                                                data-target="#serviceModal" data-service="service1">
                                                L???a ch???n
                                            </button>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-md-4" style="margin-bottom: 20px;">
                                    <div class="card">
                                        <div class="card-header">
                                            <div style="display: flex; justify-content: center;">
                                                <i class="fas fa-arrows-alt-h" style="font-size: 4em;"></i>
                                            </div>
                                            <h3 class="text-center">Thu c?? ?????i m???i</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center" style="margin-top: 10px;">
                                                Mang b???t k?? s???n ph???m ???? mua t???i c???a h??ng ?????n ????? ???????c gi???m 50% tr??n t???ng ho?? ????n
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="button" class="btn btn-primary open-service-modal" data-toggle="modal"
                                                data-target="#serviceModal" data-service="service2">
                                                L???a ch???n
                                            </button>
                                        </div>
                                    </div>
        
                                </div>
        
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <div style="display: flex; justify-content: center;">
                                                <i class="far fa-id-card" style="font-size: 4em;"></i>
                                            </div>
                                            <h3 class="text-center">????ng k?? th??? th??nh vi??n</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center" style="margin-top: 10px;">
                                                ????ng k?? th??? th??nh vi??n ????? ???????c gi???m 10% tr??n t???ng ho?? ????n
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="button" class="btn btn-primary open-service-modal" data-toggle="modal"
                                                data-target="#serviceModal" data-service="service3">
                                                L???a ch???n
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        

        <!--Footer-->
        
        <footer class="page-footer font-small stylish-color-dark pt-4" style="background: #e3e3e3; overflow: hidden;">
            <div class=" text-center text-md-left">
                <div class="row">
                    <div class="col-md-3 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4"></h5>
                        <p>
                            Xin c???m ??n ???? l???a ch???n c???a h??ng c???a ch??ng t??i<br/>
                            <table>
                                <tr>
                                    <td>Tr???n Tri???u T???n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>DH51902345</td>
                                </tr>
                                <tr>
                                    <td>Nguy???n Trang Anh Huy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>DH51902365</td>
                                </tr>
                            </table>
                        </p>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Li??n k???t</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Ch??nh s??ch ?????i tr???</a>
                            </li>
                            <li>
                                <a href="#!">Ch??nh s??ch b???o m???t</a>
                            </li>
                            <li>
                                <a href="#!">??i???u kho???n d???ch v???</a>
                            </li>
                        </ul>

                    </div>

                    <hr class="clearfix w-100 d-md-none">

                    <div class="col-md-2 mx-auto">

                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Chi nh??nh</h5>

                        <ul class="list-unstyled">
                            <li>
                                H??? Ch?? Minh
                            </li>
                            <li>
                                ???? N???ng
                            </li>
                            <li>
                                H???i Ph??ng
                            </li>
                            <li>
                                B??nh D????ng
                            </li>
                        </ul>

                    </div>
                    <hr class="clearfix w-100 d-md-none">
                </div>

            </div>

            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1">
                        <i class="fab fa-dribbble"> </i>
                    </a>
                </li>
            </ul>

        </footer>
    </div>
</body>

</html>