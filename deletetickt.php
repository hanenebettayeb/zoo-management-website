<?PHP 
if ( isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "managementzoo";
    $con = new mysqli($servername,$username,$password,$database);
    $sql ="DELETE FROM bookedticketstabel WHERE id=$id";
    $con->query($sql);
    header("location:/registration/New folder (3)/VIEW BOOKED TICKETS.PHP");
    exit;
}
?>