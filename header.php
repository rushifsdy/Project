<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*** Navbar ***/
.navbar-light .navbar-nav .nav-link {
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-right: 25px;
    padding: 35px 0;
    color: var(--bs-white);
    font-size: 17px;
    font-weight: 400;
    outline: none;
    transition: .5s;
}

.sticky-top.navbar-light .navbar-nav .nav-link,
.sticky-top.navbar-light .navbar-nav .nav-item .nav-link {
    padding: 20px 0;
    color: var(--bs-dark);
}

.navbar-light .navbar-nav .nav-item .nav-link {
    color: var(--bs-white);
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-item .nav-link:hover,
.navbar-light .navbar-nav .nav-item .nav-link.active  {
    color: var(--bs-primary);
}

.navbar-light .navbar-brand img {
    max-height: 60px;
    transition: .5s;
}

.sticky-top.navbar-light .navbar-brand img {
    max-height: 45px;
}

.navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 600;
    vertical-align: middle;
    margin-left: 8px;
}

.dropdown .dropdown-menu a:hover {
    background: var(--bs-primary);
    color: var(--bs-white);
}

.navbar .nav-item:hover .dropdown-menu {
    transform: rotateX(0deg);
    visibility: visible;
    background: var(--bs-light);
    transition: .5s;
    opacity: 1;
}

@media (max-width: 991.98px) {
    .sticky-top.navbar-light {
        position: relative;
        background: var(--bs-white);
    }

    .navbar.navbar-expand-lg .navbar-toggler {
        padding: 10px 20px;
        border: 1px solid var(--bs-primary);
        color: var(--bs-primary);
    }

    .navbar-light .navbar-collapse {
        margin-top: 15px;
        border-top: 1px solid #DDDDDD;
    }

    .navbar-light .navbar-nav .nav-link,
    .sticky-top.navbar-light .navbar-nav .nav-link {
        padding: 10px 0;
        margin-left: 0;
        color: var(--bs-dark);
    }

    .navbar-light .navbar-nav .nav-item .nav-link {
        color: var(--bs-dark);
    }

    .navbar-light .navbar-brand img {
        max-height: 45px;
    }
}

@media (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
        display: block;
        visibility: hidden;
        top: 100%;
        transform: rotateX(-75deg);
        transform-origin: 0% 0%;
        border: 0;
        border-radius: 10px;
        transition: .5s;
        opacity: 0;
    }

    .navbar-light {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        z-index: 999;
    }
    
    .sticky-top.navbar-light {
        position: fixed;
        background: var(--bs-light);
    }

    .navbar-light .navbar-nav .nav-link::before {
        position: absolute;
        content: "";
        width: 0;
        height: 2px;
        bottom: -1px;
        left: 50%;
        background: var(--bs-primary);
        transition: .5s;
    }

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active::before {
        width: calc(100% - 2px);
        left: 1px;
    }

    .navbar-light .navbar-nav .nav-link::after {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        bottom: -1px;
        left: 50%;
        background: var(--bs-primary);
        transition: .5s;
    }

    .navbar-light .navbar-nav .nav-link:hover::after,
    .navbar-light .navbar-nav .nav-link.active::after {
        width: 2px;
        height: 12px;
    }
}
/*** Navbar End ***/

/*** Carousel Hero Header Start ***/
.header-carousel .header-carousel-item img {
    object-fit: cover;
}

.header-carousel .header-carousel-item,
.header-carousel .header-carousel-item img {
        height: 700px;
}


.header-carousel .owl-nav .owl-prev,
.header-carousel .owl-nav .owl-next {
    position: absolute;
    width: 60px;
    height: 60px;
    border-radius: 60px;
    background: var(--bs-primary);
    color: var(--bs-white);
    font-size: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.5s;
}

.header-carousel .owl-nav .owl-prev {
    bottom: 30px;
    left: 30px;
    margin-left: 90px;
}
.header-carousel .owl-nav .owl-next {
    bottom: 30px;
    left: 30px;
}

.header-carousel .owl-nav .owl-prev:hover,
.header-carousel .owl-nav .owl-next:hover {
    box-shadow: inset 0 0 100px 0 var(--bs-light);
    color: var(--bs-primary);
}


.header-carousel .header-carousel-item .carousel-caption {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    bottom: 0;
    padding-top: 120px;
    background: rgba(0, 0, 0, .7);
    display: flex;
    align-items: center;
}

@media (max-width: 991px) {
    .header-carousel .header-carousel-item .carousel-caption {
        padding-top: 45px;
    }
}

@media (max-width: 767px) {
    .header-carousel .owl-nav .owl-prev {
        left: 50%;
        transform: translateX(-50%);
        margin-left: -45px;
    }


    .header-carousel .owl-nav .owl-next {
        left: 50%;
        transform: translateX(-50%);
        margin-left: 45px;
    }
}


.header-carousel .header-carousel-item img {
    animation-name: image-zoom;
    animation-duration: 10s;
    animation-delay: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    transition: 1s;
}

@keyframes image-zoom {
    0%  {height: 100%; opacity: 0.9;}

    25% {height: 110%; opacity: 0.50;}

    50% {height: 115%; opacity: 1;}

    75% {height: 110%; opacity: 0.50;}

    100% {height: 100%; opacity: 0.9;}
}
/*** Carousel Hero Header End ***/


/*** Single Page Hero Header Start ***/
.bg-breadcrumb {
    position: relative;
    overflow: hidden;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../img/carousel-1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 140px 0 60px 0;
    transition: 0.5s;
}

@media (min-width: 992px) {
    .bg-breadcrumb {
        padding: 140px 0 60px 0;
    }
}

@media (max-width: 991px) {
    .bg-breadcrumb {
        padding: 60px 0 60px 0;
    }
}

.bg-breadcrumb .breadcrumb {
    position: relative;
}

.bg-breadcrumb .breadcrumb .breadcrumb-item a {
    color: var(--bs-white);
}
/*** Single Page Hero Header End ***/


/*** Service Start ***/
.service .service-item {
    background: var(--bs-light);
    border-radius: 10px;
    transition: 0.5s;
}

.service .service-item:hover {
    box-shadow: 0 0 45px rgba(0, 0, 0, .2);
}

.service .service-item .service-img {
    position: relative;
    overflow: hidden;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    transition: 0.5s;
}

.service .service-item .service-img img {
    transition: 0.5s;
}

.service .service-item:hover .service-img img {
    transform: scale(1.2);
}
</style>
 <!-- Icon Font Stylesheet -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
</head>
<body >
     <!-- Navbar & Hero Start -->
     <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Stocker</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="services.php" class="nav-item nav-link">Services</a>
                        <a href="blogs.php" class="nav-item nav-link">Blogs</a>
                        <div class="nav-item dropdown">
                            <a href="pages.php" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Pages</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Our Features</a>
                                <a href="team.html" class="dropdown-item">Our team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="offer.html" class="dropdown-item">Our offer</a>
                                <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a>
                </div>
            </nav>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>
</html>
      