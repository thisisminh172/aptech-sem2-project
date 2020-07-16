<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YES GEAR</title>
    <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="public/reset.css" type="text/css"> -->
    <link rel="stylesheet" href="public/style.css" type="text/css">
    <link rel="stylesheet" href="public/css/fontawesome/css/all.css" type="text/css">


    <script src="public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- navigation -->
        <div id="header-wp">
            <!-- navbar link -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand text-light font-weight-bold bg-danger rounded p-3" id="logo" href="#">YESGEAR</a>
                <p class="text-light">BẤT cần đời, BUT cần gear</p>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="btn btn-outline-secondary nav-link text-white font-weight-bold" href="#"><i
                                    class="fas fa-home"></i> Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn btn-outline-warning nav-link text-white dropdown-toggle font-weight-bolder"
                                data-toggle="dropdown" data-display="static" href="#"><i class="fas fa-gamepad"></i> Sản
                                phẩm</a>
                            <div class="dropdown-menu dropdown-menu-left">
                                <div class="dropdown-header">GAMING GEARS</div>
                                <a class="dropdown-item text-dark" href="#">Tai nghe gaming</a>
                                <a class="dropdown-item" href="#">Bàn phím cơ</a>
                                <a class="dropdown-item" href="#">Chuột gaming</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-header">SẢN PHẨM KHÁC</div>
                                <a class="dropdown-item" href="#">Combo phím chuột</a>
                                <a class="dropdown-item" href="#">Chưa phân loại</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-secondary nav-link text-white font-weight-bold" href="#"><i
                                    class="far fa-address-card"></i> Giới thiệu</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-outline-secondary nav-link text-white font-weight-bold" href="#"><i
                                    class="far fa-newspaper"></i> Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-secondary nav-link text-white font-weight-bold" href="#"><i
                                    class="fas fa-phone"></i> Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline" action="" id="search-box">
                                <input class="form-control" type="text" placeholder="Nhập tên sản phẩm...">
                                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i>
                                    Search</button>
                            </form>
                        </li>
                        <li class="nav-item pt-2">
                            <div id="cart-wp">
                                <div id="cart"><i class="fas fa-shopping-cart text-danger"></i> <a href=""
                                        class="text-white">Giỏ hàng (<b>0</b> sản phẩm)</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid mr-1">
        <div class="row">