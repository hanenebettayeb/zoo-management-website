
  
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
<style>
  html,
body,
.intro {
  height: 100%;
}

.gradient-custom-1 {
  /* fallback for old browsers */
  background: #0000;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: radial-gradient(circle at 10% 20%, rgb(50, 172, 109) 0%, rgb(209, 251, 155) 100.2%);

}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
tbody td {
  font-weight: 500;
  color: #999999;
}
       </style>
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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="animal.php" class="dropdown-item">Our Animals</a>
                        <a href="our events.php" class="dropdown-item">Our Events</a>
                        <a href="visiting.php" class="dropdown-item">Visiting Hours</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="booke ticket.php" class="dropdown-item">Booke Ticket</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="dashoardvisitor.php" class="nav-item nav-link"><i class="bi bi-person-circle"></i></a>
            </div>

            <a href="booke ticket.php
            " class="btn btn-primary">Booke Ticket<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->







    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Booked Tickets</p>
                    <h1 class="display-5 mb-0">Let's Book Tickets  To Enjoy The Best Moments In Our<span class="text-primary"> Zoo Ben Aknoun</span> </h1>
                </div>

                
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white">
              <table class="table mb-0">
        
                <thead>
                  
                  <tr>
                  <th   scope="col"    class="table-info">Description</th>
                  <th   scope="col"   class="table-danger">Start Date</th>
                  <th   scope="col"   class="table-success">End Duration</th>
                
                  </tr>
                </thead>
                
                <tbody>
                <tbody>
                  <?php
                  include "connection.php";
                  $sql = "select description,startdate,enddate from calendar";
                  $result = $con->query($sql);
                  if(!$result){
                    die("Invalid query!");
                  }
                  while($row=$result->fetch_assoc()){
                    echo "
                  <tr>
                  
                  
                    <td>$row[description] </td>
            <td>$row[startdate]</td>
            <td>$row[enddate]</td>  </tr> ";}
            ?>
           
                
                 
                 
                  
                
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</section>

                <button class="btn btn-danger" >You have to be logged in befor  to book tickets</button></div>
        </div></div></form>
  
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
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="contact.php">Contact Us</a>
                <a class="btn btn-link" href="service.php">Our Services</a>
            
            </div>
        
           
        </div>
    </div>

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
    