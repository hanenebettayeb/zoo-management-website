<?php
include('connection.php');


if(isset($_POST["submit"])){
//$title = stripcslashes(strtolower($_POST["title"]));
$description = stripcslashes($_POST["description"]);
$startdate = stripcslashes($_POST["startdate"]);
$enddate = stripcslashes($_POST["enddate"]);

//$title = htmlentities (mysqli_real_escape_string($con, $_POST["title"]));
$description= htmlentities (mysqli_real_escape_string($con, $_POST["description"]));
$startdate= htmlentities (mysqli_real_escape_string($con, $_POST["startdate"]));
$enddate= htmlentities (mysqli_real_escape_string($con, $_POST["enddate"]));

        $sql = " INSERT INTO  calendar (  description, startdate, enddate)
      
        VALUES('$description','$startdate','$enddate') ";
        mysqli_query($con,$sql);

//echo"hhhh";
}

?>
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
    <link rel="stylesheet" href="ADD EVENT.CSS" />
    <title>Zoo Management</title>
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
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >ZMS-Zoo Ben Aknoun</a>
        
     
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
              <li><a class="dropdown-item" href="/registration/New folder (3)/public site/adminlogout.php">Log Out</a></li>
      
             <!----   <li><a class="dropdown-item" href="#">Update Profil</a></li><-->
               
              </ul>
            </li>
          </ul>
        </div>
      </div>
      </nav>

<!-- offcanvas -->
- offcanvas -->
<!-- offcanvas -->
<div
class="offcanvas offcanvas-start sidebar-nav bg-dark"
tabindex="-1"
id="sidebar"
>
<div class="offcanvas-body p-0">
  <nav class="navbar-dark">
    <ul class="navbar-nav">
      <li>
        <div class="text-muted small fw-bold text-uppercase px-3">
          CORE
        </div>
      </li>
      <li>
        <a href="INDEX1.PHP" class="nav-link px-3 active">
          <span class="me-2"><i class="bi bi-speedometer2"></i></span>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
      <li>
        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
          Management
        </div>
      </li>
      <!--- animals part-->
      <li>
        <a
          class="nav-link px-3 sidebar-link"
          data-bs-toggle="collapse"
          href="#animals"
        < span class="me-2">
        <!--ANIMALS ICON-->
        
        <i class="bi bi-bug-fill"></i></span>
          <span class="btn btn-primary">Animals</span>
          <span class="ms-auto">
            
          <span class="right-icon">
              <i class="bi bi-chevron-down"></i>
            </span>
          </span>
        </a>
        <div class="collapse" id="animals">
          <ul class="navbar-nav ps-3">
            <li>
              <a href="#" class="nav-link px-3">
                <lu>
                 <a href=" ADD ANIMAL.php"    class="nav-link"><li>Add Animal</li> </a>
    
              <a href="VIEW ANIMALS.php"  class="nav-link" > <li>View Animals List</li></a>
              <a href=" ANIMAL MANAGEMENT.PHP" class="nav-link">Animals management</a>
          <a href="VIEW The ANIMAL MANAGEMENT LIST.PHP"  class="nav-link">View The Animal Management list</a>
                </lu>
            </li>
          </a>
          </ul>
        </div>
  
    </li>
    <!-- visiing hours  part-->
    <li>
      <a
        class="nav-link px-3 sidebar-link"
        data-bs-toggle="collapse"
        href="#visitinghours"
        < span class="me-2">

        <!--time ICON-->
        <i class="bi bi-alarm-fill"></i></span>
        <span class="btn btn-dark">Visiting Hours</span>
        <span class="ms-auto">
          
          <span class="right-icon">
            <i class="bi bi-chevron-down"></i>
          </span>
        </span>
      </a>
      <div class="collapse" id="visitinghours">
        <ul class="navbar-nav ps-3">
          <li>
            <a href="#" class="nav-link px-3">
            
              <lu>
                <a href="visiting information management.php"  class="nav-link " <li>Visiting Hours Informations Management</li></a>
                <a href="view visiting informations.php"  class="nav-link"> <li>View Visiting Hours Informations</li></a>
              
          </li>
        </ul>
      </div>
    </li>
    

   
    <!--event part-->
  
  <li>
    <a
      class="nav-link px-3 sidebar-link"
      data-bs-toggle="collapse"
      href="#event"
      < span class="me-2">

      
      <!-- classifiaction iconn-->
      <i class="bi bi-calendar-event"></i></span>
      <span class="btn btn-danger">Events</span>
      <span class="ms-auto">
        <span class="right-icon">
          <i class="bi bi-chevron-down"></i>
        </span>
      </span>
    </a>
    <div class="collapse" id="event">
      <ul class="navbar-nav ps-3">
        <li>
          <a href="#" class="nav-link px-3">
          
            <lu>
       <a href="ADD EVENT.PHP"   class="nav-link"   > <li> Add Event</li></a>
      <a href="VIEW EVENTS LIST.PHP"   class="nav-link" > <li>View Events List</a>
    
          </a>
        </li>
      </ul>
    </div>
  </li>
<!-- employees part-->
<li>
  <a
    class="nav-link px-3 sidebar-link"
    data-bs-toggle="collapse"
    href="#employees"
    < span class="me-2">
    <!--  Employee iconn-->
    <i class="bi bi-person-lines-fill"></i></span>
    <span class =" btn btn-warning">Employees</span>
    <span class="ms-auto">
      <span class="right-icon">
        <i class="bi bi-chevron-down"></i>
      </span>
    </span>
  </a>
  <div class="collapse" id="employees">
    <ul class="navbar-nav ps-3">
      <li>
        <a href="#" class="nav-link px-3">
        
          <lu>
     <a href="ADD EMPLOYEE.PHP"  class="nav-link"    > <li> Add Employee</li></a>
    <a href="VIEW EMPLOYEES.PHP"   class="nav-link" > <li>View Employees List</a>
  
        </a>
      </li>
    </ul>
  </div>
</li>

<!-- tickers part-->
<li>
  <a
    class="nav-link px-3 sidebar-link"
    data-bs-toggle="collapse"
    href="#ticket"
    < span class="me-2">
    <!--  ticket  iconn-->
    
    <i class="bi bi-stickies"></i></span>
    <span  class="btn btn-success">Tickets</span>
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
            <a href="VIEW BOOKED TICKETS.PHP" class="nav-link"   > <li>View Booked Tickets </li></a>
            <a href="Ticket management.php"  class="nav-link"><li>Ticket Management</li><a/>
    <A HREF ="VIEW TICKETS MANAGEMENT LIST.php" class="nav-link"><LI> Ticket Management List</li></a>
    <a href ="booked tickets calendar.php" class="nav-link"><li>Booked tickets calendar</LI></A>
    <A HREF="view book tickets calendar information.php" CLASS="nav-link"><LI>View booked tickets calendar information</LI></A>
        
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
    <span class="btn btn-light">Testmonial</span>
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
            <a href="VIEW TESTMOIAL.PHP"   class="nav-link"> <li>View Testmonial List  </li></a>
    
        </a>
      </li>
    </ul>
  </div>
</li>
<li>
        <a
          class="nav-link px-3 sidebar-link"
          data-bs-toggle="collapse"
          href="#Visitor"
          < span class="me-2">
          <!--  visitor iconn-->
          
            
          <i class="bi bi-file-earmark-person"></i></span>
          <span  class="btn btn-secondary">Visitors</span>
          <span class="ms-auto">
            <span class="right-icon">
              <i class="bi bi-chevron-down"></i>
            </span>
          </span>
        </a>
        <div class="collapse" id="Visitor">
          <ul class="navbar-nav ps-3">
            <li>
              <a href="#" class="nav-link px-3">
                <lu>
                  <a href="VIEW VISITOR LIST.PHP"   class="nav-link"> <li>View Visitor List  </li></a>
          
              </a>
            </li>
          </ul>
        </div>
      </li>
<!-- accounts part-->
<li>
  <a
    class="nav-link px-3 sidebar-link"
    data-bs-toggle="collapse"
    href="#contact"
    < span class="me-2">
    <!-- contact iconn-->
    <i class="bi bi-telephone-fill"></i></span>
    <span  class="btn btn-info">Contact Informations</span>
    <span class="ms-auto">
      <span class="right-icon">
        <i class="bi bi-chevron-down"></i>
      </span>
    </span>
  </a>
  <div class="collapse" id="contact">
    <ul class="navbar-nav ps-3">
      <li>
        <a href="#" class="nav-link px-3">
        
          <lu>
     <a href="   Contact information management.PHP" class="nav-link"  > <li> Contact Informations Management</li></a>
    <a href="View contact information.php " class="nav-link"> <li>View Contact Informations</a>
  
        </a>
      </li>
    </ul>
  </div>
</li>
      </ul></nav></div></div>
         <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4> <i class="bi bi-house-door-fill"></i> MANAGMENT    </h4>
          </div>
        </div>
      

          
        <div class="row">
          
<form action="booked tickets calendar.php" method="POST">
          
              <div class="mb-3">
                <label for="description"  class="form-label">  Description</label>
                <input type="text" class="form-control" id="description" name="description">
             </div>
             <div class="mb-3">
                <label for="startdate"  class="form-label">  Start Date</label>
                <input type="datetime" class="form-control" id="startdate" name="startdate">
             </div>
             <div class="mb-3">
                <label for="enddate" class="form-label">End Date</label>
                <input tupe="datetime" class="form-control" id="enddate" name="enddate">
             </div>
             
                  <div class="mb-3">
                  <div class="d-grid gap-2" CLASS="mb-3">
          <button type="submit" class="btn btn-outline-success" name="submit">booke tickets calendar management</button>
              <a class='btn btn-outline-danger'  type="submit" name="Cancel" href='view book tickets calendar information.php'>Cancel</a>
            </div>
                  </div>
              </div>
          </form>
       


  
             
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="jQuery-3.6.0/"></script>
    <script src="jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="datatables.min.js"></script>
    <script src="ADD EVENT.JS"></script>
  </body>
</html>
      



























































        <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="jQuery-3.6.0/"></script>
    <script src="jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="datatables.min.js"></script>
    <script src="ADD EVENT.JS"></script>
  </body>
</html>
	


