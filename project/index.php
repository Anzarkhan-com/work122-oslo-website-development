<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oslo Colour Festival - Holi in Norway</title>
    <link rel="stylesheet" href="assets/css/new-style.css">
    <link rel="stylesheet" href="assets/css/akc-sheep.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Banner Slider Styles */
        #osloBannerSlider {
            position: relative;
            overflow: hidden;
        }
        .carousel-inner {
            width: 100%;
        }
        .carousel-item {
            transition: transform 1.2s ease-in-out;
        }
        .carousel-item img {
            width: 100%;
            object-fit: cover;
        }
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        #osloBannerSlider:hover .carousel-control-prev,
        #osloBannerSlider:hover .carousel-control-next {
            opacity: 0.8;
        }
        .carousel-indicators {
            margin-bottom: 1rem;
        }
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.5);
            border: 2px solid transparent;
        }
        .carousel-indicators button.active {
            background-color: #fff;
            transform: scale(1.2);
        }
        /* Carousel Caption Styling */
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            bottom: 50px;
            text-align: center;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
            animation-delay: 0.5s;
        }
        .carousel-caption h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .carousel-caption p {
            font-size: 1.2rem;
            margin-bottom: 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 768px) {
            .carousel-control-prev, .carousel-control-next {
                width: 10%;
            }
            .carousel-indicators button {
                width: 8px;
                height: 8px;
            }
            .carousel-caption {
                bottom: 20px;
                padding: 10px;
            }
            .carousel-caption h2 {
                font-size: 1.5rem;
            }
            .carousel-caption p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- preloader start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader end -->
    
    <!-- header section start  -->
    <?php
    include 'elements/header.php';
    ?>
    <!--header section end -->
    
    <!-- main section start  -->
    <section style="margin-top: -137px;">
        <div id="osloBannerSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#osloBannerSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#osloBannerSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button type="button" data-bs-target="#osloBannerSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#osloBannerSlider" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/banner/2.jpg" class="d-block w-100 akc-holi" alt="Oslo Colour Festival" loading="lazy">
                    <!-- <div class="carousel-caption">
                        <h2>Welcome to Oslo Colour Festival</h2>
                        <p>Experience the vibrant colors of Holi in Norway</p>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banner/3.jpg" class="d-block w-100 akc-holi" alt="Oslo Colour Festival" loading="lazy">
                    <!-- <div class="carousel-caption">
                        <h2>Celebrate Together</h2>
                        <p>Join us for a day of joy, colors and togetherness</p>
                    </div> -->
                </div>
                <!-- <div class="carousel-item">
                    <img src="assets/images/banner/02.jpg" class="d-block w-100 akc-holi" alt="Oslo Colour Festival" loading="lazy">
                    <div class="carousel-caption">
                        <h2>Colors of Unity</h2>
                        <p>Bringing cultures together through the festival of colors</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banner/3.jpg" class="d-block w-100 akc-holi" alt="Oslo Colour Festival" loading="lazy">
                    <div class="carousel-caption">
                        <h2>Oslo Colour Festival 2025</h2>
                        <p>Mark your calendars for the biggest celebration of Holi</p>
                    </div>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#osloBannerSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#osloBannerSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- main section end -->

    
    <!-- day counter  -->
    <section>
        <div class="row akc-timer text-center py-2 W-100">
            <div id="timer"></div>
        </div>
    </section>
    <!-- day counter end  -->
    <!-- galary section start  -->
    <section class="py-5">
        <div class="container">
            <div class="row p-0">
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/1.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/2.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/3.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/4.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
            </div>
            <div class="row p-0">
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/5.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/6.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/7.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/8.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
            </div>
            <div class="row p-0">
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/9.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/10.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/11.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/12.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
            </div>
            <div class="row p-0">
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/13.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/14.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/15.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
                <div class="col-md-3 p-0">
                    <img src="assets/images/galary/16.png" alt="image" class="img-fluid"  loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- galary section end  -->
    <!-- text section start-->
    <section class="akc-color py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="akc-d-flex justify-content-center custom-text-color text-center akc-ft-size-xxx-large ">
                        Welcome to Oslo Colour Festival 2025</h1>
                    <p class="akc-d-flex justify-content-center custom-text-color akc-ft-size-large text-center">The
                        Indian community in Norway is bringing together the festival of colours. <br>
                        To unleash the hues of joy, carefreeness, love, unity and togetherness.</p>
                    <a class="custom-link akc-d-flex justify-content-center custom-text-color" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- text section end  -->
    <!-- new section strat  -->
    <section class="py-4 akc-border-custom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/new-galary/1.png" alt="image" class="img-fluid"  loading="lazy">
                    <p class="text-center galary-color py-2">CULTURE</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/new-galary/children-dance.JPG" alt="image" class="img-fluid"  loading="lazy">
                    <p class="text-center galary-color py-2">KIDS PERFORMANCES</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/new-galary/4.png" alt="image" class="img-fluid"  loading="lazy">
                    <p class="text-center galary-color py-2">FOOD</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/images/new-galary/holi-playing.JPG" alt="image" class="img-fluid"  loading="lazy">
                    <p class="text-center galary-color py-2">OCF 2022</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/new-galary/5.png" alt="image" class="img-fluid"  loading="lazy">
                    <p class="text-center galary-color py-2">OCF 2023</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/new-galary/1-14.JPG" alt="image" class="img-fluid"  loading="lazy">
                    <p class="text-center galary-color py-2">OCF 2024</p>
                </div>
            </div>
        </div>
    </section>
    <!-- new section end  -->
    <!-- client section start  -->
   
    <section>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <h2 class="custom-color-new"> PAST SPONSORS & PARTNERS</h2>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row justify-content-center align-items-end">
                    <div class="col-md-3 py-4">
                        <div class="row d-flex align-items-center">

                            <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/new.png" alt="partner logo" loading="lazy" class="img-fluid">
                                </a>
                            </div>
                            <!-- <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/Capgemini.png" alt="partner logo"  loading="lazy" class="img-fluid">
                                </a>
                            </div> -->
                        </div>
                        <!-- <div class="row d-flex flex-column al">
                            <div class="col">
                                <img src="assets/images/partner-logo/rectangle-1.png" alt="partner logo"  loading="lazy" class="img-fluid w-100">
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-3 py-4">
                        <div class="row d-flex align-items-center">
                            <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/gold-sponsor.png" alt="partner logo" loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-4">
                        <div class="row d-flex align-items-center">
                            <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/Silver Sponsor.png" alt="partner logo" loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-4">
                        <div class="row d-flex align-items-center">
                            <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/Bronze Partner.png" alt="partner logo" loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4">
                <div class="row align-items-end">
                    <div class="col-md-4 py-4">
                        <div class="row d-flex align-items-center">
                            <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/Beverage Partner.png" alt="Beverage logo" loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 py-4">
                        <div class="row d-flex align-items-center">
                            <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/PKG. Partner.png " alt="PKG logo" loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-4">
                        <div class="row d-flex align-items-center">
                            <div class="col d-flex align-items-center ">
                                <a href="">
                                    <img src="assets/images/partner-logo/Raffle Partner.png" alt="Raffle logo" loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-2 py-3 text-center">
                        <div class="row d-flex align-items-center">
                            <div class="col d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/skg.png" alt="partner logo"  loading="lazy" class="img-fluid" style="max-width: 120px;">
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex ">
                            <div class="col">
                                <img src="assets/images/old-img/partner-logo/pkg-partner.png" alt="partner logo"  loading="lazy" class="img-fluid">
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-12 py-3 text-center">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-12 py-4" style=margin-left:110px>
                                <div class="row d-flex align-items-center">
                                    <div class="col d-flex align-items-center ">
                                        <a href="">
                                            <img src="assets/images/partner-logo/Display Partner.png" alt="Raffle logo" loading="lazy" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/tech-agrim.png" alt="partner logo"  loading="lazy" class="img-fluid" style="max-width:150px;">
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex flex-column">
                            <div class="col">
                                <img src="assets/images/old-img/partner-logo/digital-partner.png" alt="partner logo"  loading="lazy" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 text-center">
                        <div class="row d-flex align-items-center">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/nimbu.png" alt="partner logo"  loading="lazy">
                                </a>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/new-delhi.png" alt="partner logo"  loading="lazy">
                                </a>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/hayeli.png" alt="partner logo"  loading="lazy">
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex flex-column">
                            <div class="col">
                                <img src="assets/images/old-img/partner-logo/hospitality-partner.png" alt="partner logo"  loading="lazy" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 py-3 text-center">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/malhistream.png" alt="partner logo"  loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex flex-column">
                            <div class="col">
                                <img src="assets/images/old-img/partner-logo/live-stream-partner.png" alt="partner logo"  loading="lazy" class="img-fluid">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container py-4 ">
                <div class="row justify-content-center align-items-end">
                    <div class="col-md-2 py-3 text-center">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/inglot.png" alt="partner logo"  loading="lazy" class="img-fluid" style="max-width:150px;">
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex flex-column">
                            <div class="col">
                                <img src="assets/images/old-img/partner-logo/gift-partner.png" alt="partner logo"  loading="lazy" class="img-fluid">
                            </div>
                        </div>
                    </div> -->
            <!-- <div class="col-md-4 py-3 text-center">
                        <div class="row d-flex align-items-center">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/scandic-desi.png" alt="partner logo"  loading="lazy">
                                </a>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/complete-smile.png" alt="partner logo"  loading="lazy">
                                </a>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/eco.jpg" alt="partner logo"  loading="lazy">
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex flex-column">
                            <div class="col">
                                <img src="assets/images/old-img/partner-logo/hospitality-partner.png" alt="partner logo"  loading="lazy" class="img-fluid">
                            </div>
                        </div>
                    </div> -->
            <!-- <div class="col-md-2 py-3">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col d-flex align-items-center justify-content-center">
                                <a href="">
                                    <img src="assets/images/old-img/partner-logo/lofoten-seaweed.png" alt="partner logo"  loading="lazy" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="row d-flex flex-column">
                            <div class="col">
                                <img src="assets/images/old-img/partner-logo/nutritional-partner.png" alt="partner logo"  loading="lazy" class="img-fluid">
                            </div>
                        </div>
                    </div> -->
        </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <h2 style="color: #ED1E79;"> PAST RAFFLE PARTNERS</h2>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12 py-5 text-center" style=margin-top:-100px>
                        <a href="">
                            <img src="assets/images/partner-logo/Group 47.png" alt="Group logo" loading="lazy" class="img-fluid">
                        </a>
                    </div>
                    <!-- <div class="col-md-1 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/tusenfryd.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/megazone.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-1 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/rituals.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/timma.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-2 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/snx.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/visit-oslo.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-1 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/burger-king.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-2 py-5 text-center">
                        <a href="">
                            <img src="assets/images/old-img/partner-logo/nila-indian-rendezvous.png" alt="partner logo"  loading="lazy" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row py-4 align-items-center">
                </div> -->
                </div>
    </section>
    <!-- <section class="akc-client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="akc-d-flex justify-content-center custom-text-color text-center akc-ft-size-xx-large">
                        PAST SPONSORS</h1>
                </div>
                <div class="row justify-content-center py-3">
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/new.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/1.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/2.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/3.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/4.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                </div>
                <div class="row justify-content-center py-3">
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/5.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/6.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/7.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/8.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/9.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                </div>
                <div class="row justify-content-center py-3">
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/10.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/11.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/12.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/13.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                    <div class="col-md-2">
                        <img src="assets/images/client-logo/14.png" alt="image" class="img-fluid"  loading="lazy">
                    </div>
                </div>
            </div>
    </section> -->
    <!--- client section end  -->
    <!--footer section start -->
    <?php
    include 'elements/footer.php';
    ?>
    <!--footer section end -->
    <script src="assets/js/new-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Cookie Consent Section -->
    <div class="cookie-consent-overlay" id="cookieConsent">
        <div class="cookie-consent-popup">
            <div class="cookie-content">
                <h3 class="cookie-title">Cookie Consent</h3>
                <p>We use cookies to enhance your experience on our website. By continuing to use our site, you agree to our use of cookies.</p>
                <div class="cookie-buttons">
                    <button class="btn btn-custom" onclick="acceptCookies()">Accept All</button>
                    <button class="btn btn-custom2" onclick="declineCookies()">Decline</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .cookie-consent-popup {
            background: white;
            border-radius: 15px;
            padding: 30px;
            max-width: 600px;
            width: 90%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            animation: popupFadeIn 0.3s ease-out;
        }
        .cookie-title {
            color: #ed1e79;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .cookie-content {
            text-align: center;
        }
        .cookie-content p {
            margin: 0 0 25px 0;
            font-size: 18px;
            color: #0e485b;
            line-height: 1.5;
        }
        .cookie-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .cookie-buttons .btn {
            padding: 10px 30px;
            font-size: 16px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .cookie-buttons .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        @keyframes popupFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @media (max-width: 576px) {
            .cookie-consent-popup {
                width: 95%;
                padding: 20px;
            }
            .cookie-buttons {
                flex-direction: column;
                gap: 10px;
            }
            .cookie-buttons .btn {
                width: 100%;
            }
        }
    </style>

    <script>
        function checkCookieConsent() {
            if (!localStorage.getItem('cookieConsent')) {
                document.getElementById('cookieConsent').style.display = 'flex';
            }
        }

        function acceptCookies() {
            localStorage.setItem('cookieConsent', 'accepted');
            document.getElementById('cookieConsent').style.display = 'none';
        }

        function declineCookies() {
            localStorage.setItem('cookieConsent', 'declined');
            document.getElementById('cookieConsent').style.display = 'none';
        }

        // Check cookie consent on page load
        window.onload = checkCookieConsent;
    </script>

    <!-- Slider JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the carousel
            var myCarousel = document.getElementById('osloBannerSlider');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000,  // Change slides every 5 seconds
                wrap: true,      // Continuously cycle through slides
                keyboard: true,  // Allow keyboard navigation
                pause: 'hover',  // Pause on hover
                touch: true      // Enable touch swiping on mobile
            });

            // Enhanced animation effects for slides
            myCarousel.addEventListener('slide.bs.carousel', function(event) {
                // Current slide that's about to be hidden
                const activeSlide = event.relatedTarget;
                
                // Reset caption animation by removing and adding animation class
                const captions = document.querySelectorAll('.carousel-caption');
                captions.forEach(caption => {
                    caption.style.opacity = '0';
                    caption.style.animation = 'none';
                    caption.offsetHeight; // Trigger reflow
                    caption.style.animation = null;
                });
                
                // Add a small delay before showing the new caption
                setTimeout(() => {
                    const nextCaption = activeSlide.querySelector('.carousel-caption');
                    if (nextCaption) {
                        nextCaption.style.opacity = '0';
                        nextCaption.style.animation = 'fadeIn 1s ease-in-out forwards';
                    }
                }, 300);
            });

            // Swipe support enhancement for mobile
            let touchStartX = 0;
            let touchEndX = 0;
            
            myCarousel.addEventListener('touchstart', function(event) {
                touchStartX = event.changedTouches[0].screenX;
            }, false);
            
            myCarousel.addEventListener('touchend', function(event) {
                touchEndX = event.changedTouches[0].screenX;
                handleSwipe();
            }, false);
            
            function handleSwipe() {
                const swipeThreshold = 50; // Minimum distance for swipe
                if (touchEndX < touchStartX - swipeThreshold) {
                    // Swipe left - go to next slide
                    carousel.next();
                }
                if (touchEndX > touchStartX + swipeThreshold) {
                    // Swipe right - go to previous slide
                    carousel.prev();
                }
            }

            // Handle preloading of images for better performance
            var slideImages = document.querySelectorAll('#osloBannerSlider img');
            slideImages.forEach(function(img) {
                const image = new Image();
                image.src = img.src;
            });
            
            // Auto-initialize the first slide caption
            setTimeout(() => {
                const firstCaption = document.querySelector('.carousel-item.active .carousel-caption');
                if (firstCaption) {
                    firstCaption.style.animation = 'fadeIn 1s ease-in-out forwards';
                }
            }, 500);
        });
    </script>
</body>

</html>