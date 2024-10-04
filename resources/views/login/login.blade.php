@extends('app')

@section('content')

<section id="banner">
    <div class="container padding-medium">
        <div class="hero-content ">
            <nav class="breadcrumb">
                <a class="breadcrumb-item text-black-50" href="#">Home</a>
                <a class="breadcrumb-item text-black-50" href="#">Pages</a>
                <span class="breadcrumb-item active" aria-current="page">Account</span>
        </div>
    </div>
</section>

<section id="account" class="padding-medium">
    <div class="container">
        <div class="row g-0">
            <div class="offset-md-1 col-md-5">
                <img src="images/login.png" alt="img" class="img-fluid">
            </div>
            <div class="col-md-5 border-top border-bottom border-end p-5">
                <div class="tabs-listing">
                    <nav>
                        <div class="nav nav-tabs d-flex justify-content-center border-dark-subtle mb-3" id="nav-tab"
                            role="tablist">
                            <button
                                class="nav-link account-tab mx-3 fs-4 border-bottom border-dark-subtle border-0 text-capitalize fw-semibold active"
                                id="sign-in-tab" data-bs-toggle="tab" data-bs-target="#sign-in" type="button"
                                role="tab" aria-controls="sign-in" aria-selected="true">Log In</button>
                            <button
                                class="nav-link account-tab mx-3 fs-4 border-bottom border-dark-subtle border-0 text-capitalize fw-semibold"
                                id="sign-up-tab" data-bs-toggle="tab" data-bs-target="#sign-up" type="button"
                                role="tab" aria-controls="sign-up" aria-selected="false">Sign Up</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="sign-in" role="tabpanel"
                            aria-labelledby="sign-in-tab">
                            <div class="col-lg-10 offset-lg-1 mt-5">


                                <form id="form1" class="form-group flex-wrap ">
                                    <div class="form-input col-lg-12 my-4">

                                        <label class="fw-semibold mb-2 fs-6 ">Username or E-mail address *</label>
                                        <input type="text" id="exampleInputEmail1" name="email"
                                            placeholder="Enter Username / Email Address"
                                            class="form-control ps-4 py-3 mb-3">

                                        <label class="fw-semibold mb-2 fs-6 ">Password*</label>

                                        <input type="password" id="inputPassword1" placeholder="Enter password"
                                            class="form-control ps-4 py-3 mb-3"
                                            aria-describedby="passwordHelpBlock">

                                        <label
                                            class="py-3 d-flex flex-wrap justify-content-between align-items-center">
                                            <div>
                                                <input type="checkbox" required="" class="d-inline">
                                                <span class="label-body fw-semibold">Remember Me</span>
                                            </div>

                                            <div id="passwordHelpBlock" class="form-text ">
                                                <a href="#" class="text-warning  fw-bold"> Forgot Password?</a>
                                            </div>
                                        </label>
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary rounded-2 px-5 py-3 ">Log In</button>
                                        </div>

                                    </div>
                                </form>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">
                            <div class="col-lg-10 offset-lg-1 mt-5">

                                <form id="form1" class="form-group flex-wrap ">
                                    <div class="form-input col-lg-12 my-4">

                                        <label class="fw-semibold mb-2 fs-6 ">Username*</label>
                                        <input type="text" id="exampleInputName" name="email"
                                            placeholder="Your Username" class="form-control ps-4 py-3 mb-3">

                                        <label class="fw-semibold mb-2 fs-6 ">E-mail Address *</label>
                                        <input type="text" id="exampleInputEmail1" name="email"
                                            placeholder="Your email address" class="form-control ps-4 py-3 mb-3">

                                        <label class="fw-semibold mb-2 fs-6 ">Password*</label>
                                        <input type="password" id="inputPassword1" placeholder="Set your password"
                                            class="form-control ps-4 py-3 mb-3"
                                            aria-describedby="passwordHelpBlock">

                                        <label class="fw-semibold mb-2 fs-6 ">Re-Password*</label>
                                        <input type="password" id="inputPassword2"
                                            placeholder="Retype your password" class="form-control ps-4 py-3 mb-3"
                                            aria-describedby="passwordHelpBlock">



                                        <div class="py-3">
                                            <input type="checkbox" required="" class="d-inline">
                                            <span class="label-body fw-semibold">Accept all <span><a href="#"
                                                        class="text-decoration-underline">Terms &
                                                        Conditions</a></span> </span>
                                        </div>

                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary rounded-2 px-5 py-3 ">Sign Up</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection