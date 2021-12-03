<?php 
   require('connect.php');
   
   session_start();

   if (isset($_POST['adminsub'])){
    $query="SELECT * FROM `admin` WHERE  ((`admin_email`='$_POST[adminid]') AND (`admin_pass`='$_POST[adminpass]'))";
    $result=mysqli_query($con,$query);
    if($result){
    if(mysqli_num_rows($result)==1){
  
        echo   "<script>
        window.location.href='dashboard.php';
    </script>";
  
    }
    else{
        echo  "<script>alert('The Username/Email is Invalid.');
               window.location.href='index.php';
           </script>";
    }
    }
    else{
        echo "<script>alert('Could Not Validate Credentials At The Moment.');
               window.location.href='index.php';
           </script>";
    }
    
    
    }
  
    

   ?>