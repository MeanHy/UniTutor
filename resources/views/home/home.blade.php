@extends('app')

@section('content')
<section id="hero" style="background-image:url(images/billboard-bg.png); background-repeat: no-repeat; ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 pe-5 mt-5 mt-md-0">
          <h6 class="display-5 text-uppercase">Học với Cóc Vàng, bất cứ lúc nào</h6>
          <p class="fs-4 my-4 pb-2">Online Courses Taught by Industry Titans!</p>
          <div>
            <form id="form" class="d-flex align-items-center position-relative ">
              <input type="text" name="email" placeholder="what are you trying to learn?"
                class="form-control bg-white border-0 rounded-4 shadow-none px-4 py-3 w-100">
              <button class="btn btn-primary rounded-4 px-3 py-2 position-absolute align-items-center m-1 end-0"><svg
                  xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                  <use href="#search" />
                </svg></button>
            </form>

          </div>
        </div>
        <div class="col-md-6 mt-5">
          <img src="images/billboard-img.jpg" alt="img" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section id="category">
    <div class="container ">
      <div class="d-md-flex justify-content-between align-items-center" style="margin-top: 50px;">
        <div>
          <h2 class="display-6 fw-semibold">Doanh mục nỗi bật</h2>
        </div>
        <div class="mt-4 mt-md-0">
          <a href="#" class="btn btn-primary px-5 py-3">View all categories</a>
        </div>
      </div>
      <div class="row g-md-3 mt-2">
        <div class="col-md-4">
          <div class="primary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#pencil-box" class="svg-primary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Label</p>
                <p class="category-paragraph m-0">39 courses</p>
              </div>
            </div>
          </div>
          <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#laptop" class="svg-tertiary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">IT & Software</p>
                <p class="category-paragraph m-0">24 courses</p>
              </div>
            </div>
          </div>
          <div class="secondary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#handshake" class="svg-secondary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Finance & Accounting</p>
                <p class="category-paragraph m-0">16 courses</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gray rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#handshake" class="svg-gray" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Business</p>
                <p class="category-paragraph m-0">39 courses</p>
              </div>
            </div>
          </div>
          <div class="secondary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#laptop" class="svg-secondary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Computer Science</p>
                <p class="category-paragraph m-0">16 courses</p>
              </div>
            </div>
          </div>
          <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#fitness" class="svg-tertiary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Health & Fitness</p>
                <p class="category-paragraph m-0">24 courses</p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#tick-circle" class="svg-tertiary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">SEO & Marketing</p>
                <p class="category-paragraph m-0">24 courses</p>
              </div>
            </div>
          </div>
          <div class="primary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#pencil-box" class="svg-primary" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                <p class="category-paragraph m-0">39 courses</p>
              </div>
            </div>
          </div>
          <div class="gray rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px">
                <use href="#pencil-box" class="svg-gray" />
              </svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Graphic Design</p>
                <p class="category-paragraph m-0">39 courses</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="courses" class="padding-medium">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-6 fw-semibold">Khóa học bán chạy</h2>
      </div>

      <div class="row">
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">New</span>
          </div>
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item1.jpg" class="img-fluid rounded-3" alt="image"></a>
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
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">New</span>
          </div>
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item2.jpg" class="img-fluid rounded-3" alt="image"></a>
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
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <!-- <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">New</span>
          </div> -->
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item3.jpg" class="img-fluid rounded-3" alt="image"></a>
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
                <h5 class="course-title py-2 m-0">E-Learning Essentials: A Comprehensive Guide</h5>
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
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">Sale</span>
          </div>
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item4.jpg" class="img-fluid rounded-3" alt="image"></a>
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
                <h5 class="course-title py-2 m-0">CyberClass 101: A Guide to Online Education</h5>
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
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <!-- <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">New</span>
          </div> -->
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item5.jpg" class="img-fluid rounded-3" alt="image"></a>
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
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">New</span>
          </div>
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item6.jpg" class="img-fluid rounded-3" alt="image"></a>
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
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <!-- <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">New</span>
          </div> -->
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item7.jpg" class="img-fluid rounded-3" alt="image"></a>
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
                <h5 class="course-title py-2 m-0">E-Learning Essentials: A Comprehensive Guide</h5>
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
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="z-1 position-absolute m-4">
            <span class="badge text-white bg-secondary">Sale</span>
          </div>
          <div class="card rounded-4 border-0 shadow-sm p-3 position-relative">
            <a href="courses_detail.html"><img src="images/item8.jpg" class="img-fluid rounded-3" alt="image"></a>
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
                <h5 class="course-title py-2 m-0">CyberClass 101: A Guide to Online Education</h5>
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

      <div class="text-center mt-4">
        <a href="courses.html" class="btn btn-primary px-5 py-3">View all courses</a>
      </div>

    </div>
  </section>

  <section id="teacher" class="padding-medium">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="display-6 fw-semibold">Our Teachers</h2>
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

  <section id="testimonial" class="padding-medium bg-primary-subtle">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="display-6 fw-semibold">Reviews</h2>
      </div>
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="images/reviwer1.jpg" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Recco Gracia</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="images/reviwer2.jpg" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Bicky Yeal</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="images/reviwer3.jpg" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Lilly Will</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="images/reviwer1.jpg" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Recco Gracia</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="swiper-slide pe-md-5">
                <div class="my-4">
                  <p class="text-muted">“Condimentum vel viverra morbi quisque lobortis eu leo. A nulla pulvinar at
                    ut in sit libero, sed. Quis congue pretium in enim gravida quam netus in lorem. Nulla at nibh lorem
                    nunc sapien egestas at cursus. ”</p>
                  <div class="row">
                    <div class="col-3"> <img src="images/reviwer2.jpg" alt="img" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-9">
                      <h5 class="m-0 mt-2">Recco Gracia</h5>
                      <p class="text-muted">Web Developer</p>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="swiper-pagination"></div>

          </div>    
        </div>
      </div>
    </div>

  </section>
@endsection