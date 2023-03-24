<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Title -->
   <title>Frequently Asked Questions - Oslo Colour Festival</title>
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
      /* Style the element that is used to open and close the accordion class */
      p.accordion {
         background-color: #eee;
         color: #444;
         cursor: pointer;
         padding: 18px;
         width: 100%;
         text-align: left;
         border: none;
         outline: none;
         transition: 0.4s;
         margin-bottom: 10px;
      }

      /* Add a background color to the accordion if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
      p.accordion.active,
      p.accordion:hover {
         background-color: #ddd;
      }

      /* Unicode character for "plus" sign (+) */
      p.accordion:after {
         content: '\2795';
         font-size: 13px;
         color: #777;
         float: right;
         margin-left: 5px;
      }

      /* Unicode character for "minus" sign (-) */
      p.accordion.active:after {
         content: "\2796";
      }

      /* Style the element that is used for the panel class */
      div.panel {
         padding: 0 18px;
         background-color: white;
         max-height: 0;
         overflow: hidden;
         transition: 0.4s ease-in-out;
         opacity: 0;
         margin-bottom: 10px;
      }

      div.panel.show {
         opacity: 1;
         max-height: 500px;
         /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
      }
   </style>
   <script>
      document.addEventListener("DOMContentLoaded", function(event) {


         var acc = document.getElementsByClassName("accordion");
         var panel = document.getElementsByClassName('panel');

         for (var i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
               var setClasses = !this.classList.contains('active');
               setClass(acc, 'active', 'remove');
               setClass(panel, 'show', 'remove');

               if (setClasses) {
                  this.classList.toggle("active");
                  this.nextElementSibling.classList.toggle("show");
               }
            }
         }

         function setClass(els, className, fnName) {
            for (var i = 0; i < els.length; i++) {
               els[i].classList[fnName](className);
            }
         }

      });
   </script>
</head>

<body>
   <!-- Preloader -->
   <div id="preloader">
      <div class="loader"></div>
   </div>
   <!-- /Preloader -->
   <!-- Header Area Start -->
   <header class="header-area">
      <div class="classy-nav-container breakpoint-off">
         <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="conferNav">
               <!-- Logo -->
               <a class="nav-brand" href="./index.html"><img src="assets/img/core-img/logo.png" width="80" height="80" alt=""></a>
               <!-- Navbar Toggler -->
               <div class="classy-navbar-toggler">
                  <span class="navbarToggler"><span></span><span></span><span></span></span>
               </div>
               <!-- Menu -->
               <div class="classy-menu">
                  <!-- Menu Close Button -->
                  <div class="classycloseIcon">
                     <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                  </div>
                  <!-- Nav Start -->
                  <div class="classynav">
                     <ul id="nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="/activities.html">Event Details</a></li>
                        <li><a href="/infopack.html">Infopack</a></li>
                        <li><a href="/index.html#about">About us</a></li>
                        <li><a href="/index.html#about-holi">Color Celebration</a></li>
                        <li><a href="/index.html#sponsors">Sponsors</a></li>
                        <li><a href="/index.htmlfaq.html">FAQs</a></li>
                        <li><a href="/index.html#contactus">Contact</a></li>
                     </ul>
                     <!-- Get Tickets Button -->
                     <script src="https://billetto.no/embed.js"></script>
                     <style>
                        .billetto-btn {
                           line-height: 1.75rem;
                           position: relative;
                           display: inline-block;
                           font-weight: 400;
                           white-space: nowrap;
                           text-align: center;
                           background-image: none;
                           border: 1px solid transparent;
                           cursor: pointer;
                           user-select: none;
                           touch-action: manipulation;
                           height: 32px;
                           padding: 1px 15px;
                           font-size: 16px;
                           border-radius: 6px;
                           color: #fff;
                           background: #8b24fb;
                           border-color: #8b24fb;
                           text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
                           box-shadow: 0 2px 0 rgba(0, 0, 0, 0.045);
                           text-decoration: none;
                        }

                        .billetto-btn:hover,
                        .billetto-btn:focus,
                        .billetto-btn:active {
                           text-decoration: none;
                           outline: 0;
                           box-shadow: none;
                        }

                        .billetto-btn[disabled] {
                           cursor: not-allowed;
                        }

                        .billetto-btn[disabled],
                        .billetto-btn[disabled]:hover,
                        .billetto-btn[disabled]:focus,
                        .billetto-btn[disabled]:active {
                           color: rgba(0, 0, 0, 0.25);
                           background: #f5f5f5;
                           border-color: #d9d9d9;
                           text-shadow: none;
                           box-shadow: none;
                        }
                     </style>
                     <a class="billetto-btn" href="https://billetto.no/en/e/holi-oslo-colour-festival-tickets-621408/select?color=%238b24fb&locale=en&whitelabel=true">Get tickets</a>
                  </div>
                  <!-- Nav End -->
               </div>
            </nav>
         </div>
      </div>
   </header>

   <!-- Header Area End -->
   <!-- Breadcrumb Area Start -->
   <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(assets/img/bg-img/37.jpg);">
      <div class="container h-100">
         <div class="row h-100 align-items-center">
            <div class="col-12">
               <div class="breadcrumb-content">
                  <h2 class="page-title">Frequently Asked Questions</h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcrumb Area End -->
   <!-- Our Blog Area Start -->
   <div class="our-blog-area section-padding-100">
      <div class="container">
         <h3>FAQs</h3>
         <p class="accordion">Q1. Wh o are we and what is color festival?</p>
         <div class="panel">A. We are the Indian community in collaboration with the Embassy of India in Norway and are organising a festival “Colour Festival in Oslo” on 7th May 2022 at Vallhall Arena, Oslo. The event is being organised to exhibit the rich cultural & regional diversity of India, encouraging non-Indians to connect to India through the celebration of the festival of colours, and celebrating colour festival with the Indian community at a grand scale in Norway.
            <ul>
               </br>
               <li style="list-style: decimal;list-style-position: inside;">Color Celebration is a popular ancient Indian festival, also known as the festival of colours</span></li>
               <li style="list-style: decimal;list-style-position: inside;">Color Festival celebrates the arrival of the spring, the end of winter, and an invocation for a good harvest season</span></li>
               <li style="list-style: decimal;list-style-position: inside;">People smear coloured powders and drench each other with water-filled balloons or water guns&nbsp;</span></li>
               <li style="list-style: decimal;list-style-position: inside;">Anyone and everyone is fair game! Friend or stranger, rich or poor, man or woman, children and elders</span></li>
               <li style="list-style: decimal;list-style-position: inside;">Join us and experience the fun in Norway&rsquo;s biggest colour festival&nbsp;</span></li>
            </ul>
         </div>
         <p class="accordion">Q2. Where can I get tickets from?</p>
         <div class="panel">A. Tickets can be booked from <a href="https://billetto.no/en/e/oslo-colour-festival-2023-tickets-799853">here</a>. </div>
         <p class="accordion">Q3. Is there a minimum age to participate and play Color Festival?</p>
         <div class="panel">A. Minimum age to participate is 18 years, below 18 years need to be accompanied by adults.</div>
         <p class="accordion">Q4. Can I bring my own colour powder?</p>
         <div class="panel">A. Colours will be provided by the organisers, and you are not allowed to bring your own colours.</div>
         <p class="accordion">Q5. Can I bring my own food?</p>
         <div class="panel">A. You are not allowed to bring your own food or drinks. Food can be purchased at nominal prices at the event. If you have special needs/allergy, contact organisers prior for approval at - <a href="mailto:colorfestival@indonord.org">colorfestival@indonord.org</a></div>
         <p class="accordion">Q6. What are Color Festival entrance wristbands?</p>
         <div class="panel">A. Color Festival entrance bands will be provided when you show up at the entrance and show your registration details which will be sent to you by email after you register.</div>
         <p class="accordion">Q7. Can I bring my own camera?</p>
         <div class="panel">A. You can bring your own camera to take pictures of the event for your personal use.</div>
         <p class="accordion">Q8. Is it ok to create content of this event to use it commercially later like create Youtube videos or likewise?</p>
         <div class="panel">A. No, you cannot take professional photos or pictures or publish it on social media /youtube but with prior approval from the organisers. Organisers reserve the right to take action against this.</div>
         <p class="accordion">Q9. Is the Food and Drink available onsite?</p>
         <div class="panel">A. Yes, food and non- alcoholic drinks can be purchased on site. Alcoholic drinks are strictly not allowed on site. Look for allergy instructions on the food counters.</div>
         <p class="accordion">10. What is the refund policy?</p>
         <div class="panel">A. Tickets once purchased cannot be refunded and are non- transferable.</div>
         <p class="accordion">11. Is the colour powder safe?</p>
         <div class="panel">A. Yes, the powder is completely non-toxic, water soluble and environmentally friendly. But if you have very sensitive skin/hair/airborne/respiratory related allergy/condition we recommend you avoid colours. Safety goggles/glasses can also be worn to protect the eyes, especially for people who wear contact lenses. </div>
         <p class="accordion">12. Can I buy tickets on the spot?</p>
         <div class="panel">A. On spot entry is subjected to availability and cannot be guaranteed . We recommend to pre-register.
         </div>

      </div>
   </div>
   </div>
   <!-- Our Blog Area End -->
   <!-- Footer Area Start -->
   <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
      <!-- Main Footer Area -->
      <div class="main-footer-area">
         <div class="container">
            <div class="row">
               <!-- Single Footer Widget Area -->
               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                     <!-- Footer Logo -->
                     <a href="#" class="footer-logo"><img src="assets/img/core-img/logo.png" height="80" width="80" alt=""></a>
                     <p>The Indian community in Norway is bringing together Oslo and Akershus to celebrate the festival of colours.</p>
                     <!-- Social Info -->
                     <div class="social-info">
                        <a href="https://www.facebook.com/holiinnorway"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="https://www.instagram.com/oslocolourfestival.no"><i class="zmdi zmdi-instagram"></i></a>
                        <!--    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                              <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                              <a href="#"><i class="zmdi zmdi-linkedin"></i></a> -->
                     </div>
                  </div>
               </div>
               <!-- Single Footer Widget Area -->
               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="single-footer-widget mb-60 wow fadeInUp" data-wow-delay="300ms">
                     <!-- Widget Title -->
                     <br>
                     <h5 class="widget-title">Contact</h5>
                     <!-- Contact Area -->
                     <div class="footer-contact-info">
                        <p style="color:white;"><i class="zmdi zmdi-map"></i><a href="https://www.google.com/maps/place/Vallhall+Arena/@59.9204919,10.8039568,17z/data=!3m1!4b1!4m5!3m4!1s0x46416fb28c0cbb4f:0xb5f1063a32b8e3e9!8m2!3d59.9204919!4d10.8061455" style="color:white;" target="_blank">Dronning Margretes Vei 11, 0663 Oslo</a></p>
                        <p><i class="zmdi zmdi-email"></i>colorfestival@indonord.org</p>
                        <p><i class="zmdi zmdi-globe"></i> www.oslocolourfestival.no</p>
                     </div>
                  </div>
               </div>
               <!-- Single Footer Widget Area -->
            </div>
         </div>
      </div>
      <!-- Copywrite Area -->
      <div class="container">
         <div class="copywrite-content">
            <div class="row">
               <!-- Copywrite Text -->
               <div class="col-12 col-md-6">
                  <div class="copywrite-text">
                     <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                           document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Indians in Norway.
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     </p>
                  </div>
               </div>
               <!-- Footer Menu -->
               <div class="col-12 col-md-6">
                  <div class="footer-menu">
                     <ul class="nav">
                        <li><a href="terms.html"><i class="zmdi zmdi-circle"></i> Terms of use</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer Area End -->
   <!-- **** All JS Files ***** -->
   <!-- jQuery 2.2.4 -->
   <script src="assets/js/jquery.min.js"></script>
   <!-- Popper -->
   <script src="assets/js/popper.min.js"></script>
   <!-- Bootstrap -->
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- All Plugins -->
   <script src="assets/js/confer.bundle.js"></script>
   <!-- Active -->
   <script src="assets/js/default-assets/active.js"></script>
</body>

</html>