<?php 
$con = mysqli_connect('localhost','root','','managementzoo');
if(!$con){
    die('Error'.mysqli_connect_error());
}