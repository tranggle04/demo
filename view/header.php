<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div>
        <div class="boxcenter">
            <div class="row mb header">
                <h1>Siêu thị trực tuyến</h1>
            </div>
            <div class="row mb menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    <li><a href="index.php?act=gopy">Góp ý</a></li>
                    <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                </ul>
                <div class="formSearchHome" >
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw" placeholder="Tìm kiếm sản phẩm">
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LQD STORE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap Ecommerce Template" name="keywords">
    <meta content="Bootstrap Ecommerce Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Header Start -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="">
                            <img src="img/logo.jpg" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" placeholder="Tìm kiếm" name="kyw" required>
                            <button><i class="fa fa-search" name="timkiem"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="user">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                            <div class="dropdown-menu">
                                <a href="index.php?act=dangnhap" class="dropdown-item">Đăng nhập</a>
                                <a href="index.php?act=dangky" class="dropdown-item">Đăng ký</a>
                            </div>

                        </div>
                        <div class="cart">
                            <a href="index.php?act=addcart"><i class="fa fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>