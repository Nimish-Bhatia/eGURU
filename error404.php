<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eGURU</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<body onload="preloading()">

    <div id="container12">
        <div id="loading">

        </div>
        <span id="loading-img">Loading...</span>
    </div> 

    <!-- header section starts  -->

    <header class="header">

        <div class="name"><a href="index.php" class="logo"> <i class="fas fa-dice-d20"></i>

                <span>e</span>GURU</a>

        </div>

        <div class="icons">

            <div class="fas fa-moon" id="theme-btn"></div>
          
            <div  style="display:none" class="fas fa-bars" id="menu-btn"></div>

        </div>
        


    </header>


<section class="home" id="home">

<div class="image blue ">
            <img src="Images/error_blue.svg" alt="">
        </div>
        <div class="image green">
            <img src="Images/error_green.svg" alt="">
        </div>
        <div class="image yellow">
            <img src="Images/error_yellow.svg" alt="">
        </div>
        <div class="image orange ">
            <img src="Images/error_orange.svg" alt="">
        </div>
        <div class="image pink">
            <img src="Images/error_pink.svg" alt="">
        </div>
        <div class="image red">
            <img src="Images/error_red.svg" alt="">
        </div>

<div class="content">
    <h3>OOPS !</h3>
    <p style="text-transform:none; text-align:justify">

    We are encountering some error at the moment. Try Again Later.
    <br>
    We are working really hard to make this web page insignificant tho :) 
    </p>
</div>

</section>

      

    <?php
    include('themechanger.php');
    ?>







    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>
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