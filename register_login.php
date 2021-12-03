<?php

require('connect.php');

session_start();
if (isset($_POST['username1'])) {

$username1=$_POST['username1'];
$username_exist_query = "SELECT * FROM `student` WHERE `username`='$username1'";
$result1 = mysqli_query($con, $username_exist_query);

if ($result1) {

    if (mysqli_num_rows($result1)) {
        echo json_encode("Username");
    echo mysqli_num_rows($result1);
    } 
   
} 

}

if (isset($_POST['email1'])) {

$email1=$_POST['email1'];
$email_exist_query = "SELECT * FROM `student` WHERE `email`='$email1'";
$result2 = mysqli_query($con, $email_exist_query);

if ($result2) {

    if (mysqli_num_rows($result2)) {
    echo json_encode("Email:");
    echo json_encode(mysqli_num_rows($result2));
    }   

} 

}


if (isset($_POST['register'])) {



    $user_exist_query = "SELECT * FROM `student` WHERE ((`username`='$_POST[username]') OR (`email`='$_POST[email]'))";
    $result = mysqli_query($con, $user_exist_query);



    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                echo "<script>
                    alert('$_POST[username] : This Username Is Already In Use.');
                    window.location.href='register.php';
                    </script>";
            } else {

                echo "<script>alert('$_POST[email] : This E Mail Address Is Already In Use. Try Signing In.');
                    window.location.href='register.php';
                </script>";
            }
        } else {

            date_default_timezone_set('Asia/Calcutta');
            $date = date('d/m/Y h:i:s a', time());

            $query = "INSERT INTO `student` (`username`,`email`,`pass`,`timing`) VALUES ('$_POST[username]','$_POST[email]','$_POST[password]','$date')";
            if (mysqli_query($con, $query)) {
                echo "<script>alert('Yeah! CONGO !.');
                    window.location.href='register.php';
                    </script>";
            } else {
                echo "<script>alert('Could Not Register User. We are facing some issue at the moment. Try Again Later.');
                  window.location.href='register.php';
                  </script>";
            }
        }
    } else {
        echo "<script>alert('Could Not Validate Credentials At The Moment');
           window.location.href='register.php';
       </script>";
    }
}


if (isset($_POST['loginsum'])){
    
$query="SELECT * FROM `student` WHERE  ((`username`='$_POST[logindetail]') OR (`email`='$_POST[logindetail]'))";
$result=mysqli_query($con,$query);
if($result){
if(mysqli_num_rows($result)==1){
$result_fetch=mysqli_fetch_assoc($result);
if($_POST['login-pass']==$result_fetch['pass']){
   $_SESSION['logged-in']=true;
   $_SESSION['username']=$result_fetch['username'];
   header("location: index.php");
} 
else{
    echo   "<script>alert('Incorrect Password');
    window.location.href='register.php';
</script>";
}
}
else{
    echo  "<script>alert('The Username/Email is Not Registered.');
           window.location.href='register.php';
       </script>";
}
}
else{
    echo "<script>alert('Could Not Validate Credentials At The Moment.');
           window.location.href='register.php';
       </script>";
}


}
