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
            <?php
            session_start();
            if (isset($_SESSION['logged-in'])) echo '<a href="logout.php">  <div class="fas fa-sign-out-alt" id="log-out"> </div></a> ' ?>
            <div class="fas fa-bars" id="menu-btn"></div>

        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#courses">All Courses</a>
            <a href="#services">services</a>
            <a href="#review">reviews</a>
            <a href="#contact">contact Us</a>
            <a href="#news">News Letter</a>
        </nav>


    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image blue ">
            <img src="Images/home_blue.svg" alt="">
        </div>
        <div class="image green">
            <img src="Images/home_green.svg" alt="">
        </div>
        <div class="image yellow">
            <img src="Images/home_mustard.svg" alt="">
        </div>
        <div class="image orange ">
            <img src="Images/home_orange.svg" alt="">
        </div>
        <div class="image pink">
            <img src="Images/home_pink.svg" alt="">
        </div>
        <div class="image red">
            <img src="Images/home_red.svg" alt="">
        </div>

        <div class="content">
            <h3>Discover a new way of learning </h3>
            <p style="text-transform:none; text-align:justify">eGURU is an online learning platform that offers access to online courses and teachers from world-class universities and companies.
            </p>
            <div>
                <?php

                if (isset($_SESSION['logged-in'])) echo ' <a href="myprofile.php" class="btn">My Profile</a>';
                else echo '  <a href="register.php" class="btn">Get Started</a>'; ?>
            </div>
        </div>

    </section>


    <!-- home section ends -->

    <?php
    include('themechanger.php');
    ?>




    <!-- course section starts  -->

    <section class="courses" id="courses">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span>s</span>
            <span>e</span>
            <span>s</span>

        </h1>

        <div class="box-container">

            <div class="box">
                <img src="Images/c-1.png" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> HTML 5 </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="Images/c-2.png" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> CSS 3 </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="Images/c-3.png" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> JS 5 </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="Images/c-4.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Basics in C </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span></div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="Images/c-5.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Mongo DB </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="abc.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="Images/c-6.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Android </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- courses section ends -->

    <?php
    include('services.php');
    ?>

    <?php
    include('contact.php');
    ?>

    <?php
    include('review.php');
    ?>

    <?php
    include('news.php');
    ?>

    <?php
    include('footer.php');
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