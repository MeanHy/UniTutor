@extends('app')
@section('title', 'UniTutor - Kiến thức, kinh nghiệm, trải nghiệm')
@section('content')
<section id="banner" style="background-image:url(images/billboard-bg.png); background-repeat: no-repeat; ">
    <div class="container padding-medium">
        <div class="hero-content col-lg-8">
            <h2 class="display-5 fw-semibold mb-3">Hướng dẫn làm Assignment môn SDN301M
            </h2>
            <p class="fs-5">Xin chào! Tôi sẽ hướng dẫn cho bạn đạt điểm tuyệt đối trong assignment này.</p>
            <span class="rating d-flex align-items-center my-4">
                <p class="fw-semibold m-0 me-2">4.3</p>
                <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                <iconify-icon icon="clarity:star-solid" class="text-warning"></iconify-icon>
                <iconify-icon icon="clarity:half-star-solid" class="text-warning"></iconify-icon>
                <p class="fw-semibold m-0 ms-2 text-decoration-underline">20 ratings</p>

            </span>
            <ul class="list-unstyled d-lg-flex">

                <li class="me-4">
                    <div class="d-flex align-items-center">
                        <svg width="22" height="22">
                            <use xlink:href="#person"></use>
                        </svg>
                        <p class="text-muted fw-semibold m-0">&nbsp; James Willam</p>
                    </div>
                </li>
                <li class="me-4">
                    <div class="d-flex align-items-center">
                        <svg width="22" height="22">
                            <use xlink:href="#category"></use>
                        </svg>
                        <p class="text-muted fw-semibold m-0">&nbsp; Digital Marketing</p>
                    </div>
                </li>
                <li class="me-4">
                    <div class="d-flex align-items-center">
                        <svg width="22" height="22">
                            <use xlink:href="#clock"></use>
                        </svg>
                        <p class="text-muted fw-semibold m-0">&nbsp; 1hr 45 min</p>
                    </div>
                </li>
                <li class="me-4">
                    <div class="d-flex align-items-center">
                        <svg width="22" height="22">
                            <use xlink:href="#earth"></use>
                        </svg>
                        <p class="text-muted fw-semibold m-0">&nbsp; English</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="post-wrap padding-medium pt-0">
    <div class="container">
        <div class="row g-lg-5">
            <main class="post-grid col-lg-8">
                <div class="bootstrap-tabs">
                    <nav>
                        <div class="nav nav-tabs d-flex flex-wrap justify-content-between" id="nav-tab"
                            role="tablist">
                            <button class="nav-link py-4 px-md-5  active" id="nav-overview-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview"
                                aria-selected="true">Overview</button>
                            <button class="nav-link py-4 px-md-5 " id="nav-curriculum-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-curriculum" type="button" role="tab"
                                aria-controls="nav-curriculum" aria-selected="false"
                                tabindex="-1">Curriculum</button>
                            <button class="nav-link py-4 px-md-5 " id="nav-instructor-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-instructor" type="button" role="tab"
                                aria-controls="nav-instructor" aria-selected="false"
                                tabindex="-1">Instructor</button>
                            <button class="nav-link py-4 px-md-5 " id="nav-review-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                                aria-selected="false" tabindex="-1">Review</button>
                        </div>
                    </nav>
                    <div class="tab-content mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel"
                            aria-labelledby="nav-overview-tab">
                            <div class="post-description pt-3">
                                <h4 class="mb-3">Overview</h4>
                                <p>Our online courses bring the experts to you, breaking the barriers to your
                                    success. Don't let the fear of missing out on crucial knowledge hold you
                                    back—take charge now!</p>
                                <p>Reduced Effort most people today are too busy with their daily schedules and they
                                    hardly find the time to visit any local store. This is why buying furniture
                                    online is the next best thing in place of local shopping. You don't have to deal
                                    with annoying salespeople, crowded stores and pushy customers as everything is
                                    done online. Therefore, you can walk straight to your desired product and choose
                                    it from the comfort of your home with all the predefined options. You can also
                                    order your product and they will be delivered right at your doorsteps.
                                </p>
                                <div class="my-5">
                                    <h4 class="mb-3">What You’ll Learn From This Course</h4>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px">
                                                    <use href="#check-circle" class="text-secondary" />
                                                </svg>
                                                <p class="ps-4">Engage with a worldwide community of inquisitive and
                                                    imaginative individuals.</p>
                                            </div>
                                            <div class="d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px">
                                                    <use href="#check-circle" class="text-secondary" />
                                                </svg>
                                                <p class="ps-4">Engage with a worldwide community of inquisitive and
                                                    imaginative individuals.</p>
                                            </div>
                                            <div class="d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px">
                                                    <use href="#check-circle" class="text-secondary" />
                                                </svg>
                                                <p class="ps-4">Learn a skill of your choice from the experts around
                                                    the world from various industries</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px">
                                                    <use href="#check-circle" class="text-secondary" />
                                                </svg>
                                                <p class="ps-4">Engage with a worldwide community of inquisitive and
                                                    imaginative individuals.</p>
                                            </div>
                                            <div class="d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px">
                                                    <use href="#check-circle" class="text-secondary" />
                                                </svg>
                                                <p class="ps-4">Learn a skill of your choice from the experts around
                                                    the world from various industries</p>
                                            </div>
                                            <div class="d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px">
                                                    <use href="#check-circle" class="text-secondary" />
                                                </svg>
                                                <p class="ps-4">Learn a skill of your choice from the experts around
                                                    the world from various industries</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <h4 class="mb-3">Certification</h4>

                                <p>Tortor diam dignissim amet, in interdum aliquet. Magnis dictum et
                                    eros purus
                                    fermentum, massa
                                    ullamcorper sit sollicitudin. Nascetur libero elementum adipiscing
                                    mauris
                                    maecenas et magna. Etiam
                                    nec, rutrum a diam lacus, nunc integer etiam. Mattis pulvinar non
                                    viverra donec
                                    pellentesque. Odio
                                    mi consequat libero dolor. Porta ut diam lobortis eget leo, lectus.
                                </p>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-curriculum" role="tabpanel"
                            aria-labelledby="nav-curriculum-tab">
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item mb-5 border-0">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <h4 class="secondary-heading text-dark fs-5 py-3">Module 1:
                                                Introduction to Digital Marketing</h4>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Overview of Digital
                                                        Marketing</a>
                                                </div>
                                                <div>
                                                    <!-- <span class="badge text-muted bg-info-subtle fs-6 me-3">Preview</span> -->
                                                    <a href="#" class="btn btn-outline-dark">Preview</a>
                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Evolution of Digital
                                                        Marketing
                                                    </a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">8
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Importance of
                                                        Digital Marketing in Today's Business Landscape

                                                    </a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">20
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-5 border-0">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <h4 class="secondary-heading text-dark fs-5 py-3">Module 2:
                                                Website Essentials</h4>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Basics of Website
                                                        Design and Structure
                                                    </a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">10
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">User Experience (UX)
                                                        and User Interface (UI) Design
                                                    </a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">20
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Mobile
                                                        Responsiveness
                                                    </a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">8
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Landing Page
                                                        Optimization</a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">15
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-5 border-0">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <h4 class="secondary-heading text-dark fs-5 py-3">Module 3:
                                                Search Engine Optimization (SEO)</h4>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Understanding Search
                                                        Engines
                                                    </a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">10
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">On-Page SEO (Meta
                                                        tags, headings, keywords)</a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">20
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">Off-Page SEO
                                                        (Backlinks, social signals)</a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">8
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="d-md-flex justify-content-between py-3 border-bottom">
                                                <div>
                                                    <a href="#" class="course fs-5">SEO Tools and
                                                        Analytics</a>
                                                </div>
                                                <div>
                                                    <span class="badge text-muted bg-warning-subtle fs-6 me-3">15
                                                        minutes</span>
                                                    <svg width="30" height="30">
                                                        <use xlink:href="#lock"></use>
                                                    </svg>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-instructor" role="tabpanel"
                            aria-labelledby="nav-instructor-tab">
                            <h4 class="secondary-heading text-dark py-3 mb-4">Instructor</h4>
                            <div class="row bg-primary-subtle align-items-center rounded-4 p-4">
                                <div class="col-md-3 pt-2">
                                    <img src="images/teacher1.jpg" alt="team member"
                                        class="img-fluid rounded-circle">
                                </div>
                                <div class="col-md-9 pt-2 my-3 my-lg-0">

                                    <div class="member-info">
                                        <a href="#">
                                            <h3 class="fs-3 text-capitalize">Marie Wilson</h3>
                                        </a>
                                        <span class="text-secondary fs-6">Digital Marketer</span>
                                        <p class="mt-2">Nascetur libero elementum adipiscing mauris
                                            maecenas et magna. Etiam nec, rutrum a diam lacus, nunc
                                            integer etiam. Mattis pulvinar non viverra donec
                                            pellentesquet, in interdum aliquet. Magnis dictum et eros
                                            purus fermentum, massa ullamcorper sit sollicitudin.
                                        </p>
                                    </div>

                                    <div class="social-links ">
                                        <ul class="d-flex list-unstyled ">
                                            <li class="me-4">
                                                <a href="#">
                                                    <svg class="social-icon" width="30" height="30"
                                                        aria-hidden="true">
                                                        <use xlink:href="#facebook"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="me-4">
                                                <a href="#">
                                                    <svg class="social-icon" width="30" height="30"
                                                        aria-hidden="true">
                                                        <use xlink:href="#twitter"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="me-4">
                                                <a href="#">
                                                    <svg class="social-icon" width="30" height="30"
                                                        aria-hidden="true">
                                                        <use xlink:href="#instagram"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="me-4">
                                                <a href="#">
                                                    <svg class="social-icon" width="30" height="30"
                                                        aria-hidden="true">
                                                        <use xlink:href="#linkedin"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="me-4">
                                                <a href="#">
                                                    <svg class="social-icon" width="30" height="30"
                                                        aria-hidden="true">
                                                        <use xlink:href="#youtube"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                            <h4 class="secondary-heading text-dark pt-3">Customer's Review</h4>

                            <div class="row align-items-center my-5">
                                <div class="col-md-3 text-center">
                                    <div class="border border-3 border-primary p-4">
                                        <h2 class="display-1 fw-bold text-primary m-0">4.5</h2>
                                        <div class="d-flex justify-content-center">

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                        </div>
                                        <p>15 rating</p>
                                    </div>

                                </div>
                                <div class="col-md-9 ps-5">

                                    <div class="progress my-3" role="progressbar" aria-label="Example with label"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning fw-bold text-black-50 py-2"
                                            style="width: 90%">5
                                            Stars</div>
                                    </div>
                                    <div class="progress my-3" role="progressbar" aria-label="Example with label"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning fw-bold text-black-50 py-2"
                                            style="width: 50%">4
                                            Stars</div>
                                    </div>
                                    <div class="progress my-3" role="progressbar" aria-label="Example with label"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning fw-bold text-black-50 py-2"
                                            style="width: 30%">3
                                            Stars</div>
                                    </div>
                                    <div class="progress my-3" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning fw-bold text-black-50 py-2"
                                            style="width: 75%">2
                                            Stars</div>
                                    </div>
                                    <div class="progress my-3" role="progressbar" aria-label="Basic example"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-warning fw-bold text-black-50 py-2"
                                            style="width: 10%">1
                                            Stars</div>
                                    </div>

                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="image-holder">
                                        <img src="images/commentor-3.jpg" alt="review"
                                            class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="review-content ">
                                        <div class="review-header">
                                            <p class="text-black fw-medium m-0">Mark Johnson <span class="date"> –
                                                    03/07/2024</span></p>
                                        </div>
                                        <div class="d-flex">

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                        </div>

                                        <p class="mt-2">Lorem ipsum dolor sit amet consectetur.
                                            Malesuada et ut vitae eget. Leo viverra fringilla faucibus
                                            proin lacinia ornare amet. Aliquam mi eros dapibus pulvinar
                                            morbi aenean. Sit in donec quisque turpis. Tortor aliquam
                                            auctor elementum sodales porttitor viverra.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="image-holder">
                                        <img src="images/commentor-2.jpg" alt="review"
                                            class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="review-content ">
                                        <div class="review-header">
                                            <p class="text-black fw-medium m-0">David Wiiliam<span class="date"> –
                                                    09/07/2024</span></p>
                                        </div>
                                        <div class="d-flex">

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                        </div>

                                        <p class="mt-2">Lorem ipsum dolor sit amet consectetur.
                                            Malesuada et ut vitae eget. Leo viverra fringilla faucibus
                                            proin lacinia ornare amet. Aliquam mi eros dapibus pulvinar
                                            morbi aenean. Sit in donec quisque turpis. Tortor aliquam
                                            auctor elementum sodales porttitor viverra.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <div class="image-holder">
                                        <img src="images/commentor-1.jpg" alt="review"
                                            class="img-fluid rounded-circle">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="review-content ">
                                        <div class="review-header">
                                            <p class="text-black fw-medium m-0">Jenna Jakson <span class="date"> –
                                                    09/06/2024</span></p>
                                        </div>
                                        <div class="d-flex">

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                            <a href="#" class="social">
                                                <svg class="text-warning me-1" width="15" height="15">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </a>

                                        </div>

                                        <p class="mt-2">Lorem ipsum dolor sit amet consectetur.
                                            Malesuada et ut vitae eget. Leo viverra fringilla faucibus
                                            proin lacinia ornare amet. Aliquam mi eros dapibus pulvinar
                                            morbi aenean. Sit in donec quisque turpis. Tortor aliquam
                                            auctor elementum sodales porttitor viverra.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </main>
            <aside class="col-lg-4 mt-5">

                <div class="shadow-sm rounded-3 p-5 mb-5">
                    <div class="video">
                        <div class="video-content position-relative open-up">
                            <div class="video-bg bg-black">
                                <img src="images/item5.jpg" alt="video" class="video-image img-fluid opacity-75">
                            </div>
                            <div class="video-player position-absolute">
                                <a class='youtube'
                                    href="https://www.youtube.com/embed/_N-AaFDRZEk?si=845r7qrkaduPsorX">
                                    <iconify-icon icon="ion:play-sharp" class="video-icon p-4"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h5 class="py-2 my-3">Hướng dẫn làm Assignment môn SDN301M</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="heading-color" scope="row">Price :</th>
                                <td class="fw-bold" style="color: #FF8000;">$180.00</td>
                            </tr>
                            <tr>
                                <th class="heading-color" scope="row">Instructor :</th>
                                <td>Christin Hanby</td>
                            </tr>
                            <tr>
                                <th class="heading-color" scope="row">Category :</th>
                                <td>Marketing</td>
                            </tr>
                            <tr>
                                <th class="heading-color" scope="row">Duration :</th>
                                <td>8 weeks</td>
                            </tr>
                            <tr>
                                <th class="heading-color" scope="row">Lessons :</th>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th class="heading-color" scope="row">Students :</th>
                                <td>250</td>
                            </tr>
                            <tr>
                                <th class="heading-color" scope="row">Language :</th>
                                <td>English</td>
                            </tr>
                            <tr>
                                <th class="heading-color" scope="row">Certifications :</th>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-grid">
                        <a href="#" class="btn btn-primary mt-3 mb-2 px-4 py-3">Add to cart</a>
                    </div>
                    <div class="d-grid">
                        <a href="#" class="btn btn-dark rounded-pill px-4 py-3">Buy Now</a>
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-muted fst-italic m-0">30-Day Money-Back Guarantee</p>
                    </div>
                </div>

                <div class="shadow-sm rounded-3 p-5">
                    <h5 class="py-2 mb-3">Share on:</h5>

                    <div class="social-links">
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

            </aside>
        </div>
    </div>
</div>


<section id="register">
    <div class="container padding-medium">
        <div class="row align-items-center">
            <div class="offset-md-1 col-md-5 ">
                <div>
                    <h2 class="display-6 fw-semibold">Subscribe and get 20% OFF on your first online course </h2>
                    <p class="text-secondary">Sign Up for our newsletter and never miss any offers</p>
                </div>
            </div>
            <div class="col-md-5">
                <form id="form">
                    <input type="email" name="email" placeholder="Write Your Email Address*"
                        class="form-control bg-white border-0 rounded-4 shadow-none rounded-pill text-center px-4 py-3 w-100 mb-4">
                    <div class="d-grid">
                        <button class="btn btn-primary px-5 py-3"> Get Started now</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection