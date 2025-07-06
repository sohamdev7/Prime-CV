<?php
require './classes/function.class.php'; 
require './includes/navbar.landing-2.php';
$fn->AuthPage();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="icon" href="./images/logo_img.png">
    <link rel="stylesheet" href="./cssfile/landing_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="media-queries.css">
</head>

<body>
  

    <!-- header section -->
    <header>
        <div class="container header-section flex">
            <div class="header-left">
                <h4>Stand Out. Get Hired. Instantly.</h4>
                <h1>Your First Step to Career Greatness.</h1><br>
                <p>
                    Create a professional resume in minutes. Get noticed by employers with our easy-to-use resume
                    builder.
                </p><br>
                <a href="#" class="primary-button get-started-btn">Get Started</a>
            </div>
            <div class="header-right">
                <img src="./images/Main_Img.png" alt="hero image">
            </div>
        </div>
    </header>

    <!-- features section -->

    <section class="features-section">
        <div class="container">
            <div class="features-header">
                <h1 class="features-heading-text"> 
                    Why Choose Us?</h1>
            </div><br>
            <div class="features-area flex">
                <div class="features-card flex">
                    <img src="./images/feature_1.png" alt="">
                    <h3>CV Maker</h3>
                    <p>CV Maker – Build, edit, and customize professional resumes easily. </p><br>
                </div>
                <div class="features-card flex">
                    <img src="./images/feature_2.png"
                        alt="">
                    <h3>Share and Download</h3>
                    <p>Easily share and download your CV anytime.</p><br>
                </div>
                <div class="features-card flex">
                    <img src="./images/feature_3.png"
                        alt="">
                    <h3>Manage Multiple CVs</h3>
                    <p>Organize, update, and store multiple CVs effortlessly.</p><br>
                </div>
                <div class="features-card flex">
                    <img src="./images/feature_4.png"
                        alt="">
                    <h3>Edit and Print</h3>
                    <p>Customize, refine, and print your CV with ease.</p><br>
                </div>
                <div class="features-card flex">
                    <img src="./images/feature_5.png" alt="">
                    <h3>Various Templates</h3>
                    <p>Choose from professional, modern, and creative templates.</p><br>
                </div>
                <div class="features-card flex">
                    <img src="./images/feature_6.png"
                        alt="">
                    <h3>Data and Privacy Control</h3>
                    <p>Secure your information with advanced privacy settings.</p><br>
                </div>
            </div>
        </div>
    </section><br><br><br><br>

    <!-- big features section -->
     <h2 class="big-feature-heading">
          Create a professional resume within just 3 steps
     </h2>
    <section class="big-feature-section">
        <div class="container flex big-feature-container">
            <div class="feature-img">
                <img src="./images/big-feature_1.png"
                    alt="">
            </div>
            <div class="feature-desc flex">
                <h3>
                    Sign up & Create Account
                </h3><br>
                <p>
                    Create an account and start building your resume with our user-friendly interface.  
                </p><br>
                <a href="Login.html" class="secondary-button">Sign up <i class="fa-solid fa-right-long"></i></a>
            </div>
        </div>
    </section>

    <section class="big-feature-section">
        <div class="container flex big-feature-container" id="second-big-feature">
            <div class="feature-img">
                <img src="./images/big-feature_2.png"
                    alt="">
            </div>
            <div class="feature-desc flex">
                <h3>
                    Choose a Template & Customize
                </h3><br>
                <p>
                    Enter your details and select a template that suits your style. Customize it to make it uniquely yours.
                </p><br>
                <a href="Login.html" class="secondary-button">Create CV<i class="fa-solid fa-right-long"></i></a>
            </div>
        </div>
    </section><br><br>

    <section class="big-feature-section">
        <div class="container flex big-feature-container">
            <div class="feature-img">
                <img src="./images/big-feature_3.png" alt="">
            </div><br>
            <div class="feature-desc flex">
                <h3>
                    Export your CV to PDF & Download 
                </h3><br>
                <p>
                    Download your CV in PDF format and share it with potential employers.
                </p><br>
                <a href="Login.html" class="secondary-button">Create CV<i class="fa-solid fa-right-long"></i></a>
            </div>
        </div>
    </section><br><br><br>

    <!-- cta section -->

    <section class="cta-section">
        <div class="container flex cta-section-container">
            <h2>
                Get started with our CV Maker today!
            </h2>
            <p>
                Sign up now and take the first step towards your dream job. Our CV Maker is designed to help you create a
                professional resume that stands out from the crowd.
            </p>
            <a href="#" class="primary-button">Create CV Now</a>
        </div>
    </section>

    <!-- footer -->

    <footer>
        <div class="container flex footer-container">
            <a href="#" class="company-logo">
                <img src="./images/Logo2.png" alt="company logo">
            </a>
            <div class="link-column flex">
                <h4>Product</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Methodology</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Resources</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
        </div>
    </footer>

    <!-- subfooter -->

    <div class="subfooter">
        <div class="container flex subfooter-container">
            <a class="hover-link" href="#">Privacy policy</a>
            <a class="hover-link" href="#">Terms & Condition</a>
            <a class="hover-link" href="#">Security Information</a>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
$(function(){
<?php
$fn->error();
$fn->alert();
?>
})
</script>


</body>

</html>