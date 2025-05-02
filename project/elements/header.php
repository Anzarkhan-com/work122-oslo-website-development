<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
            <div class="d-flex flex-column align-items-center">
                <a class="navbar-brand" href="index.php"><img src="./assets/images/logo/1.png" alt="logo" width="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="nav-link active" href="#"><button type="button" class="btn btn-custom2 btn-sm "><a class="text-white text-decoration-none" href="https://www.youtube.com/live/kp5rxhux9-0?si=dp8rE5DrqA4tEvWR">LIVE</a> <i class="fa-solid fa-circle-play" style="color: #ffffff;"></i> </button></a>
            </div>
            <div class="collapse navbar-collapse align-items-baseline" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item akc-fw-large ">
                        <a class="nav-link active fs-15 " href="about.php">ABOUT US </a>
                    </li>
                    <div class="akc-home-divider"></div>
                    <li class="nav-item akc-fw-large ">
                        <a class="nav-link active fs-15" href="event-details.php">EVENT DETAILS</a>
                    </li>
                    <div class="akc-home-divider"></div>
                    <li class="nav-item akc-fw-large ">
                        <a class="nav-link active fs-15" href="sponsorship.php">SPONSORSHIP</a>
                    </li>
                    <div class="akc-home-divider"></div>
                    <li class="nav-item akc-fw-large ">
                        <a class="nav-link active fs-15" href="infopack.php">INFOPACK</a>
                    </li>
                    <div class="akc-home-divider"></div>
                    <li class="nav-item akc-fw-large ">
                        <a class="nav-link active fs-15" href="gallery.php">GALLERY</a>
                    </li>
                    <div class="akc-home-divider"></div>
                    <li class="nav-item akc-fw-large ">
                        <a class="nav-link active fs-15" href="#">FAQ'S</a>
                    </li>
                    <div class="akc-home-divider"></div>
                    <li class="nav-item akc-fw-large ">
                        <a class="nav-link active fs-15" href="#">CONTACT</a>
                    </li>
                </ul>
                <div class="d-flex flex-column ml">
                    <div class="d-flex justify-content-between">
                        <a class="nav-link active" href="https://www.facebook.com/oslocolourfestival"><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="nav-link active" href="https://www.youtube.com/@oslocolourfestival6777"><i class="fa-brands fa-youtube"></i></a>
                        <a class="nav-link active" href="https://www.instagram.com/oslocolourfestival.no/?igshid=YmMyMTA2M2Y%3D"><i class="fa-brands fa-instagram"></i></a>
                        <a class="nav-link active" href="https://www.tiktok.com/@oslocolourfestival?_t=8kdoxKyywL3&_r=1"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                    <div class="pt-2">
                        <button type="button" class="btn btn-custom btn-sm" onclick="showNewsletterPopup()">
                            <i class="fa-solid fa-share" style="color: #ffffff;"></i> Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Newsletter Popup -->
    <div id="newsletterPopup" class="newsletter-popup">
        <div class="newsletter-content">
            <span class="close-popup" onclick="hideNewsletterPopup()">&times;</span>
            <h3>Newsletter Signup</h3>
            <form id="newsletterForm" onsubmit="handleNewsletterSubmit(event)">
                <div class="form-group">
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label class="checkbox-container">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                        I agree to receive newsletters from Oslo Colour Festival & Indo Nord Events
                    </label>
                </div>
                <button type="submit" class="submit-btn">Subscribe</button>
            </form>
        </div>
    </div>

    <style>
        .newsletter-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
        .newsletter-content {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            position: relative;
            animation: popupFadeIn 0.3s ease-out;
        }
        .close-popup {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #ed1e79;
        }
        .newsletter-content h3 {
            color: #ed1e79;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ed1e79;
            border-radius: 25px;
            font-size: 16px;
        }
        .checkbox-container {
            display: block;
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            font-size: 14px;
            color: #0e485b;
        }
        .checkbox-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: white;
            border: 2px solid #ed1e79;
            border-radius: 4px;
        }
        .checkbox-container input:checked ~ .checkmark {
            background-color: #ed1e79;
        }
        .submit-btn {
            width: 100%;
            padding: 12px;
            background: #ed1e79;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(237, 30, 121, 0.3);
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
            .newsletter-content {
                width: 95%;
                padding: 20px;
            }
        }
    </style>

    <script>
        function showNewsletterPopup() {
            document.getElementById('newsletterPopup').style.display = 'flex';
        }

        function hideNewsletterPopup() {
            document.getElementById('newsletterPopup').style.display = 'none';
        }

        function handleNewsletterSubmit(event) {
            event.preventDefault();
            alert('Thank you for subscribing!');
            hideNewsletterPopup();
        }

        // Close popup when clicking outside
        document.getElementById('newsletterPopup').addEventListener('click', function(e) {
            if (e.target === this) {
                hideNewsletterPopup();
            }
        });
    </script>
</header>