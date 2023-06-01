
  

    
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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="animal.php" class="dropdown-item">Our Animals</a>
                        <a href="our event.php" class="dropdown-item">Our Events</a>
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
                    <h1 class="display-5 mb-0">Let's Book Tickets  To Enjoy The Best Moments In Our<span class="text-primary">Bamboo Zoo</span> </h1>
                </div>
    
         <tbody>
        
       <table class="table caption-top"   class="table-warning "  >
          
  
     
            
         
            
        <caption>Information Groupe Tickets</caption>
          
          <tr >
    
            <th  scope="col"  class="table-info">Child Tickets</th>
            <th scope="col"  class="table-warning">Regular Tickets</th>
            <th scope="col"  class="table-success">Our Tourism Trips</TH>
          </tr>
          
         
          <tbody>
                  <?php
                  include "connection.php";
                  $sql = "select childTickets,RegularTickets,ourtourismtrips from ticketsmanagement";
                  $result = $con->query($sql);
                  if(!$result){
                    die("Invalid query!");
                  }
                  while($row=$result->fetch_assoc()){
                    echo "
                  <tr>
            
                    <td>$row[childTickets] </td>
                    <td>$row[RegularTickets]</td>
                    <TD>$row[ourtourismtrips]</TD>
                   
                
                  </tr> ";}
                  ?>
        </tbody>
      </table>
    
 
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

<?php
include'connection.php';

if(isset($_POST["submit"])){
    $BookedFor = stripcslashes(strtolower($_POST["BookedFor"]));
  
    $childTickets = stripcslashes($_POST["childTickets"]);
    $RegularTickets = stripcslashes($_POST["RegularTickets"]);
    $VisitDate = stripcslashes($_POST["VisitDate"]);
    $BookedFor= htmlentities (mysqli_real_escape_string($con, $_POST["BookedFor"]));
    
    $childTickets = htmlentities (mysqli_real_escape_string($con, $_POST["childTickets"]));
    $RegularTickets = htmlentities (mysqli_real_escape_string($con, $_POST["RegularTickets"]));
    $VisitDate = htmlentities (mysqli_real_escape_string($con, $_POST["VisitDate"]));
    $totalPrice = $_POST['RegularTickets'] * 500 + $_POST['childTickets'] * 400;
  
            $sql = " INSERT INTO bookedticketstabel (BookedFor,childTickets,RegularTickets,VisitDate,totalprice)
            VALUES('$BookedFor','$childTickets','$RegularTickets','$VisitDate','$totalPrice')";
         mysqli_query($con,$sql);
    
 

    echo "<div class= 'alert alert-succes'>Ticket booked successfully!!.Your total price is: DA. $totalPrice .</div>";
}?>

      <form action="booke ticket.php" method="POST">
      
                    <div class="row g-3 align-items-center">
                             

                        <div class="col-auto">
                          <label for="BookedFor" class="col-form-label">Booked For</label>
                        </div>
                        <div class="col-auto">
                              
          
                    <input type="text" id="BookedFor" class="form-control"  name="BookedFor">
                        </div>
                       

                        

                            <div class="row g-3 align-items-center" >
                                <div class="col-auto">
                                  <label for="childTickets" class="col-form-label">Child Tickets</label>
                                </div>
                                <div class="col-auto" >
                                  <input type="number" id="childTickets" class="form-control" name="childTickets">
                                </div>
                                <div class="row g-3 align-items-center" >
                                    <div class="col-auto">
                                      <label for="RegularTickets" class="col-form-label">Regular Tickets</label>
                                    </div>
                                    <div class="col-auto" >
                                      <input type="number" id="RegularTickets" class="form-control"  name="RegularTickets">
                                    </div>
                                    <div class="row g-3 align-items-center" >
                                        <div class="col-auto">
                                          <label for="VisitDate" class="col-form-label">Date</label>
                                      <label > 
                                           <a href="book ticket caledar.php"
             class="btn btn-info"> Booke Tickets calendar informations<i class="fa fa-arrow-right ms-3"></i> </a></label>
        
                                        </div>
                                        <div class="col-auto" >
                                          <input type="date" id="VisitDate" class="form-control"  name="VisitDate" >
</div> 
                    
                                        <div class="form-group row mt-4">
                            
                    
          <button type="submit" class="btn btn-outline-success" name="submit">Book Tickets</button></div>
          <div class="form-group row mt-4">
          <button class="btn btn-danger" >You have to be logged in befor  to book tickets</button></div>
        </div></div></form>
  <!-- Footer Start -->
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
    


