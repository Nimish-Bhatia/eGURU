<?php
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eGURU</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
<!-- 
<body onload="preloading()">

    <div id="container12">
        <div id="loading">

        </div>
        <span id="loading-img">Loading...</span>
    </div> -->


    <!-- header section starts  -->


    <header class="header">

        <div class="name"><a href="index.php" class="logo"> <i class="fas fa-dice-d20"></i>

                <span>e</span>GURU</a>

        </div>


        <div class="icons">

            <div class="fas fa-moon" id="theme-btn"></div>
            <!-- <a href="myprofile.php">
                <div class="fas fa-user" id="myprofile"></div>
            </a>
            <div class="fas fa-sign-out-alt" id="log-out"></div> -->
            <div style="display:none;" class="fas fa-bars" id="menu-btn"></div>
            <a href="index.php">
                <div class="fas fa-home" id="backhome"></div>
            </a>
        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="courses.php">All Courses</a>
            <a href="#services">services</a>
            <a href="#review">reviews</a>
            <a href="#contact">contact Us</a>
            <a href="#news">News Letter</a>
        </nav>


    </header>


    <!-- header section ends -->


    <section class="rhome" id="rhome">

    <div class="image blue ">
            <img src="Images/login_blue.svg" alt="">
        </div>
        <div class="image green">
            <img src="Images/login_green.svg" alt="">
        </div>
        <div class="image yellow">
            <img src="Images/login_yellow.svg" alt="">
        </div>
        <div class="image orange ">
            <img src="Images/login_orange.svg" alt="">
        </div>
        <div class="image pink">
            <img src="Images/login_pink.svg" alt="">
        </div>
        <div class="image red">
            <img src="Images/login_red.svg" alt="">
        </div>

        <div class="rcontent">
            <div class="name"><a href="index.php" class="logo"> <i class="fas fa-dice-d20"></i>&nbsp;

                    <span>e</span>GURU</a>

            </div>
            <br>
            <hr style="border-top: 3px solid var(--orange); border-radius:6px; ">
            <br>
            <div class="togglebox">
                <div class="acttog" id="togloginbtn" onclick="loginformopen();">SIGN IN</div>
                <div class="acttog2" onclick="signformopen();" id="togregisterbtn">SIGN UP</div>
            </div>


            <div class="regcontainer">

                <div id="loginform">

                    <form id="loginform_1" class="form" method="post" action="register_login.php">
                        <div class="formctrl"> <input type="text" style="text-transform: none;" placeholder="Username or Email" name="logindetail" id="logindetail" required   >
                        </div>
                        <div class="formctrl">
                            <div style="display: flex; width:100%;">
                                <div style="width:95%;"> <input type="password" style="text-transform: none;" onpaste="return false" placeholder="Password" id="login-pass" name="login-pass" required pattern="(?=.*\d)(?=.*[^a-zA-Z0-9\s])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 8 or more characters with atleast one number, one uppercase, one lowercase letter, one special character and no spaces."> </div>
                                <div style="width:5%; margin:1rem; font-size:2rem; cursor:pointer; text-align:center; padding:1rem;  color:var(--orange);"> <i id="logineye" onclick="showloginpass()" class="fas fa-eye"></i> </div>

                            </div>
                        </div>

                        <label for="#remember">
                            <div style="display: flex; cursor:pointer; align-items:center;">
                                <div><input style="color:var(--orange); margin:1rem;" type="Checkbox" id="#remember"> </div>
                                <div style="color:var(--orange); margin-top:1rem; margin-bottom:1.2rem;  font-size:1.5rem; font-weight:500;">&nbsp;&nbsp;&nbsp;Remember Me</div>
                            </div>
                        </label>
                        
                        <button id="loginsum" name="loginsum" class="regbtn">LOG IN</button>
                    </form>

                  
                    <div style=" display:flex; justify-content:space-evenly; gap:1rem;">
                        <div><a data-modal-target="#forget_pass">Forgot Password ?</a> </div>
                        <div> <a data-modal-target="#update_pass">Update Password ?</a> </div>
                    </div>
                </div>

                <div id="signupform">
                    
                    <form id="signupform_1" method="POST" onsubmit="return submitUserForm();" action="register_login.php" class="form" >
                       
                         <input type="text" style="text-transform: none;" minlength=6 maxlength=32 pattern="[a-z0-9_]+" title="Username should be of 6 to 32 characters containing only small letters, digits and underscores." placeholder="Username" id="username" name="username" required>
                            <small id="unerr"> <i class="fas fa-exclamation-circle"></i>
                            &nbsp;   This Username is Already taken. </small>
               
                         <input type="text" pattern= "[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+" title="Please Enter A Valid Email Address." style="text-transform: none;" placeholder="E-Mail" id="email" name="email" required>
                            <small id="emailerr" > <i class="fas fa-exclamation-circle"></i>
                              &nbsp;  This Email is in Use. Try Signing In. </small>
                      
                        
                            <div style="display: flex; width:100%;">
                                <div style="width:95%;"> <input type="password" style="text-transform: none;" onpaste="return false" placeholder="Password" id="reg_pass" name="password" required pattern="(?=.*\d)(?=.*[^a-zA-Z0-9\s])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 8 or more characters with atleast one number, one uppercase, one lowercase letter, one special character and no spaces."></div>
                                <div style="width:5%; margin:1rem; font-size:2rem; cursor:pointer; text-align:center; padding:1rem;  color:var(--orange);"> <i id="regeye" onclick="showregpass()" class="fas fa-eye"></i> </div>

                            </div>
                            <input type="password" onpaste="return false" onfocus="hideregpass()" style="text-transform: none;" placeholder="Confirm Password" id="conpass" required>

                               


                    
                            <div class="g-recaptcha" id="thegcaptcha" data-theme="light" data-sitekey="6LdFK6QcAAAAACLUBQtimQLsEKXMonj8qIq5xwah" data-expired-callback="reverifyCaptcha" data-error-callback="noCaptcha" data-callback="verifyCaptcha" ></div>
                                  
                            <small id="g-recaptcha-error"> <i class="fas fa-exclamation-circle"></i>
                            &nbsp;   Verify this field to Proceed. </small>
                            <small id="g-recaptcha-re-error"> <i class="fas fa-exclamation-circle"></i>
                            &nbsp;   You Need to Verify this field Again. </small>
               
                            <small id="g-recaptcha-internet-error"> <i class="fas fa-exclamation-circle"></i>
                            &nbsp;   There seems a network issue. Come Back Later. </small>
               






                        <button class="regbtn" id="register" name="register">REGISTER NOW</button>
                           
                    </form>

                 
                </div>

            </div>

            <hr style="border-top: 3px solid var(--orange); border-radius:6px; "> <br>
            <p>Register to start your never ending jouney now!
            </p><br>

            <div class="regpageicon">

                <div><i class="fab fa-html5"></i> <br>
                    HTML 5</div>
                <div><i class="fab fa-css3-alt"></i><br>
                    CSS 5</div>
                <div><i class="fas fa-coins"></i><br>
                    DBMS</div>
                <div><i class="fab fa-python"></i><br>
                    Python</div>
                <div><i class="fas fa-laptop-code"></i><br>
                    CP</div>
                <div><i class="fas fa-file-code"></i><br>
                    & More</div>
            </div>
        </div>

    </section>





    <div class="modal" id="forget_pass">
        <button data-close-button class="closemodal"><span class="close_modal_1">&times;</span></button>
        <div class="modal_box_2">
            <div class="log_head">Forgot Password</div>
            <div class="log_body">
                <p>Enter Your E Mail:</p>
                <form action="">

                    <input class="boxin" type="email" style="text-transform: none;" required placeholder="example@gmail.com *">

                    <p style="color:var(--orange); font-size:12px; font-weight:500;">*You can update your password only if your account is verified.</p>
            </div>
            <div class="log_foot">
                <button class="regbut" type="submit">Submit Now</button>
            </div>
            </form>
        </div>
    </div>

    <div class="modal" id="update_pass">
        <button data-close-button class="closemodal"><span class="close_modal_1">&times;</span></button>
        <div class="modal_box_2">
            <div class="log_head">Update Password</div>
            <div class="log_body">
                <p>Enter Your E Mail:</p>
                <form action="">

                    <input class="boxin" type="email" style="text-transform: none;" required placeholder="example@gmail.com *">

                    <p style="color:var(--orange); font-size:12px; font-weight:500;">*You can update your password only if your account is verified.</p>
            </div>
            <div class="log_foot">
                <button class="regbut" type="submit">Submit Now</button>
            </div>
            </form>
        </div>
    </div>




    <?php
    include('themechanger.php');
    ?>



    <?php
    include('footer.php');
    ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
    <script src="validation.js"></script>
    <script src="Add_Ons/jquery.js"></script>

         
    <!-- <script src="Register_Login/ajax_request.js"></script> -->

    <script>
        AOS.init({
            duration: 800,
            delay: 400
        });
       
    </script>

</body>

</html>