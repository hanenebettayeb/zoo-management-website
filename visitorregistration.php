


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
                        <a href="visitorrgistration.php" class="dropdown-item">Resgistration</a>
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
                    
            <a href="booke ticket.php" class="btn btn-primary">Booke Ticket<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
   
    
   <!--VISITOR REGISTRATION START-->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Visitor Registration</p>
                <h1 class="display-5 mb-0">Let`s Regiter  Your Profil At Our <span class="text-primary">Bamboo Zoo</span> </h1>
            </div>

    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
          // $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) ) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           
           require_once "connection.php";
           $sql = "SELECT * FROM visitorrtabel WHERE email = '$email'";
           $result = mysqli_query($con, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            require_once "connection.php";
            $sql = "INSERT INTO visitorrtabel (fullname, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($con);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <form action="visitorregistration.php" method="post">
            <div class="form-group">
            <label for="password" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
            <label for="password" class="form-label">Email</label>
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
            <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
          
      
            <div class="d-grid gap-2" CLASS="mb-3">
<label for="sumbit" class="form-label"></label>
       <button type="submit" class="btn btn-outline-success" name="submit" value="Register">Register </button>
             <!-- <input type="submit" class="btn btn-outline-success" value="Register" name="submit"><-->
            </div><div>
        </form>
        <div>
        <div><p>Already Registered <a href="visitorlogin.php">Login Here</a></p></div>
      </div>
    </div>
<!--VISITOR REGSTRATION-->
   
        
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
</html>