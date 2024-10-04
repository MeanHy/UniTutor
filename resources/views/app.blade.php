<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <defs>
            <symbol id="plus" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol id="minus" viewBox="0 0 24 24">
                <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
            </symbol>
            <symbol id="trash" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
            </symbol>
            <symbol id="date" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M9 10H7v2h2zm4 0h-2v2h2zm4 0h-2v2h2zm2-7h-1V1h-2v2H8V1H6v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H5V8h14z" />
            </symbol>
            <symbol id="facebook" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02" />
            </symbol>
            <symbol id="youtube" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73" />
            </symbol>
            <symbol id="instagram" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
            </symbol>
            <symbol id="twitter" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23" />
            </symbol>
            <symbol id="linkedin" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z" />
            </symbol>
            <symbol id="tick-circle" viewBox="0 0 15 15">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0m7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768z"
                    clip-rule="evenodd" />
            </symbol>
            <symbol id="clock" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M15.098 12.634L13 11.423V7a1 1 0 0 0-2 0v5a1 1 0 0 0 .5.866l2.598 1.5a1 1 0 1 0 1-1.732M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2m0 18a8 8 0 1 1 8-8a8.01 8.01 0 0 1-8 8" />
            </symbol>
            <symbol id="search" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39M11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7" />
            </symbol>
            <symbol id="user-circle" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M12 2a10 10 0 0 0-7.35 16.76a10 10 0 0 0 14.7 0A10 10 0 0 0 12 2m0 18a8 8 0 0 1-5.55-2.25a6 6 0 0 1 11.1 0A8 8 0 0 1 12 20m-2-10a2 2 0 1 1 2 2a2 2 0 0 1-2-2m8.91 6A8 8 0 0 0 15 12.62a4 4 0 1 0-6 0A8 8 0 0 0 5.09 16A7.92 7.92 0 0 1 4 12a8 8 0 0 1 16 0a7.92 7.92 0 0 1-1.09 4" />
            </symbol>
            <symbol id="shopping-bag" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 4 0v1h-4Zm8 13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h4v1a1 1 0 0 0 2 0V9h2Z" />
            </symbol>
            <symbol id="heart" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M20.16 5A6.29 6.29 0 0 0 12 4.36a6.27 6.27 0 0 0-8.16 9.48l6.21 6.22a2.78 2.78 0 0 0 3.9 0l6.21-6.22a6.27 6.27 0 0 0 0-8.84m-1.41 7.46l-6.21 6.21a.76.76 0 0 1-1.08 0l-6.21-6.24a4.29 4.29 0 0 1 0-6a4.27 4.27 0 0 1 6 0a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 0a4.29 4.29 0 0 1 .08 6Z" />
            </symbol>
        </defs>
    </svg>

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart"
        aria-labelledby="My Cart">
        <div class="offcanvas-header mt-3">
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-4">
                    <span>Your Cart</span>
                    <span class="badge bg-primary rounded-circle pt-2 text-white">3</span>
                </h4>

                <ul class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
                        <div>
                            <h6 class="my-0">Marketing Course</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$120</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
                        <div>
                            <h6 class="my-0">Strategy Course</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$80</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3 lh-sm">
                        <div>
                            <h6 class="my-0">Digital Course</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$50</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                        <span class="fw-bold">Total (USD)</span>
                        <strong>$250</strong>
                    </li>
                </ul>

                <div class="d-grid my-5">
                    <button class="btn btn-primary px-5 py-3" type="submit">Continue to checkout</button>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
        aria-labelledby="Search">
        <div class="offcanvas-header mt-3">
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="order-md-last">
                <h4 class="text-primary text-uppercase mb-3">
                    Search
                </h4>
                <div class="search-bar border rounded-2 border-dark-subtle">
                    <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
                        <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #262424;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
                aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="courses.html">Khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng ký làm giảng viên</a>
                    </li>
                </ul>
                <select class="form-select custom-select me-3" style="width: 100px; height: 35px;">
                    <option value="vnd">VNĐ</option>
                    <option value="usd">USD</option>
                    <option value="eur">EUR</option>
                </select>

                <!-- Select cho ngôn ngữ -->
                <select class="form-select custom-select" style="width: 130px; height: 35px;">
                    <option value="vietnamese">Tiếng Việt</option>
                    <option value="english">English</option>
                </select>

            </div>
        </div>
    </nav>
    @if (!Request::is('/'))
    <nav class="navbar navbar-light" style="position: relative;">
        <div class="d-flex align-items-center w-50">
            <!-- Logo bên trái -->
            <a class="navbar-brand me-1" href="#">
                <img src="images/logo.png" height="60" class="d-inline-block align-top" alt="Logo">
            </a>

            <!-- Nút dropdown ở giữa -->
            <select class="form-select me-2" aria-label="Select danh mục"
                style="inline-size: auto; max-inline-size: 150px;">
                <option value="option1">Doanh mục 1</option>
                <option value="option2">Doanh mục 2</option>
                <option value="option3">Doanh mục 3</option>
            </select>

            <!-- Thanh tìm kiếm bên phải -->
            <form class="d-flex flex-grow-1">
                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search"
                    style="width: 100%;">
            </form>
        </div>
        <!-- Đường kẻ ngang mờ -->
        <div style="border-top: 1px solid rgba(0, 0, 0, 0.1); position: absolute; left: 0; right: 0; bottom: 0;"></div>
        <div class="d-none d-lg-flex align-items-center" style="margin-right: 20px;">
            <ul class="d-flex  align-items-center list-unstyled m-0">
                <li>
                    <a href="wishlist.html" class="ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#heart" />
                        </svg> </a>
                    </a>
                </li>

                <li class="">
                    <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                        aria-controls="offcanvasCart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#shopping-bag" />
                        </svg> </a>
                    </a>
                </li>

                <li>
                    <a href="#" class="ms-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                        aria-controls="offcanvasSearch">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#search" />
                        </svg> </a>
                    </a>
                </li>
                <li>
                    <a href="account.html" class="ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#user-circle" />
                        </svg> </a>
                </li>
                <li class="ms-3">
                    <a href="register.html" class="btn btn-primary btn-sm">Đăng ký</a>
                </li>
                <li class="ms-3">
                    <a href="login.html" class="btn btn-outline-primary btn-sm">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </nav>
    @endif

    @yield('content')

    <footer id="footer">
        <div class="container padding-medium ">
            <div class="row">
                <div class="col-sm-6 col-lg-4 my-3">
                    <div class="footer-menu">
                        <a href="index.html">
                            <img src="images/logo.png" alt="logo" class="img-fluid">
                        </a>
                        <div class="social-links mt-4">
                            <ul class="d-flex list-unstyled ">
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#instagram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#linkedin"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-4">
                                    <a href="#">
                                        <svg class="social-icon" width="30" height="30" aria-hidden="true">
                                            <use xlink:href="#youtube"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 my-3">
                    <div class="footer-menu">
                        <h5 class=" fw-bold mb-4">Quick Links</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Home</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">About us</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Courses</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Blogs</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 my-3">
                    <div class="footer-menu">
                        <h5 class=" fw-bold mb-4">About</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">How It Works</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Pricing</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Promotion</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Affilation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 my-3">
                    <div class="footer-menu">
                        <h5 class=" fw-bold mb-4">Help Center</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Payments</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">FAQs</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Checkout</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Other</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 my-3">
                    <div class="footer-menu">
                        <h5 class=" fw-bold mb-4">Contact Us</h5>
                        <ul class="menu-list list-unstyled">
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">huyle04180@gmail.com</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">+84 356153002</a>
                            </li>
                            <li class="menu-item mb-2">
                                <a href="#" class="footer-link">Hồ Chí Minh, Việt Nam</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="footer-bottom">
        <hr class="text-black-50">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6 copyright">
                    <p>© 2024 - Bản quyền mới UniTutor - <a href="https://github.com/MeanHy">MinHuy</a></p>
                </div>
                <!-- <div class="col-md-6 text-md-end">
          <p>Free HTML Template by: <a href="https://templatesjungle.com/" target="_blank" class="fw-bold">
              TemplatesJungle</a> Distributed by: <a href="https://themewagon.com" target="_blank" class="fw-bold">
              ThemeWagon
            </a></p>
        </div> -->
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popper/js/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist//js/bootstrap.min.js"></script>
</body>

</html>