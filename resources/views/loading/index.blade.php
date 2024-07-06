<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--js--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- --Boostratp Link---}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Linking your CSS file -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="top-bar">
        <div class="container d-flex justify-content-between">
            <div class="left-items justify-content-center m-1">
                <i class="bi bi-envelope p-0"></i>
                <a href="#" class="b ">
                    {{$setting->email}}
                </a>
                <i class="bi bi-phone  p-2"><span>
                        {{$setting->phone}}
                    </span></i>
            </div>
            <div class="right-items">
                <i class="c bi bi-twitter-x p-2 "></i>
                <i class=" c bi bi-facebook p-2 "></i>
                <i class=" c bi bi-instagram p-2 "></i>
                <i class=" c bi bi-linkedin p-2 "></i>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h1><a href="#" class="text-dark text-decoration-none">BizLand<span>.</span></a></h1>
        <nav id="navbar" class="navbar justify-content-center">
            <ul class="d-flex justify-content-between">
                <a class="nav-link active p-3" href="#">Home</a>
                <a class="nav-link p-3" href="#">About</a>
                <a class="nav-link p-3" href="#">Services</a>
                <a class="nav-link p-3" href="#">Portfolio</a>
                <a class="nav-link p-3" href="#">Team</a>
                <li class="nav-item dropdown">
                    <a class="nav-link p-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown">
                        Drop Down
                        <ul class="dropdown-menu">
                    </a>
                <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Deep Drop Down</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> Drop Down 1</a></li>
                        <li><a class="dropdown-item" href="#">Deep Drop Down 2</a></li>
                        <li><a class="dropdown-item" href="#">Drop Down 3</a></li>
                        <li><a class="dropdown-item" href="#"> Drop Down 4</a></li>
                        <li><a class="dropdown-item" href="#"> Drop Down 5</a></li>
                    </ul>
                </li>
            </ul>
            </li>
            <a class="nav-link p-3" href="#">Contact</a>
            </ul>
        </nav>
    </div>
    <section id="hero" class="d-flex align-items-center">
        <div class="container d-flex">
            <div class="content">
                <h1 class="">Welcome to <span class="text-primary">
                        {{$setting->title}}
                    </span></h1>
                <h2>
                    {{$setting->detail}}
                </h2>
                <div class="d-flex">
                    <a href="#about" class="btn">Get Started</a>
                    <a href="" class=" btn-watch"><i class="bi bi-play-circle">
                        </i><span class="fs-5">Watch Video</span></a>
                </div>
            </div>
    </section>
    {{--Custom designers--}}
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-3">
                    <div class="card shadow border-0 px-2 py-3 mb-3" id="animated">
                        <div class="card-body">
                            <div class="text-primary">
                                <i class="bi bi-activity  fs-2 text-primary as"></i>
                            </div>
                            <h5 class="text mt-2">
                                {{$setting->info}}
                            </h5>
                            <p>
                                {{$setting->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow border-0 px-2 py-3 mb-5 " id="animated">
                        <div class="card-body">
                            <div class="text-primary">
                                <i class="bi bi-bounding-box-circles text-primary fs-3" style="margin-left: 5px;"></i>
                            </div>
                            <h5 class="text mt-2">
                                {{$setting->infoa}}
                            </h5>
                            <p>
                                {{$setting->descriptiona}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow border-0 px-2 py-3 mb-5 " id="animated">
                        <div class="card-body">
                            <div class="text-primary">
                                <i class="bi bi-bounding-box-circles text-primary fs-3" style="margin-left: 5px;"></i>
                            </div>
                            <h5 class="text mt-2">
                                {{$setting->infoa}}
                            </h5>
                            <p>
                                {{$setting->descriptiona}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card shadow border-0 px-2 py-3 mb-5" id="animated">
                        <div class="card-body">
                            <div class="text-primary">
                                <i class="bi bi-calendar3-week fs-3 text-primary"></i>
                            </div>
                            <h5 class="text mt-2">
                                {{$setting->infob}}
                            </h5>
                            <p>
                                {{$setting->descriptionb}}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section mt-5">
        <div class="container section-title">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4><span class="badge rounded-pill bg-primary mt-5">ABOUT</span></h4>
                    </div>
                    <h2 class="fw-bold text-center mb-4">
                        {{$setting->head}}<span class="text-primary fs-3 mx-3">About
                            Us</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-4 mb-5">
                    <img src="{{asset('about.jpg')}}" alt="" class="img-fluid" width="600px" height="800px">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center mb-3">
                    <div class="about-content ">
                        <h3 class="fw-bold">
                            {{$setting->heading}}
                        </h3>
                        <i class="text-dark">
                            {{$setting->detaill}}
                        </i>
                        <ul>
                            <li>
                                <i class="bi bi-diagram-3 shadow text-primary bg-white"></i>
                                <div>
                                    <h4>Ullamco laboris nisi ut aliquip consequat</h4>
                                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-fullscreen-exit shadow text-primary bg-white"></i>
                                <div>
                                    <h4>Magnam soluta odio exercitationem reprehenderi</h4>
                                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                        pasata redi</p>
                                </div>
                            </li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--Progress Bar--}}


    <section id="progress-bar mt-5 mb-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="head">HTML</h6>
                        <h6 class="head">
                            {{$setting->bar1}}%
                        </h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar1; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h6 class="head">CSS</h6>
                        <h6 class="head">
                            {{$setting->bar3}}%
                        </h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar3; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h6 class="head">JAVASCRIPT</h6>
                        <h6 class="head">
                            {{$setting->bar5}}%
                        </h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar5; ?>%;"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="head">PHP</h6>
                        <h6 class="head">
                            {{$setting->bar2}}%
                        </h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar2; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h6 class="head">WORDPRESS/CMS<h6>
                                <h6 class="head">
                                    {{$setting->bar4}}%
                                </h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width:<?php echo $setting->bar4; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h6 class="head">PHOTOSHOP</h6>
                        <h6 class="head">
                            {{$setting->bar6}}%
                        </h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width:<?php echo $setting->bar6; ?>%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--states--}}
    <section id="card-icons" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-emoji-smile fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">
                                        {{$setting->icon1}}
                                    </h3>
                                    <p class="mt-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-journal-richtext fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">
                                        {{$setting->icon2}}
                                    </h3>
                                    <p class="mt-0">Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-headset fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">
                                        {{$setting->icon3}}
                                    </h3>
                                    <p class="mt-0">Hours Of Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-people fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">
                                        {{$setting->icon4}}
                                    </h3>
                                    <p class="mt-0">Hard Workers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--states--}}

    {{--Clients Section--}}
    <section class="section my-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-12">

                    @if($setting)
                        <img src="{{ asset('uploads/' . $setting->image1) }}" class="img-fluid" alt="no pic"
                            style="width:86px;">
                        <img src="{{ asset('uploads/' . $setting->image2) }}" class="img-fluid" alt="no pic"
                            style="width:86px;">
                        <img src="{{ asset('uploads/' . $setting->image3) }}" class="img-fluid" alt="no pic"
                            style="width:86px;">
                        <img src="{{ asset('uploads/' . $setting->image4) }}" class="img-fluid" alt="no pic"
                            style="width:86px;">
                        <img src="{{ asset('uploads/' . $setting->image5) }}" class="img-fluid" alt="no pic"
                            style="width:86px;">
                    @endif

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    {{--- Services---}}
    <section id="service">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4><span class="badge rounded-pill  text-primary mt-5">SERVICES</span></h4>
                    </div>
                    <h2 class="fw-bold text-center mb-4">
                        {{$setting->headd}}<span class="text-primary fs-3 mx-3">Services</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card  d mt-5 mb-5">
                        <div class="card-body  m-4">
                            <div class="class d-flex justify-content-center">
                                <i class="bi bi-activity fs-3 m-4 rounded p-3 bg-primary text-white"></i>
                            </div>
                            <div class="text-center mb-4">
                                <h4 class="fw-bold">
                                    {{$setting->atitle}}
                                </h4>
                                <p>
                                    {{$setting->adetail}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card d mt-5 mb-5">
                        <div class="card-body  m-4">
                            <div class="class d-flex justify-content-center">
                                <i class="bi bi-broadcast fs-3 m-4 rounded p-3 bg-primary text-white"></i>
                            </div>
                            <div class="text-center mb-4">
                                <h4 class="fw-bold">
                                    {{$setting->btitle}}
                                </h4>
                                <p>
                                    {{$setting->bdetail}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  d mt-5 mb-5">
                        <div class="card-body  m-4">
                            <div class="class d-flex justify-content-center">
                                <i class="bi bi-easel fs-3 m-4 rounded p-3 bg-primary text-white"></i>
                            </div>
                            <div class="text-center mb-4">
                                <h4 class="fw-bold">
                                    {{$setting->ctitle}}
                                </h4>
                                <p>
                                    {{$setting->cdetail}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card d  mt-3 mb-5">
                        <div class="card-body  m-4">
                            <div class="class d-flex justify-content-center">
                                <i class="bi bi-bounding-box-circles fs-3 m-4 rounded p-3 bg-primary text-white"></i>
                            </div>
                            <div class="text-center mb-4">
                                <h4 class="fw-bold">
                                    {{$setting->dtitle}}
                                </h4>
                                <p>
                                    {{$setting->ddetail}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card d mt-3 mb-5">
                        <div class="card-body  m-4">
                            <div class="class d-flex justify-content-center">
                                <i class="bi bi-calendar4-week fs-3 m-4 rounded p-3 bg-primary text-white"></i>
                            </div>
                            <div class="text-center mb-4">
                                <h4 class="fw-bold">
                                    {{$setting->etitle}}
                                </h4>
                                <p>
                                    {{$setting->edetail}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card d  mt-3 mb-5">
                        <div class="card-body  m-4">
                            <div class="class d-flex justify-content-center">
                                <i class="bi bi-chat-square-text fs-3 m-4 rounded p-3 bg-primary text-white"></i>
                            </div>
                            <div class="text-center mb-4">
                                <h4 class="fw-bold">
                                    {{$setting->ftitle}}
                                </h4>
                                <p>
                                    {{$setting->fdetail}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--Testimonial Section--}}
    <section id="testimonials" class="py-5">
        <div class="containe mb">
            <div class="text-center">
                <img src="{{asset('/img/testimonials-1.jpg')}}" class="rounded-circle about" height="80px" alt="no img">
                <h3 class=" text-white  mt-3">
                    {{$setting->name}}
                </h3>
                <p class="grey mb-0">
                    {{$setting->designation}}
                </p>
                <i class="bi bi-star-fill  text-warning"></i>
                <i class="bi bi-star-fill  text-warning"></i>
                <i class="bi bi-star-fill  text-warning"></i>
                <i class="bi bi-star-fill  text-warning"></i>
                <i class="bi bi-star-fill  text-warning"></i>
                <p class="text-white mt-3 para fs-5">
                    {{$setting->company}}
                </p>
            </div>
        </div>
    </section>
    {{--Team--}}
    <section id="team">
        <div class="container mb-4">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4><span class="badge rounded-pill  text-primary mt-5">TEAM</span></h4>
                    </div>
                    <h2 class="fw-bold text-center mb-4 mt-3">
                        {{$setting->hard}}<span class="text-primary fs-3 mx-3">Team</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-4 mb-5">
                    <div class="card border-0 shadow ">
                        <img src="{{asset('/img/team-1.jpg')}}" alt="">
                        <div class="social nisha">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2 "></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="fs-4">
                                    {{$setting->namea}}
                                </h5>
                                <span>
                                    {{$setting->designationa}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card border-0 shadow ">
                        <img src="{{asset('/img/team-2.jpg')}}" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="fs-4">
                                    {{$setting->nameb}}
                                </h5>
                                <span>
                                    {{$setting->designationb}}
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card border-0 shadow  mb-5">
                        <img src="{{asset('/img/team-3.jpg')}}" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="fs-4">
                                    {{$setting->namec}}
                                </h5>
                                <span>
                                    {{$setting->designationc}}
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card border-0 shadow ">
                        <img src="{{asset('/img/team-4.jpg')}}" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="fs-4">
                                    {{$setting->named}}
                                </h5>
                                <span>
                                    {{$setting->designationd}}
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--Pricing Section--}}
    <section>
        <div class="container mb-4">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4><span class="badge rounded-pill  text-primary mt-5">PRICING</span></h4>
                    </div>
                    <h2 class="fw-bold text-center mb-4 mt-3">
                        {{$setting->price}}<span class="text-primary fs-3 mx-3">Pricing</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-5 mb-5">
                    <div class="card border-0 shadow">
                        <div class="card-header text-center">
                            <h2 class="fw-bold fs-5 px-4 m-3">Free</h2>
                        </div>
                        <div class="card-body text-center">
                            <h3><span class="fw-bold">
                                    {{$setting->dollar}}
                                </span><sub class="mute">/month</sub></h3>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li><del>Pharetra massa</del></li>
                                <li><del>Massa ultricies mi</del></li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn-buy btn btn-primary px-4 fs-5 m-3">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-5 mb-5">
                    <div class="card border-0 shadow">
                        <div class="card-header text-center bg-primary">
                            <h2 class=" text-white fw-bold fs-5 px-4 m-3">Business</h2>
                        </div>
                        <div class="card-body text-center">
                            <h3><span class="fw-bold">
                                    {{$setting->dollara}}
                                </span><sub class="mute">/month</sub></h3>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li><del>Pharetra massa</del></li>
                                <li><del>Massa ultricies mi</del></li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn-buy btn btn-primary px-4 fs-5 m-3">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-5 mb-5">
                    <div class="card border-0 shadow">
                        <div class="card-header text-center">
                            <h2 class="fw-bold fs-5 px-4 m-3">Develpor</h2>
                        </div>
                        <div class="card-body text-center">
                            <h3><span class="fw-bold">
                                    {{$setting->dollarb}}
                                </span><sub class="mute">/month</sub></h3>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li><del>Pharetra massa</del></li>
                                <li><del>Massa ultricies mi</del></li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn-buy btn btn-primary px-4 fs-5 m-3">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-5 mb-5">
                    <div class="card border-0 shadow a">
                        <div class="card-header text-center">
                            <h2 class="fw-bold fs-5 px-4 m-3">Ulimate</h2>
                            <span class="advanced text-white">Advanced</span>
                        </div>
                        <div class="card-body text-center">
                            <h3><span class="fw-bold">
                                    {{$setting->dollarc}}
                                </span><sub class="mute">/month</sub></h3>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li><del>Pharetra massa</del></li>
                                <li><del>Massa ultricies mi</del></li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn-buy btn btn-primary px-4 fs-5 m-3">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--card--}}
    </section>

    {{--fAQ--}}

    <section id="team" class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4><span class="badge rounded-pill  text-primary mt-5">F.A.Q</span></h4>

                    </div>
                    <h1 class="text-center fw-bold mt-3 mb-5">Frequently Asked <span
                            class="text-primary">Questions</span></h1>
                </div>
            </div>
                @foreach($data as $d)
                <div class="card mt-3">
                    <div class="card-header card-h">
                        <a class="an" data-bs-toggle="collapse" href="#collapse{{$loop->iteration}}">
                            <div class="d-flex justify-content-between">
                                                <h4>
                                                    {{ $d->title}}
                                                </h4>
                                                <i class="bi bi-chevron-right text-dark"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div id="collapse{{$loop->iteration}}" class="collapse <?php echo $loop->first ? 'show' : ''?>" data-bs-parent="#accordion">
                                        <div class="card-body card-b">
                                            <p class="mb-0">
                                                {{ $d->desc }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                </div>
            </div>
        </div>
    </section>
    {{--Contact Section--}}
    <section>
        <div class="container mb-4">
            <div class="row d-flex justify-content-center align-items-center m-4 ">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4><span class="badge rounded-pill  text-primary mt-5">CONTACT</span></h4>
                    </div>
                    <h2 class="fw-bold text-center mb-4 mt-3">Need Help?<span class="text-primary fs-3 mx-3">Contact
                            Us</span>
                    </h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-5 mt-4 mb-4">
                    <div class=" p-3 border-0 shadow">
                        <div class="">
                            <i class="bi bi-geo-alt flex-shrink-0  text-primary  m-3 contact rounded-circle "></i>
                            <div class="mt-1">
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                            <div class="">
                                <i class="bi bi-telephone flex-shrink-0 text-primary  contact m-3 rounded-circle"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div>
                            <div class="">
                                <i class="bi bi-envelope flex-shrink-0 text-primary   contact  m-3 rounded-circle"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>

                        </div>
                        <div class="mt-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54634.96739203909!2d72.64041605156838!3d31.146248842816835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3923001515646a23%3A0xfcb2866ffe58b367!2sGojra%2C%20Toba%20Tek%20Singh%20District%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1718113027887!5m2!1sen!2s"
                                width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mt-4 mb-4">
                    <div class="card  border-0 shadow mb-4">
                        <div class="row p-3">
                            <div class="col-md-6  ">
                                <label for="name-field" class="pb-2 fs-4">Your Name</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2 fs-4">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required="">
                            </div>
                        </div>

                        <div class="col-md-12 p-3">
                            <label for="subject-field" class="pb-2 fs-4">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject-field" required="">
                        </div>

                        <div class="col-md-12 p-3">
                            <label for="message-field" class="pb-2 fs-4">Message</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field"
                                required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary m-3 fs-4">Send Message</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    {{--Sraech Section--}}
    <section id="team">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-5">
                    <h4 class="mt-5 fw-bold ">Join Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and
                        services!</p>
                    <form action="">
                        <div class="d-flex mb-4">
                            <input type="email" name="email" class="form-control "><button type="submit"
                                class="btn btn-primary text-white">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{--Footer Section--}}
    <section>
        <div class="container mb-4 mt-4">
            <div class="row">
                <div class="col-lg-3 ">
                    <a href="" class="d-flex align-items-center">
                        <h1 class="text-dark">Bizland</h1>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>
                                {{$setting->phone}}
                            </span></p>
                        <p><strong>Email:</strong><span>
                                {{$setting->email}}
                            </span>
                    </div>
                </div>

                <div class=" col-md-3">
                    <h4 class="fw-bold">Useful Links</h4>
                    <ul class="unstyled-list p-3">
                        <li><i class="bi bi-chevron-right text-primary "></i> <a href="#"
                                class="text-dark py-3">Home</a></li>
                        <li><i class="bi bi-chevron-right text-primary"></i> <a href="#" class="text-dark py-3">About
                                us</a></li>
                        <li><i class="bi bi-chevron-right text-primary"></i> <a href="#"
                                class="text-dark py-5">Services</a></li>
                        <li><i class="bi bi-chevron-right text-primary"></i> <a href="#" class="text-dark py-5">Terms of
                                service</a></li>
                    </ul>
                </div>

                <div class=" col-md-3">
                    <h4 class="fw-bold">Our Services</h4>
                    <ul class="unstyled-list p-3">
                        <li><i class="bi bi-chevron-right text-primary"></i> <a href="#" class="text-dark">Web
                                Design</a></li>
                        <li><i class="bi bi-chevron-right text-primary"></i> <a href="#" class="text-dark">Web
                                Development</a></li>
                        <li><i class="bi bi-chevron-right text-primary"></i> <a href="#"
                                class="text-dark">Management</a></li>
                        <li><i class="bi bi-chevron-right text-primary"></i> <a href="#" class="text-dark">Marketing</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h4 class="fw-bold">Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex p-4">
                        <a href=""><i class="bi bi-twitter-x  p-2 icon text-dark fs-5"></i></a>
                        <a href=""><i class="bi bi-facebook  p-2 icon text-dark fs-5"></i></a>
                        <a href=""><i class="bi bi-instagram  p-2 icon text-dark fs-5"></i></a>
                        <a href=""><i class="bi bi-linkedin  p-2 icon text-dark fs-5"></i></a>
                    </div>
                </div>
                <hr>
                <div class="container  text-center mt-4">
                    <p>© <span>Copyright</span> <strong class="px-1 sitename">BizLand</strong> <span>All Rights
                            Reserved</span></p>
                    Designed by<span class="text-primary">BootstrapMade</span>
                </div>
            </div>
    </section>

</body>

</html>