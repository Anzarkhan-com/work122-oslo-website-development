<?php
session_start();
require_once 'database/db-con.php';
require_once 'global/global-variables.php';
?>
<?php
if (isset($_GET['unique_link']) && !empty($_GET['unique_link'])) {
    $unique_link = $_GET['unique_link'];
    
    //add unique link into session if its different from previous link
    if(!isset($_SESSION['session_unique_link'])){
        $_SESSION['session_unique_link'] = $unique_link;
        
    }else{
        if($_SESSION['session_unique_link'] != $unique_link){
            $_SESSION['session_unique_link'] = $unique_link;
        }
    }

    $unique_link = $_SESSION['session_unique_link'];

    
    
} else {
?>
    <script>
        window.location = 'career.php';
    </script>
<?php
}
?>
<?php
// SELECT `id`, `title`, `unique_link`, `type_time`, `type_location`, `location`, `salary`, `no_of_openings`, `experience_required`, `short_code`, `description`, `short_description`, `keywords`, `responsibilities`, `requirements`, `is_live` FROM `open_hiring_positions` WHERE 1
//get all the data of job with the help of unique link
$sql = "SELECT * FROM `open_hiring_positions` WHERE `unique_link` = '$unique_link';";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $job_id = $row["id"];
        $title = $row["title"];
        $unique_link = $row["unique_link"];
        $type_time = $row["type_time"];
        $type_location = $row["type_location"];
        $location = $row["location"];
        $salary = $row["salary"];
        $no_of_openings = $row["no_of_openings"];
        $experience_required = $row["experience_required"];
        $short_code = $row["short_code"];
        $description = $row["description"];
        $short_description = $row["short_description"];
        $keywords = $row["keywords"];
        $responsibilities = $row["responsibilities"];
        $requirements = $row["requirements"];
        $is_live = $row["is_live"];
        $modal_job_title = $title;
        $modal_job_id = $job_id;
    }
} else {
    echo "0 results";
?>
    <script>
        //redirect to index.php
        window.location = 'career.php';
    </script>
<?php
}
//prepare title sentence of the page using $title, $location, $type_location (work from home, work from office), $salary
$page_title = $title . " | " . $location . " | " . $type_location . " | " . $salary . "at Anzarkhan.com";
//prepare meta description of the page using $short_description
$meta_description = $short_description;
//prepare meta keywords of the page using $keywords
$meta_keywords = $keywords;
?>


<?php
$file_upload_err = 0;
$file_upload_err_msg = 'null';
$job_applied = 0;
//insert apply to this job data into database of job_applications and upload file to server also send mail to admin and user
if (isset($_POST['job_apply'])) {
    $job_applied = 1;
    // get data of name email phone resume
    $job_id = $_POST['job_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //get file name
    $file_name = $_FILES['resume']['name'];
    //upload file to uploads/resume after validating for size and type 
    $file_size = $_FILES['resume']['size'];
    $file_tmp_name = $_FILES['resume']['tmp_name'];
    $file_type = $_FILES['resume']['type'];
    //validate file size if more than 10mb
    if ($file_size > 10000000) {
        $file_upload_err = 1;
        $file_upload_err_msg = "File size is too large. Please upload file less than 10mb";
    }
    //validate file type (allow only pdf,doc and image formate)
    $file_type = strtolower($file_type);
    if ($file_type != "application/pdf" && $file_type != "application/msword" && $file_type != "application/vnd.openxmlformats-officedocument.wordprocessingml.document" && $file_type != "image/jpeg" && $file_type != "image/png" && $file_type != "image/gif") {
        $file_upload_err = 1;
        $file_upload_err_msg = "File type is not allowed. Please upload file in pdf,doc or image formate";
    }

    //get file extension
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    //create new file name to avoid duplicate file name
    //use time() and random number and don't use file orignial name 
    $file_name = time() . rand(1000, 9999) . "." . $file_extension;


    $file_path = "uploads/resume/" . $file_name;





    //get ip address
    $ip = $_SERVER['REMOTE_ADDR'];
    //create timestamp
    $timestamp = time();
    //INSERT INTO `job_applications`(`id`, `name`, `email`, `phone`, `resume`, `ip`, `timestamp`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
    //insert data into job_applications
    $sql = "INSERT INTO `job_applications`(`job_id`,`name`, `email`, `phone`, `resume`, `ip`, `timestamp`) VALUES ($job_id,'$name','$email','$phone','$file_name','$ip','$timestamp');";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //upload file to server
        move_uploaded_file($file_tmp_name, $file_path);

        $from  = "no-reply@anzarkhan.com";

        //send mail to admin
        $to = "hrd@anzarkhan.com";
        $subject = "New Job Application";
        $message = "
        <html>
        
        <body>
        <p>Dear HRD,</p>
        <p>There is a new job application for the job <b>$title</b> at <b>anzarkhan.com</b></p>
        <p>Here are the details of the job application:</p>
        <table>
        <tr>
        <th>Name</th>
        <td>$name</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>$email</td>
        </tr>
        <tr>
        <th>Phone</th>
        <td>$phone</td>
        </tr>
        <tr>
        <th>Resume</th>
        <td><a href='https://anzarkhan.com/uploads/resume/$file_name' target='_blank'>Click here to view resume</a></td>
        </tr>
        </table>
        <p>Thank you</p>
        </body>
        </html>
        ";
        // Always set content-type when sending HTML email
        $headers  = "From: $from\r\n";
        $headers .= "Content-type: text/html\r\n";


        mail($to, $subject, $message, $headers);
        //send mail to user
        $to = $email;
        $subject = "Job Application";
        $message = "
        <html>
       
        <body>
        <p>Dear $name,</p>
        <p>Thank you for applying for the job <b>$title</b> at <b>anzarkhan.com</b></p>
        <p>Here are the details of the job application:</p>
        <table>
        <tr>
        <th>Name</th>
        <td>$name</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>$email</td>
        </tr>
        <tr>
        <th>Phone</th>
        <td>$phone</td>
        </tr>
        <tr>
        <th>Resume</th>
        <td><a href='https://anzarkhan.com/uploads/resume/$file_name' target='_blank'>Click here to view resume</a></td>
        </tr>
        </table>
        <p>Thank you</p>
        </body>
        </html>
        ";
        // Always set content-type when sending HTML email
        $headers  = "From: $from\r\n";
        $headers .= "Content-type: text/html\r\n";
        mail($to, $subject, $message, $headers);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<base href="/" />
   <meta charset="utf-8" />
   <meta name="referrer" content="always" />
   <meta name="robots" content="all" />
   <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <title><?php echo $page_title; ?></title>
    <meta name="title" content="<?php echo $page_title; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    

    <!-- facebook -->
    <meta property="og:locale" content="en_US" />
    <meta property="fb:app_id" content="716946272637531"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $site_home_link.'job-description/'.$unique_link; ?>" />
    <meta property="og:title" content="<?php echo $page_title; ?>" />
    <meta property="og:description" content="<?php echo $meta_description; ?>" />
    <meta property="og:image" content="<?php echo $site_home_link; ?>assets/img/logo/anzarkhan.com-logo-rgb.jpg" />
    <meta property="og:image:secure_url" content="<?php echo $site_home_link; ?>assets/img/logo/anzarkhan.com-logo-rgb.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="<?php echo $page_title; ?>" />
    <meta property="og:site_name" content="anzarkhan.com" />
    <meta property="og:updated_time" content="<?php echo date('Y-m-d H:i:s'); ?>" />
    <meta property="og:see_also" content="<?php echo $site_home_link; ?>" />
    <meta property="og:see_also" content="<?php echo $site_home_link; ?>about-us" />
    <meta property="og:see_also" content="<?php echo $site_home_link; ?>contact-us" />
    <meta property="og:see_also" content="<?php echo $site_home_link; ?>career" />

    <!--Twitter-->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@AnzarkhanCom" />
    <meta name="twitter:creator" content="@AnzarkhanCom" />
    <meta name="twitter:url" content="<?php echo $site_home_link.'job-description/'.$unique_link; ?>" />
    <meta name="twitter:title" content="<?php echo $page_title; ?>" />
    <meta name="twitter:description" content="<?php echo $meta_description; ?>" />
    <meta name="twitter:image" content="<?php echo $site_home_link; ?>assets/img/logo/anzarkhan.com-logo-rgb.jpg" />
    <meta name="twitter:image:alt" content="<?php echo $page_title; ?>" />
    <meta name="twitter:domain" content="anzarkhan.com" />
    <meta name="twitter:app:name:iphone" content="anzarkhan.com" />
    <meta name="twitter:app:name:ipad" content="anzarkhan.com" />
    <meta name="twitter:app:name:googleplay" content="anzarkhan.com" />

    

    <link rel="canonical" href="<?php echo $site_home_link.'job-description/'.$unique_link; ?>" />

    
    
    <link rel="shortcut icon" href="../assets/img/logo/favicon.png">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">


</head>

<body>
    <div class="content-wrapper">
        <!-- /header -->
        <?php
        require_once 'elements/header.php';
        ?>
        <!-- /header -->
        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
                <div class="row">
                    <div class="col-md-10 col-xl-8 mx-auto">
                        <div class="post-header">
                            <h1 class="display-1 mb-5"> <?php echo $title; ?> </h1>
                            <ul class="post-meta fs-17 mb-5">
                                <li><i class="fas fa-clock"></i> <?php echo $type_time; ?></li>
                                <li><i class="fas fa-building"></i> <?php echo $type_location; ?></li>
                                <li><i class="fas fa-user"></i> <?php echo $no_of_openings; ?>  Openings</li>
                            </ul>
                            <!-- /.post-meta -->

                            <!-- share on social media buttons -->
                            <!-- title share now -->
                            <div class="share-now">
                                <h6 class="mb-2">Share Now</h6>
                            </div>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $site_home_link.'job-description/'.$unique_link; ?>" target="_blank" class="btn btn-circle btn-soft-primary ">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <?php 
                                    $url = $site_home_link.'job-description/'.$unique_link;
                                    //get the length of the url
                                    $length = strlen($url);

                                    $length_left = 280 - $length-1; 

                                    $twitter_text = substr($title, 0, $length_left);



                                   
                                    
                                    ?>
                                    <a href="https://twitter.com/intent/tweet?text=<?php echo $twitter_text; ?>&url=<?php echo $site_home_link.'job-description/'.$unique_link; ?>" target="_blank" class="btn btn-circle btn-soft-primary ">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $site_home_link.'job-description/'.$unique_link; ?>&title=<?php echo $page_title; ?>&summary=<?php echo $meta_description; ?>&source=anzarkhan.com" target="_blank" class="btn btn-circle btn-soft-primary ">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://telegram.me/share/url?url=<?php echo $site_home_link.'job-description/'.$unique_link; ?>&text=<?php echo $page_title; ?>" target="_blank" class="btn btn-circle btn-soft-primary ">
                                        <i class="fab fa-telegram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.reddit.com/submit?url=<?php echo $site_home_link.'job-description/'.$unique_link; ?>&title=<?php echo $page_title; ?>" target="_blank" class="btn btn-circle btn-soft-primary ">
                                        <i class="fab fa-reddit"></i>
                                    </a>
                                </li>
                               
                                <li class="list-inline-item">
                                    <a href="https://api.whatsapp.com/send?text=<?php echo $page_title; ?>%0A<?php echo $site_home_link.'job-description/'.$unique_link; ?>" target="_blank" class="btn btn-circle btn-soft-primary ">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                
                            </ul>
                            <!-- share on social media buttons -->

                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="blog single mt-n17">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <h2 class="h1 mb-3">Job Description</h2>
                                    <p> <?php echo $description ?> </p>
                                    <h2 class="h1 mb-3 mt-9">Responsibilities</h2>
                                    <p> <?php echo $responsibilities ?> </p>
                                    <!--/.row -->
                                    <h2 class="h1 mb-3 mt-9">Requirements</h2>
                                    <p><?php echo $requirements ?></p>
                                    <!--/.row -->
                                    <h2 class="h1 mb-3 mt-9">Details</h2>
                                    <div class="row gy-3 gx-xl-8">
                                        <div class="col-xl-6">
                                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                                <li><span><i class="fas fa-clock" style="background-color: #ffffff;"></i></span><span><?php echo $type_time; ?></span></li>
                                                <li><span><i class="fas fa-building" style="background-color: #ffffff;"></i></span><span><?php echo $type_location; ?></span></li>
                                                <li><span><i class="fas fa-map-marker-alt" style="background-color: #ffffff;"></i></span><span><?php echo $location; ?></span></li>
                                            </ul>
                                        </div>
                                        <!--/column -->
                                        <div class="col-xl-6">
                                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                                <li><span><i class="fas fa-wallet" style="background-color: #ffffff;"></i></span><span><?php echo $salary; ?></span></li>
                                                <li><span><i class="fas fa-users" style="background-color: #ffffff;"></i></span><span><?php echo $no_of_openings.' '; if($no_of_openings > 1) { echo "Openings"; } else { echo "Opening"; } ?></span></li>
                                                <li><span><i class="fas fa-handshake" style="background-color: #ffffff;"></i></span><span><?php echo $experience_required.' '; if($experience_required > 1) { echo "Years"; } else { echo "Year"; } ?> Experience Required</span></li>
                                            </ul>
                                        </div>
                                        <!--/column -->
                                    </div>
                                    <a href="" class="btn btn-primary rounded-pill mt-5" data-bs-toggle="modal" data-bs-target="#modal-apply-job">Apply
                                        Now</a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.blog -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-14 py-md-16">
                <div class="row align-items-center mb-6">
                    <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                        <h2 class="display-6 mb-0">More Job Openings</h2>
                    </div>
                    <!--/column -->
                    <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                        <a href="<?php echo $site_home_link.'career#job_positions'; ?>" class="btn btn-primary rounded-pill mb-0">Explore Positions</a>
                    </div>
                    <!--/column -->
                </div>
                <!-- /.row -->
                <div class="row gy-6">
                    <?php
                    // SELECT `id`, `title`, `unique_link`, `type_time`, `type_location`, `location`, `salary`, `no_of_openings`, `short_code`, `description`, `short_description`, `keywords`, `responsibilities`, `requirements`, `is_live` FROM `open_hiring_positions` WHERE 1
                    $sql = "SELECT * FROM `open_hiring_positions` WHERE `is_live` = 1 ORDER BY `id` DESC LIMIT 3";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $title = $row['title'];
                            $unique_link = $row['unique_link'];
                            $type_time = $row['type_time'];
                            $type_location = $row['type_location'];
                            $location = $row['location'];
                            $salary = $row['salary'];
                            $no_of_openings = $row['no_of_openings'];
                            $short_code = $row['short_code'];
                            $description = $row['description'];
                            $short_description = $row['short_description'];
                            $keywords = $row['keywords'];
                            $responsibilities = $row['responsibilities'];
                            $requirements = $row['requirements'];
                            $is_live = $row['is_live'];
                            $color_array = array("bg-yellow", "bg-orange", "bg-red", "bg-pink", "bg-violet", "bg-purple", "bg-blue", "bg-aqua", "bg-green", "bg-leaf", "bg-ash", "bg-navy", "bg-fuchsia", "bg-sky", "bg-grape");
                            //generate random number size of the array
                            $randIndex = array_rand($color_array);
                            //output the random element
                            $color = $color_array[$randIndex];
                            //color without bg-
                            $color_without_bg = str_replace("bg-", "", $color);
                            // echo  'career'. $title;
                            // echo '<br>'; 
                    ?>
                            <div class="col-md-6 col-lg-4">
                                <a href="job-description/<?php echo $unique_link; ?>" class="card shadow-lg lift h-100">
                                    <div class="card-body p-5 d-flex flex-row">
                                        <div>
                                            <span class="avatar <?php echo $color; ?> text-white w-11 h-11 fs-20 me-4"><?php echo $short_code; ?></span>
                                        </div>
                                        <div>
                                            <span class="badge bg-pale-blue text-blue rounded py-1 mb-2"><?php echo $type_time; ?></span>
                                            <h4 class="mb-1"><?php echo $title; ?></h4>
                                            <p class="mb-1 text-body"><i class="fas fa-building me-2"></i><?php echo $location; ?></p>
                                            <p class="mb-0 text-body"><i class="fas fa-user me-2"></i><?php echo $no_of_openings; ?> Openings</p>
                                            <h3 class="m-2">
                                                <?php
                                                if ($salary == 0) {
                                                    echo 'Negotiable';
                                                } else {
                                                    echo $salary;
                                                }
                                                ?>
                                            </h3>
                                            <div class="btn btn-soft-<?php echo $color_without_bg; ?> btn-sm rounded-pill">Apply Now</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <!--/column -->
                </div>
                <!--/.row -->
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <!-- /footer -->
    <?php
    require_once 'elements/footer.php';
    ?>
    <!-- /footer -->
    <!-- all modals start -->
    <!-- apply now modal -->
    <div class="modal fade" id="modal-apply-job" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="0btn-close" style="position: absolute; top: 0.7rem; right: 0.7rem; cursor: pointer; padding: 0 0; color: #343f52; background: 0 0; border: 0; line-height: 1; transition: all .2s ease-in-out;" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2 class="mb-3 text-start">
                        <?php
                        //lower case $modal_job_title
                        echo 'Apply for' . ' ' . strtolower($modal_job_title) . ' ' . 'job';
                        ?>
                    </h2>
                    <p class="lead mb-6 text-start">
                        Apply to this will take less than a minute.
                    </p>
                    <form class="text-start mb-3" method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" id="job_apply_job_id" name="job_id" value="<?php echo $modal_job_id; ?>">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" placeholder="Name" name="name" id="job_apply_name" required>
                            <label for="job_apply_name">Name</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" id="job_apply_email" required>
                            <label for="job_apply_email">Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" placeholder="Phone" name="phone" id="job_apply_phone" required>
                            <label for="job_apply_phone">Phone</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="file" class="form-control" placeholder="Resume" name="resume" id="job_apply_resume" required>
                            <label for="job_apply_phone">Resume</label>
                        </div>
                        <button type="submit" name="job_apply" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Apply Now</button>
                    </form>
                    <!-- /form -->
                    <!--/.social -->
                </div>
                <!--/.modal-content -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->
    <!-- apply now modal -->
    <!-- all modals end -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/theme.js"></script>
    <!-- header settings start-->
    <script>
        var get_main_header_nav_class = document.getElementsByClassName("main_header_nav_class");
        for (var i = 0; i < get_main_header_nav_class.length; i++) {
            get_main_header_nav_class[i].classList.add("center-nav");
            get_main_header_nav_class[i].classList.add("transparent");
            get_main_header_nav_class[i].classList.add("navbar-light");
        }
        //hide logo-light class element 
        var get_logo_light_class = document.getElementsByClassName("logo-light");
        for (var i = 0; i < get_logo_light_class.length; i++) {
            get_logo_light_class[i].style.display = "none";
        }
        //show logo-dark class element
        var get_logo_dark_class = document.getElementsByClassName("logo-dark");
        for (var i = 0; i < get_logo_dark_class.length; i++) {
            get_logo_dark_class[i].style.display = "block";
        }
        //change contact button background color and border color #3f78e0
        var get_contact_us_button = document.getElementsByClassName("contact_us_button");
        for (var i = 0; i < get_contact_us_button.length; i++) {
            get_contact_us_button[i].style.background = "#3f78e0";
            get_contact_us_button[i].style.borderColor = "#3f78e0";
            get_contact_us_button[i].style.color = "#fff";
        }
    </script>
    <!-- header settings end-->

    <!-- sweet alert cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!-- creating swal alert for job applied -->
    <script>
        var file_upload_err = <?php echo  $file_upload_err; ?>;
        var file_upload_err_msg = <?php echo  $file_upload_err_msg; ?>;
        var job_applied =  <?php echo $job_applied ; ?>;

        if(job_applied == 1){
            if(file_upload_err == 1){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: file_upload_err_msg,
                })
            }else{
                Swal.fire({
                    icon: 'success',
                    title: 'Job Applied',
                    text: 'Your application has been submitted successfully',
                })
            }
        }


    </script>
</body>

</html>