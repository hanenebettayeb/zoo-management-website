<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bamboo Zoo</title>
   
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
     <!-- Page Header Start -->
     <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Our Services </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Our Animals</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="img/icon/icon-10.png" alt="Icon">
            <h1 class="m-0 text-primary">Bamboo Zoo</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index1.php" class="nav-item nav-link active">Home</a>
                <a href="about1.php" class="nav-item nav-link">About</a>
                <a href="service1.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="animal1.php" class="dropdown-item">Our Animals</a>
                        <a href="our event1.php" class="dropdown-item">Our Events</a>
                        <a href="visiting1.php" class="dropdown-item">Visiting Hours</a>
                        <a href="testimonial1.php" class="dropdown-item">Testimonial</a>
                        <a href="visitorregistration.php" class="dropdown-item">Resgistration</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Register</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="visitorregistration.php" class="dropdown-item">Visitors Registration</a>
                        
                    </div></div>
                <a href="contact1.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-door-open"></i>Login</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
  <a href="visitorlogin.php" class="dropdown-item">Visitor</a>
  <a href="admin login.php" class="dropdown-item">Admin</a></div></div>
                    
            <a href="booke ticket1.php" class="btn btn-primary">Booke Ticket<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Services</p>
                    <h1 class="display-5 mb-0">Special Services For <span class="text-primary"> Bamboo Zoo</span> Visitors</h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Call for more info</p>

                            <?php
                  include "connection.php";
                  $sql = "select phone from admintabel";
                  $result = $con->query($sql);
                  if(!$result){
                    die("Invalid query!");
                  }
                  while($row=$result->fetch_assoc()){
                    echo "
                  <tr>
          
                            <h2 class='text-white mb-0'>$row[phone]</h2></tr>";}?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="img/icon/icon-2.png" alt="Icon">
                    <h5 class="mb-3">Car Parking</h5>
              ,<span>Don't Worry About Where To Park Your Car...We'll Take Care Of It !</span>  
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="img/icon/icon-3.png" alt="Icon">
                    <h5 class="mb-3">Animal Photos</h5>
                    <span> You Want To Create The Best Memories... We Can Make It Happen For You!</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="img/icon/icon-4.png" alt="Icon">
                    <h5 class="mb-3">Guide Services</h5>
                    <span>Safe Trip...And Lots Of Information About The Animals!</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="img/icon/icon-5.png" alt="Icon">
                    <h5 class="mb-3">Food & Beverages</h5>
                    <span>The Happy Trip Is Only Possible With Delicious Food...We Make It Happen!</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="img/icon/icon-6.png" alt="Icon">
                    <h5 class="mb-3">Zoo Shopping</h5>
                    <span>Buying Beautiful Things For a Beautiful Memory...We Make It Happen!</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="img/icon/icon-7.png" alt="Icon">
                    <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
                    <span> Share Your Beautiful Moments On Social Media...Moment By Moment...We Make It Happen!</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="img/icon/icon-8.png" alt="Icon">
                    <h5 class="mb-3">Play Ground</h5>
                    <span> A Pleasant Trip For Your Children Is Only Possible With Play Ground...We Make It Happen!</span>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->
     <!-- Footer Start -->
   <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <?php
                  include "connection.php";
                  $sql = "select addresse from admintabel";
                  $result = $con->query($sql);
                  if(!$result){
                    die("Invalid query!");
                  }
                  while($row=$result->fetch_assoc()){
                    echo "
                  <tr>
              <p class='mb-2'><i class='fa fa-map-marker-alt me-3'></i> $row[addresse]</p></tr>";}
              ?>
<?php
                  include "connection.php";
                  $sql = "select phone from admintabel";
                  $result = $con->query($sql);
                  if(!$result){
                    die("Invalid query!");
                  }
                  while($row=$result->fetch_assoc()){
                    echo "
                  <tr>
          <p class='mb-2'><i class='fa fa-phone-alt me-3'></i>$row[phone]</p></tr>";}?>
<?php
                  include "connection.php";
                  $sql = "select email from admintabel";
                  $result = $con->query($sql);
                  if(!$result){
                    die("Invalid query!");
                  }
                  while($row=$result->fetch_assoc()){
                    echo "
                  <tr>
                <p class='mb-2'><i class='fa fa-envelope me-3'></i>$row[email]</p><tr>";}?>

                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="about1.php">About Us</a>
                <a class="btn btn-link" href="contact1.php">Contact Us</a>
                <a class="btn btn-link" href="service1.php">Our Services</a>
            
            </div>
        </div>
    </div>

    </div>
     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/lightbox/js/lightbox.min.js"></script>
 
     <!-- Template Javascript -->
     <script src="js/main.js"></script>
 </body>
 
 </html>
