







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="./styles.css">

    <title>Visitor Login</title>
  </head>
  <body>

    <!-- Backgrounds -->

     

<div id="login-bg" class="container-fluid">

<div class="bg-img"></div>
<div class="bg-color"></div>
</div>

<!-- End Backgrounds -->

<div class="container" id="login">
  <div class="row justify-content-center">
  <div class="col-lg-8">
  <div class="login">
    <h1> Visitor Login</h1>
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "connection.php";
            $sql = "SELECT * FROM visitorrtabel WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="visitorlogin.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div><br>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div><br>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-outline-success">
        </div>
        <div><p> Not registered yet / <a href="visitorregistration.php"> Register Here</a></p></div>
    </div>

      </form>
    
          
             <!-- End Loging form -->

          </div></div></div>
        </div>
        </div>
    </div>


  </body>
</html>