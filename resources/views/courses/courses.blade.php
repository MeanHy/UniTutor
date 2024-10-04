@extends('app')

@section('content')
<section id="banner" style="margin-top: 30px;">
    <div class="container">
        <div class="hero-content ">
            <nav class="breadcrumb">
                <a class="breadcrumb-item text-black-50" href="#">Home</a>
                <a class="breadcrumb-item text-black-50" href="#">Pages</a>
                <span class="breadcrumb-item active" aria-current="page">Courses</span>
            </nav>
        </div>
    </div>
</section>
<section id="courses" class="padding-medium">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-semibold">Những Khóa học nổi bật của Kỹ Thuật Phần Mềm</h2>
        </div>

        <div class="row">
            <div class="col-2 mb-5">
                <div class="z-1 position-absolute m-4">
                    <span class="badge text-white bg-secondary">New</span>
                </div>
                <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                    <a href="courses_detail.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
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
                        <a href="courses_detail.html">
                            <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication</h5>
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
            <div class="col-2 mb-5">
                <div class="z-1 position-absolute m-4">
                    <span class="badge text-white bg-secondary">New</span>
                </div>
                <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                    <a href="courses_detail.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
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
                        <a href="courses_detail.html">
                            <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet</h5>
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
            <div class="col-2 mb-5">
                <div class="z-1 position-absolute m-4">
                    <span class="badge text-white bg-secondary">New</span>
                </div>
                <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                    <a href="courses_detail.html"><img src="images/item1.jpg" class="img-fluid rounded-3"
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
                        <a href="courses_detail.html">
                            <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication</h5>
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
            <div class="col-2 mb-5">
                <div class="z-1 position-absolute m-4">
                    <span class="badge text-white bg-secondary">New</span>
                </div>
                <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                    <a href="courses_detail.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
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
                        <a href="courses_detail.html">
                            <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet</h5>
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
            <div class="col-2 mb-5">
                <div class="z-1 position-absolute m-4">
                    <span class="badge text-white bg-secondary">New</span>
                </div>
                <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                    <a href="courses_detail.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
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
                        <a href="courses_detail.html">
                            <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet</h5>
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
            <div class="col-2 mb-5">
                <div class="z-1 position-absolute m-4">
                    <span class="badge text-white bg-secondary">New</span>
                </div>
                <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                    <a href="courses_detail.html"><img src="images/item2.jpg" class="img-fluid rounded-3"
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
                        <a href="courses_detail.html">
                            <h5 class="course-title py-2 m-0">Web Wizardry 101: Mastering the Internet</h5>
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

<section id="teacher" class="padding-medium" style="background-color: rgb(237, 237, 237);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-semibold">Giản viên nổi bật</h2>
        </div>

        <div class="row">
            <div class="col mb-5">
                <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect rounded-3">
                        <img src="images/teacher1.jpg" class="img-fluid rounded-3" alt="image">
                        <ul class="social-links list-unstyled position-absolute">
                            <li>
                                <a href="#">
                                    <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#facebook" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#twitter" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#instagram" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#linkedin" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-0">
                        <div class="text-center mt-3">
                            <p class="fw-bold m-0">Anila Lee</p>
                            <p class="text-secondary m-0">Art Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect rounded-3">
                        <img src="images/teacher2.jpg" class="img-fluid rounded-3" alt="image">
                        <ul class="social-links list-unstyled position-absolute">
                            <li>
                                <a href="#">
                                    <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#facebook" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#twitter" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#instagram" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#linkedin" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-0">
                        <div class="text-center mt-3">
                            <p class="fw-bold m-0">Bruce Smith</p>
                            <p class="text-secondary m-0">Marketing Expert</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect rounded-3">
                        <img src="images/teacher3.jpg" class="img-fluid rounded-3" alt="image">
                        <ul class="social-links list-unstyled position-absolute">
                            <li>
                                <a href="#">
                                    <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#facebook" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#twitter" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#instagram" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#linkedin" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-0">

                        <div class="text-center mt-3">
                            <p class="fw-bold m-0">Jack Nicholson</p>
                            <p class="text-secondary m-0">SEO Expert</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect rounded-3">
                        <img src="images/teacher4.jpg" class="img-fluid rounded-3" alt="image">
                        <ul class="social-links list-unstyled position-absolute">
                            <li>
                                <a href="#">
                                    <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#facebook" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#twitter" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#instagram" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#linkedin" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-0">

                        <div class="text-center mt-3">
                            <p class="fw-bold m-0">Calvin Ian</p>
                            <p class="text-secondary m-0">Sales Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="team-member position-relative card rounded-4 border-0 shadow-sm p-3">
                    <div class="image-holder zoom-effect rounded-3">
                        <img src="images/teacher5.jpg" class="img-fluid rounded-3" alt="image">
                        <ul class="social-links list-unstyled position-absolute">
                            <li>
                                <a href="#">
                                    <svg class="facebook text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#facebook" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="twitter text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#twitter" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="instagram text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#instagram" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="linkedin text-dark" width="25" height="25" aria-hidden="true">
                                        <use xlink:href="#linkedin" class="text-white"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-0">

                        <div class="text-center mt-3">
                            <p class="fw-bold m-0">Milye Sam</p>
                            <p class="text-secondary m-0">Marketing Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="course" class="padding-medium">
    <div class="container d-flex"> <!-- Thay đổi để cho phép sắp xếp các phần bên cạnh nhau -->
        <div class="filter-shop"> <!-- Bộ lọc bên trái -->
            <p>
            <h4>Môm: <span>SDN301M</span></h4>
            </p>

            <div class="filter-section">
                <h5 class="toggle-button" onclick="toggleCollapse('categoryCollapse')">DANH MỤC</h5>
                <div class="collapse" id="categoryCollapse">
                    <div class="filter-label">
                        <label><input type="checkbox"> Hình thức dạy</label><span>1345</span>
                    </div>
                    <div class="filter-label">
                        <label><input type="checkbox"> Online</label><span>574</span>
                    </div>
                    <div class="filter-label">
                        <label><input type="checkbox"> Offline</label><span>1345</span>
                    </div>
                    <div class="filter-label">
                        <label><input type="checkbox"> Kỹ học</label>
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <h5 class="toggle-button" onclick="toggleCollapse('classCollapse')">LỚP</h5>
                <div class="collapse" id="classCollapse">
                    <div class="filter-label">
                        <label><input type="checkbox"> NodeJs</label><span>15</span>
                    </div>
                    <div class="filter-label">
                        <label><input type="checkbox"> Server-Side</label><span>21</span>
                    </div>
                    <div class="filter-label">
                        <label><input type="checkbox"> Web</label><span>36</span>
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <h5 class="toggle-button">CHI PHÍ</h5>

                <!-- Thanh trượt giả -->
                <div class="range-wrapper">
                    <div class="range-track"></div> <!-- Track phải được đặt bên dưới các thanh trượt -->
                    <input type="range" min="0" max="1000" value="100" id="range-min" class="range-slider">
                    <input type="range" min="0" max="1000" value="900" id="range-max" class="range-slider">
                </div>

                <div class="range-label">
                    <span class="range-label-min">VNĐ thấp nhất: <span id="min-value">100</span></span>
                    <span class="range-label-max">VNĐ cao nhất: <span id="max-value">900</span></span>
                </div>

                <div>
                    <div class="filter-label">
                        <label>Theo giờ</label><span>1345</span>
                    </div>
                    <div class="filter-label">
                        <label>Theo buổi học</label><span>1345</span>
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <h5 class="toggle-button" onclick="toggleCollapse('timeCollapse')">THỜI GIAN</h5>
                <div class="collapse" id="timeCollapse">
                    <div class="filter-label">
                        <label><input type="checkbox"> Theo giờ</label><span>1345</span>
                    </div>
                    <div class="filter-label">
                        <label><input type="checkbox"> Theo buổi học</label><span>1345</span>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleCollapse(id) {
                var element = document.getElementById(id);
                element.classList.toggle('show');
            }

            const rangeMin = document.getElementById('range-min');
            const rangeMax = document.getElementById('range-max');
            const minValueDisplay = document.getElementById('min-value');
            const maxValueDisplay = document.getElementById('max-value');
            const track = document.querySelector('.range-track');

            rangeMin.addEventListener('input', updateSlider);
            rangeMax.addEventListener('input', updateSlider);

            function updateSlider() {
                let minValue = parseInt(rangeMin.value);
                let maxValue = parseInt(rangeMax.value);

                // Ngăn giá trị min vượt qua max và ngược lại
                if (minValue > maxValue - 100) {
                    rangeMin.value = maxValue - 100;
                    minValue = rangeMin.value;
                }

                if (maxValue < minValue + 100) {
                    rangeMax.value = minValue + 100;
                    maxValue = rangeMax.value;
                }

                // Cập nhật giá trị hiển thị
                minValueDisplay.textContent = minValue;
                maxValueDisplay.textContent = maxValue;

                // Tính phần trăm cho mỗi thanh và cập nhật màu đổ
                const minPercent = (minValue / rangeMin.max) * 100;
                const maxPercent = (maxValue / rangeMax.max) * 100;

                // Cập nhật màu nền giữa hai tay cầm
                track.style.background = `linear-gradient(to right, #ddd ${minPercent}%, #FF8000 ${minPercent}%, #FF8000 ${maxPercent}%, #ddd ${maxPercent}%)`;
            }
        </script>
        <div class="course-list flex-grow-1"> <!-- Danh sách khóa học -->
            <div class="course-list flex-grow-1"> <!-- Danh sách khóa học -->
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="showing-product">
                        <p class="m-0">Showing 1–9 of 55 results</p>
                    </div>
                    <div class="sort-by">
                        <select class="filter-categories border-0 m-0">
                            <option value="">Default sorting</option>
                            <option value="">Name (A - Z)</option>
                            <option value="">Name (Z - A)</option>
                            <option value="">Price (Low-High)</option>
                            <option value="">Price (High-Low)</option>
                            <option value="">Rating (Highest)</option>
                            <option value="">Rating (Lowest)</option>
                            <option value="">Model (A - Z)</option>
                            <option value="">Model (Z - A)</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_detail.html">
                                <img src="images/item1.jpg" class="img-fluid rounded-3" alt="image"></a>
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

                                <a href="courses_detail.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>

                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-1 mb-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>

                                    <h4 style="color: #FF8000;">$180.00 <span
                                            class="fs-6 text-black opacity-25 text-decoration-line-through">$240.00</span>
                                    </h4>

                                    <ul class="list-unstyled d-flex">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#book" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 10 lessons</p>
                                            </div>
                                        </li>
                                        <li class="align-self-end">&nbsp;,&nbsp;</li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#person" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 50 students</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex flex-wrap mt-2">
                                    <a href="#" class=" btn btn-outline-dark text-capitalize me-2 px-3 py-2">Enroll
                                        Now</a>
                                    <a href="#" class=" btn btn-outline-dark text-capitalize px-3 py-2">
                                        <svg width="20" height="20">
                                            <use xlink:href="#heart" class=""></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_detail.html">
                                <img src="images/item1.jpg" class="img-fluid rounded-3" alt="image"></a>
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

                                <a href="courses_detail.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>

                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-1 mb-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>

                                    <h4 style="color: #FF8000;">$180.00 <span
                                            class="fs-6 text-black opacity-25 text-decoration-line-through">$240.00</span>
                                    </h4>

                                    <ul class="list-unstyled d-flex">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#book" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 10 lessons</p>
                                            </div>
                                        </li>
                                        <li class="align-self-end">&nbsp;,&nbsp;</li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#person" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 50 students</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex flex-wrap mt-2">
                                    <a href="#" class=" btn btn-outline-dark text-capitalize me-2 px-3 py-2">Enroll
                                        Now</a>
                                    <a href="#" class=" btn btn-outline-dark text-capitalize px-3 py-2">
                                        <svg width="20" height="20">
                                            <use xlink:href="#heart" class=""></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_detail.html">
                                <img src="images/item1.jpg" class="img-fluid rounded-3" alt="image"></a>
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

                                <a href="courses_detail.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>

                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-1 mb-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>

                                    <h4 style="color: #FF8000;">$180.00 <span
                                            class="fs-6 text-black opacity-25 text-decoration-line-through">$240.00</span>
                                    </h4>

                                    <ul class="list-unstyled d-flex">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#book" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 10 lessons</p>
                                            </div>
                                        </li>
                                        <li class="align-self-end">&nbsp;,&nbsp;</li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#person" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 50 students</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex flex-wrap mt-2">
                                    <a href="#" class=" btn btn-outline-dark text-capitalize me-2 px-3 py-2">Enroll
                                        Now</a>
                                    <a href="#" class=" btn btn-outline-dark text-capitalize px-3 py-2">
                                        <svg width="20" height="20">
                                            <use xlink:href="#heart" class=""></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_detail.html">
                                <img src="images/item1.jpg" class="img-fluid rounded-3" alt="image"></a>
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

                                <a href="courses_detail.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>

                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-1 mb-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>

                                    <h4 style="color: #FF8000;">$180.00 <span
                                            class="fs-6 text-black opacity-25 text-decoration-line-through">$240.00</span>
                                    </h4>

                                    <ul class="list-unstyled d-flex">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#book" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 10 lessons</p>
                                            </div>
                                        </li>
                                        <li class="align-self-end">&nbsp;,&nbsp;</li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#person" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 50 students</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex flex-wrap mt-2">
                                    <a href="#" class=" btn btn-outline-dark text-capitalize me-2 px-3 py-2">Enroll
                                        Now</a>
                                    <a href="#" class=" btn btn-outline-dark text-capitalize px-3 py-2">
                                        <svg width="20" height="20">
                                            <use xlink:href="#heart" class=""></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_detail.html">
                                <img src="images/item1.jpg" class="img-fluid rounded-3" alt="image"></a>
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

                                <a href="courses_detail.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>

                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-1 mb-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>

                                    <h4 style="color: #FF8000;">$180.00 <span
                                            class="fs-6 text-black opacity-25 text-decoration-line-through">$240.00</span>
                                    </h4>

                                    <ul class="list-unstyled d-flex">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#book" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 10 lessons</p>
                                            </div>
                                        </li>
                                        <li class="align-self-end">&nbsp;,&nbsp;</li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#person" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 50 students</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex flex-wrap mt-2">
                                    <a href="#" class=" btn btn-outline-dark text-capitalize me-2 px-3 py-2">Enroll
                                        Now</a>
                                    <a href="#" class=" btn btn-outline-dark text-capitalize px-3 py-2">
                                        <svg width="20" height="20">
                                            <use xlink:href="#heart" class=""></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <div class="z-1 position-absolute m-4">
                            <span class="badge text-white bg-secondary">New</span>
                        </div>
                        <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
                            <a href="courses_detail.html">
                                <img src="images/item1.jpg" class="img-fluid rounded-3" alt="image"></a>
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

                                <a href="courses_detail.html">
                                    <h5 class="course-title py-2 m-0">Mastering the Art of Digital Communication
                                    </h5>
                                </a>

                                <div class="card-text">
                                    <span class="rating d-flex align-items-center mt-1 mb-3">
                                        <p class="text-muted fw-semibold m-0 me-2">By: James Willam</p>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                        <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                                    </span>

                                    <h4 style="color: #FF8000;">$180.00 <span
                                            class="fs-6 text-black opacity-25 text-decoration-line-through">$240.00</span>
                                    </h4>

                                    <ul class="list-unstyled d-flex">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#book" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 10 lessons</p>
                                            </div>
                                        </li>
                                        <li class="align-self-end">&nbsp;,&nbsp;</li>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <svg width="25" height="25">
                                                    <use xlink:href="#person" style="color: #FF8000;"></use>
                                                </svg>
                                                <p class="text-muted fw-semibold m-0">&nbsp; 50 students</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex flex-wrap mt-2">
                                    <a href="#" class=" btn btn-outline-dark text-capitalize me-2 px-3 py-2">Enroll
                                        Now</a>
                                    <a href="#" class=" btn btn-outline-dark text-capitalize px-3 py-2">
                                        <svg width="20" height="20">
                                            <use xlink:href="#heart" class=""></use>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Thêm nhiều khóa học khác ở đây -->

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item mx-md-2 "><a class="page-link fw-semibold" href="#">Previous</a>
                            </li>
                            <li class="page-item mx-md-2 "><a class="page-link fw-semibold active" href="#">1</a>
                            </li>
                            <li class="page-item mx-md-2 "><a class="page-link fw-semibold" href="#">2</a></li>
                            <li class="page-item mx-md-2 "><a class="page-link fw-semibold" href="#">3</a></li>
                            <li class="page-item mx-md-2 "><a class="page-link fw-semibold" href="#">4</a></li>
                            <li class="page-item mx-md-2 "><a class="page-link fw-semibold" href="#">5</a></li>
                            <li class="page-item mx-md-2 "><a class="page-link fw-semibold" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>

</section>
@endsection