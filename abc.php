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




    </header>


<!-- 

    <div class="blog-post">
        
            <div class="blogpost_img">
                <img src="Images/c-5.jpg" alt="">
            </div>

       
      
            <div class="blog-post_info">
                <div class="blogpost_date">
                    <span>Sunday</span>
                    <span>24th Sep,2021</span>
                </div>
            </div>
            <h1 class="blog-title">Mongo DB</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto officiis deserunt dolorum non pariatur, sunt eius, fugiat perspiciatis veniam quis qui quidem reprehenderit mollitia accusantium. Quibusdam optio consequatur inventore, minima, atque nulla aut quaerat fugit aperiam, eius unde facere. Necessitatibus!</p>
            <a class="btn" href="#">Buy Now</a>
        </div>
    </div> -->

    <section class="courses">
    <div class="box-container" style="margin-top:10rem;">

<div class="box">
    <img src="Images/c-5.jpg" alt="">
    <div class="content">
        <h3> <i class="fas fa-map-marker-alt"></i> MONGO DB </h3>
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
    <script src="Add_Ons/jquery.js"></script>

</body>

</html>