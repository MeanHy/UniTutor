@extends('app')
@section('title', 'UniTutor - Kiến thức, kinh nghiệm, trải nghiệm')
@section('content')
<style>
    .profile-card {
        border: 1px solid #f5c2c7;
        border-radius: 10px;
        padding: 20px;
        background-color: #fff;
    }

    .profile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .profile-header img {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        object-fit: cover;
    }

    .profile-header .profile-info {
        flex-grow: 1;
        margin-left: 20px;
    }

    .profile-header .profile-info h2 {
        margin: 0;
        font-size: 24px;
    }

    .profile-header .profile-info p {
        margin: 0;
        font-size: 16px;
        color: gray;
    }

    .profile-header .btn-register {
        background-color: #FFEEE8;
        color: #FF6636;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .profile-nav {
        border-top: 1px solid #f5c2c7;
        margin-top: 20px;
        padding-top: 10px;
    }

    .profile-nav a {
        color: gray;
        text-decoration: none;
        margin-right: 20px;
        font-size: 16px;
    }

    /* CSS cho navbar */
    .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
    }

    .navbar-nav .nav-link.active {
        background-color: rgba(225, 180, 96, 0.076);
        color: rgba(255, 255, 255, 1);
        position: relative;
    }

    .navbar-nav .nav-link.active::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: #ff6d00;
    }

    .navbar-nav .nav-link:hover {
        background-color: rgba(255, 165, 0, 0.1);
        color: rgba(255, 255, 255, 0.7);
    }

    .custom-select {
        color: rgba(255, 255, 255, 0.7);
        border: none;
        background-color: #262424;
        font-size: 14px;
    }

    .custom-select:hover {
        background-color: rgba(255, 165, 0, 0.1);
    }

    .custom-select option {
        background-color: #262424;
        color: rgba(255, 255, 255, 0.7);
    }

    .custom-select option:hover {
        background-color: rgba(255, 165, 0, 0.1);
        color: #000;
    }

    .profile-nav {
        display: flex;
        justify-content: space-around;
        margin-bottom: 0;
    }

    .profile-nav a {
        color: gray;
        text-decoration: none;
        padding: 10px 25px;
        position: relative;
        margin-bottom: -10px;
    }

    .profile-nav a:hover {
        background-color: rgba(255, 165, 0, 0.1);
    }

    .profile-nav a.active {
        color: orange;
    }

    .profile-nav a.active::after {
        content: '';
        display: block;
        width: 100%;
        height: 2px;
        background-color: orange;
        /* Màu thanh active */
        position: absolute;
        bottom: -10px;
        /* Đặt thanh xuống dưới 10px */
        left: 0;
    }

    .filters {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        margin-top: 50px;
        border-radius: 8px;
    }

    .search-bar {
        flex: 1;
        display: flex;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
    }

    .search-bar input {
        flex: 1;
        padding: 10px;
        border: none;
        outline: none;
    }

    .search-bar button {
        background-color: #fff;
        border: none;
        padding: 10px;
        cursor: pointer;
    }

    .search-icon {
        font-size: 20px;
    }

    .sort-filter,
    .status-filter,
    .teacher-filter {
        margin-left: 20px;
    }

    select {
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination button {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        margin: 0 5px;
        border-radius: 50%;
        cursor: pointer;
    }

    .pagination button.active {
        background-color: #FF5733;
        color: #fff;
    }

    .profile-header {
        background-color: #f9f9f9;
        padding: 20px 0;
        border-bottom: 1px solid #ebebeb;
    }

    .profile-header .user-info {
        display: flex;
        align-items: center;
    }

    .profile-header .user-info img {
        width: 80px;
        height: 80px;
        margin-right: 15px;
    }

    .profile-header .user-info h4 {
        margin: 0;
    }

    .table {
        border: 0.3px solid rgba(116, 115, 115, 0.308);
    }

    .nav-tabs {
        margin-top: 20px;
        border-bottom: 1px solid #ebebeb;
    }

    .nav-tabs .nav-item {
        padding: 10px 20px;
        color: #333;
    }

    .nav-tabs .nav-item.active {
        border-bottom: 3px solid #f76c6c;
        color: #f76c6c;
    }

    .table thead th {
        background-color: #f9f9f9;
        text-transform: uppercase;
        font-weight: bold;
        border: 0.3px solid rgba(116, 115, 115, 0.308);
    }

    .table td {
        vertical-align: middle;
        border: 0.3px solid rgba(116, 115, 115, 0.308);
    }

    .table img {
        height: 85px;
        border-radius: 4px;
    }

    .table .btn {
        margin-right: 10px;
    }

    .transaction-history {
        margin-top: 30px;
    }

    .transaction-header {
        cursor: pointer;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .transaction-header:hover {
        background-color: #e9ecef;
    }

    .transaction-details {
        display: none;
        padding: 15px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        margin-top: 10px;
    }

    .btn-collapse {
        border: none;
        background: none;
        float: right;
        font-size: 18px;
    }

    .transaction-content {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .transaction-left {
        display: flex;
        gap: 15px;
        /* Khoảng cách giữa ảnh và thông tin khóa học */
    }

    .transaction-right {
        margin-left: auto;
        text-align: right;
    }

    .upload-section {
        text-align: center;
        margin-bottom: 20px;
    }

    .upload-section img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        /* Thêm thuộc tính này */
    }

    .password-section {
        margin-top: 40px;
        /* Căn chỉnh khoảng cách giữa avatar và phần thay đổi mật khẩu */
    }

    .btn-custom {
        background-color: #ff9f1c;
        color: white;
        border: none;
    }

    .btn-custom:hover {
        background-color: #ff7f0c;
    }

    .row {
        align-items: flex-start;
    }

    .position-relative {
        position: relative;
    }

    .position-absolute {
        position: absolute;
    }
</style>
<div class="container mt-5">
    <div class="profile-card" style="margin: 0 70px;">
        <div class="profile-header">
            <div class="d-flex align-items-center">
                <img src="images/teacher1.jpg" alt="Profile Image">
                <div class="profile-info">
                    <h2>Kha</h2>
                    <p>Học viên tích cực - Đã học (23 khóa)</p>
                </div>
            </div>
            <button class="btn-register">Đăng ký làm giảng viên <i class="bi bi-arrow-right"></i></button>
        </div>
        <div class="profile-nav mt-4">
            <a href="#" class="active" onclick="changeTab(event, 'home')">Trang chủ</a>
            <a href="#" onclick="changeTab(event, 'course')">Đã học</a>
            <a href="#" onclick="changeTab(event, 'suggestions')">Gợi ý</a>
            <a href="#" onclick="changeTab(event, 'bookmarked')">Đã đánh dấu</a>
            <a href="#" onclick="changeTab(event, 'history')">Lịch sử</a>
            <a href="#" onclick="changeTab(event, 'settings')">Cài đặt</a>

        </div>
    </div>
    <div id="home" class="tab-content active" style="margin: 0 70px;">
        <section id="features" class="padding-medium">
            <div class="container">
                <h5>Thông tin chung</h5>
                <div class="row ">
                    <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                        <div class="feature-item1 py-5  rounded-4">
                            <div class="feature-detail text-center">
                                <h4 class="feature-title">23 lớp</h4>
                                <h6 class="feature-info text-uppercase">Đã học</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                        <div class="feature-item2 py-5  rounded-4">
                            <div class="feature-detail text-center">
                                <h4 class="feature-title">6</h4>
                                <h6 class="feature-info text-uppercase">Lớp đang học</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                        <div class="feature-item3 py-5  rounded-4">
                            <div class="feature-detail text-center">
                                <h4 class="feature-title">Rank <span>12</span></h4>
                                <h6 class="feature-info text-uppercase">Học viên tích cực</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
                        <div class="feature-item4 py-5  rounded-4">
                            <div class="feature-detail text-center">
                                <h4 class="feature-title"><span>10</span> Giảng viên</h4>
                                <h6 class="feature-info text-uppercase">Đã kết nối</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="courses" class="padding-medium">
            <div class="container">
                <h5>Lớp học nỗi bật</h5>
                <div class="row">
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="course" class="tab-content" style="display:none; margin: 0 70px;">
        <div class="filters">
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm khóa học">
                <button><i class="search-icon">&#128269;</i></button>
            </div>
            <div class="sort-filter">
                <select>
                    <option>Mới nhất</option>
                    <option>Cũ nhất</option>
                </select>
            </div>
            <div class="status-filter">
                <select>
                    <option>Tất cả khóa học</option>
                    <option>Đang học</option>
                </select>
            </div>
            <div class="teacher-filter">
                <select>
                    <option>Tất cả giảng viên</option>
                    <option>Giảng viên A</option>
                </select>
            </div>
        </div>

        <section id="courses" class="padding-medium">
            <div class="container">
                <h5>Lớp đã học (23)</h5>
                <div class="row">
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <button class="prev">←</button>
                <button>01</button>
                <button class="active">02</button>
                <button>03</button>
                <button>04</button>
                <button>05</button>
                <button class="next">→</button>
            </div>
        </section>
    </div>
    <div id="suggestions" class="tab-content" style="display:none; margin: 0 70px;">
        <div class="filters">
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm khóa học">
                <button><i class="search-icon">&#128269;</i></button>
            </div>
            <div class="sort-filter">
                <select>
                    <option>Mới nhất</option>
                    <option>Cũ nhất</option>
                </select>
            </div>
            <div class="status-filter">
                <select>
                    <option>Tất cả khóa học</option>
                    <option>Đang học</option>
                </select>
            </div>
            <div class="teacher-filter">
                <select>
                    <option>Tất cả giảng viên</option>
                    <option>Giảng viên A</option>
                </select>
            </div>
        </div>

        <section id="courses" class="padding-medium">
            <div class="container">
                <h5>Tìm thấy 10 khóa học phù hợp với bạn</h5>
                <div class="row">
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_details.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
                                    alt="image"></a>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between my-3">
                                    <p class="text-black-50 fw-bold text-uppercase m-0">Digital Marketing</p>
                                    <div class="d-flex align-items-center">
                                        <svg width="20" height="20">
                                            <use xlink:href="#clock" class="text-black-50"></use>
                                        </svg>
                                        <p class="text-black-50 fw-bold text-uppercase m-0">1h 50m</p>
                                    </div>
                                </div>
                                <a href="courses_details.html">
                                    <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet
                                    </h5>
                                </a>
                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <button class="prev">←</button>
                <button>01</button>
                <button class="active">02</button>
                <button>03</button>
                <button>04</button>
                <button>05</button>
                <button class="next">→</button>
            </div>
        </section>
    </div>
    <div id="bookmarked" class="tab-content" style="display:none; margin: 0 70px;">
        <div class="container mt-4">
            <h5>Đã đánh dấu (3)</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>COURSE</th>
                        <th>PRICES</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="images/item-lg1.jpg" alt="Course Image" class="mr-3"
                                style="margin-right: 10px;">
                            <div>
                                <span><i class="fas fa-star" style="color: gold;"></i><strong>4.6</strong> (451,444
                                    đã xem)</span>
                                <h5>Hướng dẫn làm Assignment môn SDP104</h5>
                                <p><small>Tạo bởi: </small>dungntse170397</p>
                            </div>
                        </td>
                        <td>
                            <span class="text-danger">20k</span> <del>35k</del>
                        </td>
                        <td>
                            <button class="btn btn-light">Xóa Đánh Dấu</button>
                            <button class="btn btn-danger">Book Giảng Viên</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="images/item-lg1.jpg" alt="Course Image" class="mr-3"
                                style="margin-right: 10px;">
                            <div>
                                <span><i class="fas fa-star" style="color: gold;"></i><strong>4.6</strong> (451,444
                                    đã xem)</span>
                                <h5>Hướng dẫn làm Assignment môn SDP104</h5>
                                <p><small>Tạo bởi: </small>dungntse170397</p>
                            </div>
                        </td>
                        <td>
                            <span class="text-danger">20k</span> <del>35k</del>
                        </td>
                        <td>
                            <button class="btn btn-light">Xóa Đánh Dấu</button>
                            <button class="btn btn-danger">Book Giảng Viên</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex align-items-center">
                            <img src="images/item-lg1.jpg" alt="Course Image" class="mr-3"
                                style="margin-right: 10px;">
                            <div>
                                <span><i class="fas fa-star" style="color: gold;"></i><strong>4.6</strong> (451,444
                                    đã xem)</span>
                                <h5>Hướng dẫn làm Assignment môn SDP104</h5>
                                <p><small>Tạo bởi: </small>dungntse170397</p>
                            </div>
                        </td>
                        <td>
                            <span class="text-danger">20k</span> <del>35k</del>
                        </td>
                        <td>
                            <button class="btn btn-light">Xóa Đánh Dấu</button>
                            <button class="btn btn-danger">Book Giảng Viên</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="history" class="tab-content" style="display:none; margin: 0 70px;">
        <div class="container">
            <div class="transaction-history">
                <h5>Lịch sử</h5>
                <!-- Repeatable Transaction Item -->
                <div class="transaction-item">
                    <div class="transaction-header d-flex justify-content-between align-items-center">
                        <div>
                            <strong>20/07/2024 vào lúc 11:30 PM</strong> - <span class="text-success">Đã thanh
                                toán</span>
                            <p>75k</p>
                        </div>
                        <button class="btn-collapse" onclick="toggleDetails(this)">&#x25BC;</button>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-content">
                            <!-- Left section with image and course info -->
                            <div class="transaction-left">
                                <div>
                                    <img src="images/item1.jpg" style="height: 100px; border-radius: 15px;"
                                        alt="Course Image" class="img-thumbnail">
                                </div>
                                <div>
                                    <h6>Hướng dẫn làm Assignment môn SDN301M</h6>
                                    <p>Tạo bởi: <strong>vuongbdde160256</strong></p>
                                    <p>Giá: <span class="text-success">20k</span> <span
                                            class="text-muted"><del>35k</del></span></p>
                                </div>
                            </div>

                            <!-- Right section with payment info -->
                            <div class="transaction-right">
                                <p>Thanh toán cho: <strong>Kevin Gilbert</strong></p>
                                <p>4142 **** **** ****</p>
                                <p>Ngày: 20/07</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Transaction Item Ends -->
            </div>
            <div class="transaction-history">
                <!-- Repeatable Transaction Item -->
                <div class="transaction-item">
                    <div class="transaction-header d-flex justify-content-between align-items-center">
                        <div>
                            <strong>20/07/2024 vào lúc 11:30 PM</strong> - <span class="text-success">Đã thanh
                                toán</span>
                            <p>75k</p>
                        </div>
                        <button class="btn-collapse" onclick="toggleDetails(this)">&#x25BC;</button>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-content">
                            <!-- Left section with image and course info -->
                            <div class="transaction-left">
                                <div>
                                    <img src="images/item1.jpg" style="height: 100px; border-radius: 15px;"
                                        alt="Course Image" class="img-thumbnail">
                                </div>
                                <div>
                                    <h6>Hướng dẫn làm Assignment môn SDN301M</h6>
                                    <p>Tạo bởi: <strong>vuongbdde160256</strong></p>
                                    <p>Giá: <span class="text-success">20k</span> <span
                                            class="text-muted"><del>35k</del></span></p>
                                </div>
                            </div>

                            <!-- Right section with payment info -->
                            <div class="transaction-right">
                                <p>Thanh toán cho: <strong>Kevin Gilbert</strong></p>
                                <p>4142 **** **** ****</p>
                                <p>Ngày: 20/07</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Transaction Item Ends -->
            </div>
            <div class="transaction-history">
                <!-- Repeatable Transaction Item -->
                <div class="transaction-item">
                    <div class="transaction-header d-flex justify-content-between align-items-center">
                        <div>
                            <strong>20/07/2024 vào lúc 11:30 PM</strong> - <span class="text-success">Đã thanh
                                toán</span>
                            <p>75k</p>
                        </div>
                        <button class="btn-collapse" onclick="toggleDetails(this)">&#x25BC;</button>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-content">
                            <!-- Left section with image and course info -->
                            <div class="transaction-left">
                                <div>
                                    <img src="images/item1.jpg" style="height: 100px; border-radius: 15px;"
                                        alt="Course Image" class="img-thumbnail">
                                </div>
                                <div>
                                    <h6>Hướng dẫn làm Assignment môn SDN301M</h6>
                                    <p>Tạo bởi: <strong>vuongbdde160256</strong></p>
                                    <p>Giá: <span class="text-success">20k</span> <span
                                            class="text-muted"><del>35k</del></span></p>
                                </div>
                            </div>

                            <!-- Right section with payment info -->
                            <div class="transaction-right">
                                <p>Thanh toán cho: <strong>Kevin Gilbert</strong></p>
                                <p>4142 **** **** ****</p>
                                <p>Ngày: 20/07</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Transaction Item Ends -->
            </div>
            <div class="transaction-history">
                <!-- Repeatable Transaction Item -->
                <div class="transaction-item">
                    <div class="transaction-header d-flex justify-content-between align-items-center">
                        <div>
                            <strong>20/07/2024 vào lúc 11:30 PM</strong> - <span class="text-success">Đã thanh
                                toán</span>
                            <p>75k</p>
                        </div>
                        <button class="btn-collapse" onclick="toggleDetails(this)">&#x25BC;</button>
                    </div>
                    <div class="transaction-details">
                        <div class="transaction-content">
                            <!-- Left section with image and course info -->
                            <div class="transaction-left">
                                <div>
                                    <img src="images/item1.jpg" style="height: 100px; border-radius: 15px;"
                                        alt="Course Image" class="img-thumbnail">
                                </div>
                                <div>
                                    <h6>Hướng dẫn làm Assignment môn SDN301M</h6>
                                    <p>Tạo bởi: <strong>vuongbdde160256</strong></p>
                                    <p>Giá: <span class="text-success">20k</span> <span
                                            class="text-muted"><del>35k</del></span></p>
                                </div>
                            </div>

                            <!-- Right section with payment info -->
                            <div class="transaction-right">
                                <p>Thanh toán cho: <strong>Kevin Gilbert</strong></p>
                                <p>4142 **** **** ****</p>
                                <p>Ngày: 20/07</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Transaction Item Ends -->
            </div>
        </div>
    </div>
    <div id="settings" class="tab-content" style="display:none; margin: 0 70px;">
        <div class="container">
            <div class="row mt-5">
                <h5>Cài đặt</h5>
                <div class="col-md-4">
                    <!-- Ảnh đại diện và upload -->
                    <div class="upload-section text-center">
                        <img id="userImage" src="images/teacher1.jpg" alt="User Image" style="cursor: pointer;">
                        <input type="file" id="fileInput" style="display: none;" accept="image/*">
                    </div>

                    <script>
                        document.getElementById('userImage').addEventListener('click', function() {
                            document.getElementById('fileInput').click(); // Mở hộp thoại chọn file  
                        });

                        document.getElementById('fileInput').addEventListener('change', function(event) {
                            const file = event.target.files[0]; // Lấy file đầu tiên được chọn  

                            if (file) {
                                const reader = new FileReader(); // Tạo đối tượng FileReader để đọc file  
                                reader.onload = function(e) {
                                    document.getElementById('userImage').src = e.target.result; // Cập nhật src của img với file mới  
                                };
                                reader.readAsDataURL(file); // Đọc file dưới dạng Data URL  
                            }
                        });
                    </script>
                    <p class="text-center">Ảnh nền nhỏ hơn 1M và ở tỉ lệ 1:1</p>

                    <!-- Phần Thay đổi mật khẩu -->
                    <div class="password-section mt-5">
                        <h5>Thay đổi mật khẩu</h5>
                        <form>
                            <div class="mb-3 position-relative">
                                <input type="password" id="currentPassword" class="form-control"
                                    placeholder="Mật khẩu hiện tại">
                                <span id="toggleCurrentPassword" class="position-absolute"
                                    style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" id="newPassword" class="form-control"
                                    placeholder="Mật khẩu mới">
                                <span id="toggleNewPassword" class="position-absolute"
                                    style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" id="confirmPassword" class="form-control"
                                    placeholder="Xác nhận lại mật khẩu mới">
                                <span id="toggleConfirmPassword" class="position-absolute"
                                    style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-custom">Xác Nhận</button>
                        </form>
                    </div>

                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

                    <style>
                        .position-relative {
                            position: relative;
                        }

                        .position-absolute {
                            position: absolute;
                        }
                    </style>

                    <script>
                        document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
                            const passwordInput = document.getElementById('currentPassword');
                            const icon = this.querySelector('i');

                            if (passwordInput.type === 'password') {
                                passwordInput.type = 'text';
                                icon.classList.remove('fa-eye');
                                icon.classList.add('fa-eye-slash');
                            } else {
                                passwordInput.type = 'password';
                                icon.classList.remove('fa-eye-slash');
                                icon.classList.add('fa-eye');
                            }
                        });

                        document.getElementById('toggleNewPassword').addEventListener('click', function() {
                            const passwordInput = document.getElementById('newPassword');
                            const icon = this.querySelector('i');

                            if (passwordInput.type === 'password') {
                                passwordInput.type = 'text';
                                icon.classList.remove('fa-eye');
                                icon.classList.add('fa-eye-slash');
                            } else {
                                passwordInput.type = 'password';
                                icon.classList.remove('fa-eye-slash');
                                icon.classList.add('fa-eye');
                            }
                        });

                        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
                            const passwordInput = document.getElementById('confirmPassword');
                            const icon = this.querySelector('i');

                            if (passwordInput.type === 'password') {
                                passwordInput.type = 'text';
                                icon.classList.remove('fa-eye');
                                icon.classList.add('fa-eye-slash');
                            } else {
                                passwordInput.type = 'password';
                                icon.classList.remove('fa-eye-slash');
                                icon.classList.add('fa-eye');
                            }
                        });
                    </script>
                </div>

                <div class="col-md-8">
                    <!-- Form Thông Tin -->
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="mb-3 position-relative">
                            <input type="text" id="userTitle" class="form-control"
                                placeholder="Your title, profession or small biography" maxlength="50">
                            <span id="charCount" class="position-absolute"
                                style="right: 10px; top: 50%; transform: translateY(-50%); font-size: 0.875rem;">0/50</span>
                        </div>

                        <style>
                            .position-relative {
                                position: relative;
                            }

                            .text-muted {
                                font-size: 0.875rem;
                                /* Thay đổi kích thước chữ nếu cần */
                            }
                        </style>

                        <script>
                            document.getElementById('userTitle').addEventListener('input', function() {
                                const maxLength = 50;
                                const currentLength = this.value.length;

                                document.getElementById('charCount').textContent = currentLength + '/' + maxLength;
                            });
                        </script>
                        <button type="submit" class="btn btn-custom">Lưu Thay Đổi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function changeTab(event, tabId) {
        // Ngăn không cho trình duyệt chuyển hướng  
        event.preventDefault();

        // Ẩn tất cả các tab khác  
        var tabs = document.getElementsByClassName("tab-content");
        for (var i = 0; i < tabs.length; i++) {
            tabs[i].style.display = "none";
        }

        // Bỏ chọn tất cả các liên kết trong thanh menu  
        var links = document.querySelectorAll('.profile-nav a');
        links.forEach(link => {
            link.classList.remove('active');
        });

        // Hiện tab được nhấn  
        document.getElementById(tabId).style.display = "block";

        // Đánh dấu liên kết hiện tại là active  
        event.currentTarget.classList.add('active');
    }

    // Giả lập chọn tab đầu tiên khi trang được tải  
    document.addEventListener("DOMContentLoaded", function() {
        var firstTab = document.querySelector('.profile-nav a');
        firstTab.click();
    });

    function toggleDetails(button) {
        const details = button.closest('.transaction-item').querySelector('.transaction-details');
        const isVisible = details.style.display === 'block';
        details.style.display = isVisible ? 'none' : 'block';
        button.innerHTML = isVisible ? '&#x25BC;' : '&#x25B2;';
    }
</script>
@endsection