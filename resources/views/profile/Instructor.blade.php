@extends('app')
@section('title', 'UniTutor - Kiến thức, kinh nghiệm, trải nghiệm')
@section('content')
<style>
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
        display: flex;
        align-items: center;
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .profile-header img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
        object-fit: cover;
    }

    .info {
        flex: 1;
    }

    .rating {
        color: #ffc107;
    }

    .price {
        font-size: 24px;
        color: #dc3545;
        font-weight: bold;
    }

    .high-rating {
        color: #28a745;
    }

    .star-rating {
        color: #ffc107;
    }

    .about-me {
        flex: 1;
        max-width: 350px;
    }

    .boder {
        background-color: #f8f9fa;
        box-shadow: black;
        padding: 10px;
        height: auto;
    }

    .courses-container {
        flex: 2;
    }

    .course-card {
        background-color: #e2e3e5;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px;
        padding: 15px;
    }

    .course-card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .pagination button {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 5px;
        margin: 0 5px;
        border-radius: 50%;
        cursor: pointer;
    }

    .pagination button.active {
        background-color: #FF5733;
        color: #fff;
    }

    /* sadad */
    .review-container {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .review {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .review img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-right: 20px;
        object-fit: cover;
    }

    .review-content {
        flex-grow: 1;
    }

    .review-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .rating {
        color: #ffc107;
    }

    h2 {
        margin-bottom: 20px;
    }
</style>
<section id="banner">
    <div class="container padding-medium">
        <div class="hero-content ">
            <nav class="breadcrumb">
                <a class="breadcrumb-item text-black-50" href="#">Home</a>
                <a class="breadcrumb-item text-black-50" href="#">Pages</a>
                <span class="breadcrumb-item active" aria-current="page">Wishlist</span>
            </nav>
        </div>
    </div>
</section>
<div class="container mt-5">
    <div class="profile-header">
        <img src="images/teacher1.jpg" alt="Profile Picture">
        <div class="info">
            <h1>Trần Hoàng Đức</h1>
            <p>Giáo sư về công nghệ thông tin và kinh tế</p>
            <p class="rating"><i class="fas fa-star"></i> 4.8 (341 đánh giá) | 1200 học viên | 6 khóa học</p>
        </div>
        <div class="price">
            đ 60.000/h
        </div>
    </div>

    <div class="d-flex">
        <div class="about-me">
            <div class=" boder border-0 shadow-sm">
                <h3>Về Tôi</h3>
                <p>One day Vako had enough with the 9-to-5 grind, or more like 9-to-9 in his case, and quit his job,
                    or more like got himself fired from his own startup.
                </p>
                <p> He decided to work on his dream: be his own boss, travel the world, only do the work he enjoyed,
                    and make a lot more money in the process. No more begging for vacation days and living from
                    paycheck to paycheck. After trying everything from e-commerce stores to professional poker his
                    lucky break came when he started freelance design. Vako fell in love with the field that gives
                    him the lifestyle of his dreams.</p>

                <p>Vako realizes that people who take courses on Udemy want to transform their lives. Today with
                    his courses and mentoring Vako is helping thousands of people transform their lives, just like
                    he did once.</p>
            </div>
        </div>
        <div class="courses-container ml-3">
            <h3>Khóa học của Đức</h3>
            <div class="container">
                <div class="row">
                    <div class="col-6 mb-6">
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
                    <div class="col-6 mb-6">
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
                    <div class="col-6 mb-6">
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
                    <div class="col-6 mb-6">
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

            <div class="review-container">
                <div class="review-header">
                    <h2>Đánh giá của học viên</h2>
                    <select class="form-control" style="width: 150px;">
                        <option>Đánh giá 5 sao</option>
                        <option>Đánh giá 4 sao</option>
                        <option>Đánh giá 3 sao</option>
                        <option>Đánh giá 2 sao</option>
                        <option>Đánh giá 1 sao</option>
                    </select>
                </div>

                <div class="review">
                    <img src="images/teacher5.jpg" alt="Avatar">
                    <div class="review-content">
                        <div class="review-header">
                            <p><strong>Guy Hawkins</strong> <span class="rating"><i class="fas fa-star"></i>
                                    5.0</span></p>
                            <p>1 tuần trước</p>
                        </div>
                        <p>Tôi đánh giá cao các video ngắn (10 phút hoặc ít hơn) vì các video dài thường khiến
                            tôi mất tập trung. Giảng viên rất am hiểu về Thiết kế Web và điều đó thể hiện qua
                            cách chia sẻ kiến thức của anh ấy. Đây là 6 tháng đào tạo tốt nhất của tôi. Cảm ơn,
                            Vako.</p>
                    </div>
                </div>

                <div class="review">
                    <img src="images/teacher8.jpg" alt="Avatar">
                    <div class="review-content">
                        <div class="review-header">
                            <p><strong>Dianne Russell</strong> <span class="rating"><i class="fas fa-star"></i>
                                    5.0</span></p>
                            <p>51 phút trước</p>
                        </div>
                        <p>Khóa học này thật tuyệt vời! Nội dung khóa học rất phong phú, các thực hành tốt nhất
                            và nhiều kiến thức thực tế. Tôi rất thích cách giảng viên đưa ra ví dụ, những mẹo
                            tốt nhất rất thú vị và tôi không bao giờ cảm thấy nhàm chán. Cảm ơn Vako!</p>
                    </div>
                </div>

                <!-- Thêm các đánh giá khác ở đây -->
            </div>
        </div>
    </div>
</div>
@endsection