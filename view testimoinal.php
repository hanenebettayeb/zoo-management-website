<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="datatables.min.css" />
    <link rel="stylesheet" href="dashoardvisitor.css" />
    <title>Visitors Information</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 "
          href="#"
          >Visitors Informations - Bamboo Zoo </a>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle ms-2"
          href="#"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="bi bi-person-fill"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="/registration/New folder (3)/public site/logoutvisitor.php">Log Out</a></li>
      
         
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>

<!-- offcanvas --><!-- offcanvas -->
<div
class="offcanvas offcanvas-start sidebar-nav bg-dark"
tabindex="-1"
id="sidebar"
>
<div class="offcanvas-body p-0">
  <nav class="navbar-dark">
    <ul class="navbar-nav">
    <li>
        <a href="dashoardvisitor.php" class="nav-link px-3 active">
          <span class="me-2"><i class="bi bi-speedometer2"></i></span>
        <span>Dashboard</span></A>
        </a>
      </li>
    
       
      </li>
      <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
      <li>
        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
        Visitors Informations
        </div>
      </li>

  
    <!--  ticket  iconn-->
    <li>
  <a
    class="nav-link px-3 sidebar-link"
    data-bs-toggle="collapse"
    href="#ticket"
    < span class="me-2">
    <!--  ticket  iconn-->
    
    <i class="bi bi-stickies"></i></span>
    <span>Tickets</span>
    <span class="ms-auto">
      <span class="right-icon">
        <i class="bi bi-chevron-down"></i>
      </span>
    </span>
  </a>
  <div class="collapse" id="ticket">
    <ul class="navbar-nav ps-3">
      <li>
        <a href="#" class="nav-link px-3">
          <lu>
            <a href="view booked tickets.php"    > <li>View Booked Tickets </li></a>
          
         </a>
      </li>
    </ul>
  </div>
</li>

<!-- Testmonial part-->
<li>
  <a
    class="nav-link px-3 sidebar-link"
    data-bs-toggle="collapse"
    href="#Testmonial"
    < span class="me-2">
    <!--  Testmonial  iconn-->
    
  <i class="bi bi-chat-dots"></i></span>
    <span>Testmonial</span>
    <span class="ms-auto">
      <span class="right-icon">
        <i class="bi bi-chevron-down"></i>
      </span>
    </span>
  </a>
  <div class="collapse" id="Testmonial">
    <ul class="navbar-nav ps-3">
      <li>
        <a href="#" class="nav-link px-3">
          <lu>
            <a href="view testimoinal.php"  > <li>View Testmonial List  </li></a>
    
        </a>
      </li>
    </ul>
  </div>
</li>

  
      </ul></nav></div></div>

 <!-- offcanvas -->
 <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4> <i class="bi bi-house-door-fill"></i>  Visitors Informations  </h4>
          </div>
        

        <div class="row">
            <table class="table caption-top" >
                <caption> Testmonial  </caption>
                <thead>
                  <tr>
                
                    <TH SCOPE="COL">Your Name</TH>
                    
    
                    <th scope="col">Message</th>
                 
    
                    

                  </tr>
                  </thead>
                <tbody>
                  <?php
                  include "connection.php";
                  $sql = "select fullname,message from contacttabel";
                  $result = $con->query($sql);
                  if(!$result){
                    die("Invalid query!");
                  }
                  while($row=$result->fetch_assoc()){
                    echo "
                  <tr>
        
                    <td>$row[fullname] </td>
                    
                    
                    <th>$row[message]</th>
                    
            
                    
              
          
                    
                    
                 
                   
                
                  </tr> ";}
                  ?>
                
               
    
                </tbody>
              </table>
                
              

        <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="jQuery-3.6.0/"></script>
        <script src="jQuery-3.6.0/jquery-3.6.0.min.js"></script>
        <script src="datatables.min.js"></script>
      <script src="view testimoinal.js"></script>
      </body>
    </html>