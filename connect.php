<?php
$con=mysqli_connect("localhost","root","","eguru_db");
if(mysqli_connect_error()){
    echo"<script>alert('Could Not Connect To The DataBase at The Moment.')
    window.location.href='register.php';</script>";
    exit();
}

?>
