<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Oslo Colour Festival - Holi in Norway</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/core-img/favicon_io/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>
    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding in columns */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* this adds the "card" effect */
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        /* Responsive columns - one column layout (vertical) on small screens */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        .parent {
            display: grid;
            grid-gap: 25px;
            grid-template-columns: repeat(3, 150px);
            justify-content: center;
            grid-template-rows: repeat(3, 150px);
        }

        .parent>div {
            padding: 10px;
            border-radius: 5px;
            display: grid;
            place-items: center;
        }

        .parent>div {
            font-family: sans-serif;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
    <style>
        .single-tab-content .row {
            justify-content: center;
        }

        .single-client-content {
            height: 100%;
        }
    </style>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "110132881638672");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>
    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/assets/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    </script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
    <!-- Header Area Start -->
    <?php
    require_once 'elements/header.php'
    ?>


    <section class="akc-glimpises-bg" id="glimpses">
        <div class="our-blog-area section-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="text-center mb-4">

                            <button type="button" class="btn btn-danger" onclick="showAll()">All</button>
                            <button type="button" class="btn btn-danger" onclick="showCulturalProgram()">Cultural
                                program</button>
                            <button type="button" class="btn btn-danger" onclick="showColorCelebration()">Color
                                Celebration</button>
                            <button type="button" class="btn btn-danger" onclick="showMediaQueries()">Media
                                Coverage</button>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Blog Area -->
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all  cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/13.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://nrksuper.no/serie/supernytt/MSUM02051322/sesong-202205/episode-10?fbclid=IwAR2QqkhoIhbA0wcoJyvROodKAY4EmzAIbrK9ANmdD47LEm0fRczU4JCyTno" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/nrksup.jpg" alt="">

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;  ">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2  " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/9.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/10.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/11.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all color-celebration">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/color/colornew/12.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-4 all  cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/14.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/15.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important; ">
                                <img src= "assets/img/cultural/culturalnew/16.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/17.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/18.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/19.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/20.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/21.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/22.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/23.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/24.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all cultural-program">
                        <div class="single-blog-area bg-2 " style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px   !important;">
                                <img src= "assets/img/cultural/culturalnew/25.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://www.aftenposten.no/oslo/byliv/i/Or9yW1/planlegg-vaaren-10-morsomme-ting-som-skjer-i-oslo" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/aften1.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://www.facebook.com/indiandesinorway/posts/pfbid02tLjDjXXjTZhboN33m1iUr4B8cizEWW14jraditVcebCBwWJoP14kTc6RqV9fvXrZl" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/desi1.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://www.norwaynews.com/holi-2022-oslo/?fbclid=IwAR2JgTzR4pYre2KQfSND-QYJF02zSk3AC7IUS4M1JT4zjIiQqyKwe9I4IxU" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;  ">
                                    <img src= "assets/img/media/medianew/news1..jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://tv.nrk.no/serie/dagsrevyen/202205/NNFA02050722/avspiller">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/nrk2.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://asiannews.in/indian-diaspora-brings-oslo-colour-festival-to-norway/?fbclid=IwAR2qyAnU8DvtEmUCX0azaplckwKFs0TrLvBFMrCqASlpfk9J4wwW1tT20Ac" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/asian.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://www.facebook.com/watch/?extid=CL-UNK-UNK-UNK-IOS_GK0T-GK1C&v=710895543558229" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/ptc1.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <div class="single-blog-area bg-2" style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px !important; height: 227px;">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zco7j_Ka5oI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://youtu.be/_adG3X29-s0" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px">
                                    <img src= "assets/img/media/medianew/punjab.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://edtimes.in/indian-diaspora-brings-oslo-colour-festival-to-norway/?fbclid=IwAR0hjPPj0-yQjfwPBwzjUGintuHS6yLVNgVzP5mV_31SblkYvBqAno_dZlM" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/ed1.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <a href="https://m.dailyhunt.in/news/india/english/ed+times-epaper-edtimes/indian+diaspora+brings+oslo+colour+festival+to+norway-newsid-n384785158?s=a&uu=0xa75317646e3f2bc8&ss=pd" target="_blank">
                            <div class="single-blog-area bg-2" style="visibility: visible;">
                                <!-- Single blog Thumb -->
                                <div class="single-blog-thumb" style="border-radius: 10px !important;">
                                    <img src= "assets/img/media/medianew/dailyhunt.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 all media-queries">
                        <div class="single-blog-area bg-2" style="visibility: visible;">
                            <!-- Single blog Thumb -->
                            <div class="single-blog-thumb" style="border-radius: 10px !important; height: 227px;">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qqHV32KM9rQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Single Blog Area -->

                <!-- Single Blog Area -->

            </div>
        </div>
        </div>
    </section>
    <!-- Footer Area Start -->
    <?php
    require_once 'elements/footer.php'
    ?>
    <!-- Footer Area End -->
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src= "assets/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src= "assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src= "assets/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src= "assets/js/confer.bundle.js"></script>
    <!-- Active -->
    <script src= "assets/js/default-assets/active.js"></script>
    <!-- kit -->
    <script src="https://kit.fontawesome.com/7f9bada808.js" crossorigin="anonymous"></script>

    <script>
        //countdown timer .countdown-timer and get end date as attibute data-date
        var countdownTimer = document.querySelectorAll('.countdown-timer');
        countdownTimer.forEach(function(timer) {
            var endDate = timer.getAttribute('data-date');
            var days = timer.querySelector('.days');
            var hours = timer.querySelector('.hours');
            var minutes = timer.querySelector('.minutes');
            var seconds = timer.querySelector('.seconds');
            var timeInterval = setInterval(function() {
                var t = Date.parse(endDate) - Date.parse(new Date());
                if (t >= 0) {
                    var daysT = Math.floor(t / (1000 * 60 * 60 * 24));
                    var hoursT = Math.floor((t / (1000 * 60 * 60)) % 24);
                    var minutesT = Math.floor((t / 1000 / 60) % 60);
                    var secondsT = Math.floor((t / 1000) % 60);
                    days.innerHTML = daysT;
                    hours.innerHTML = hoursT;
                    minutes.innerHTML = minutesT;
                    seconds.innerHTML = secondsT;
                } else {
                    clearInterval(timeInterval);
                }
            }, 1000);
        });
    </script>
    <script>
        //get element by class name all
        var all = document.getElementsByClassName('all');

        //get element by class name color-celebration
        var colorCelebration = document.getElementsByClassName('color-celebration');

        //get element by class name cultural-program
        var culturalProgram = document.getElementsByClassName('cultural-program');

        //get element by class name media-queries
        var mediaQueries = document.getElementsByClassName('media-queries');


        function showAll() {

            //loop through all elements with class name all
            for (var i = 0; i < all.length; i++) {

                //show all elements with class name all
                all[i].style.display = "block";
            }

        }

        //function to show color-celebration
        function showColorCelebration() {

            //loop through all elements with class name color-celebration
            for (var i = 0; i < colorCelebration.length; i++) {

                //show all elements with class name color-celebration
                colorCelebration[i].style.display = "block";
            }

            //loop through all elements with class name cultural-program
            for (var i = 0; i < culturalProgram.length; i++) {

                //hide all elements with class name cultural-program
                culturalProgram[i].style.display = "none";
            }

            //loop through all elements with class name media-queries
            for (var i = 0; i < mediaQueries.length; i++) {

                //hide all elements with class name media-queries
                mediaQueries[i].style.display = "none";
            }
        }

        //function to show cultural-program
        function showCulturalProgram() {

            //loop through all elements with class name cultural-program
            for (var i = 0; i < culturalProgram.length; i++) {

                //show all elements with class name cultural-program
                culturalProgram[i].style.display = "block";
            }

            //loop through all elements with class name color-celebration
            for (var i = 0; i < colorCelebration.length; i++) {

                //hide all elements with class name color-celebration
                colorCelebration[i].style.display = "none";
            }

            //loop through all elements with class name media-queries
            for (var i = 0; i < mediaQueries.length; i++) {

                //hide all elements with class name media-queries
                mediaQueries[i].style.display = "none";
            }
        }

        //function to show media-queries
        function showMediaQueries() {

            //loop through all elements with class name media-queries
            for (var i = 0; i < mediaQueries.length; i++) {

                //show all elements with class name media-queries
                mediaQueries[i].style.display = "block";
            }

            //loop through all elements with class name color-celebration
            for (var i = 0; i < colorCelebration.length; i++) {

                //hide all elements with class name color-celebration
                colorCelebration[i].style.display = "none";
            }

            //loop through all elements with class name cultural-program
            for (var i = 0; i < culturalProgram.length; i++) {

                //hide all elements with class name cultural-program
                culturalProgram[i].style.display = "none";
            }
        }
    </script>
</body>

</html>