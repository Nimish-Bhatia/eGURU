 <!-- contact section starts  -->

 <section class="contact" id="contact">

     <h1 class="heading">
         <span>c</span>
         <span>o</span>
         <span>n</span>
         <span>t</span>
         <span>a</span>
         <span>c</span>
         <span>t</span>
         <span class="space hide_us"></span>
         <span class="hide_us">u</span>
         <span class="hide_us">s</span>
     </h1>

     <div class="row">


     <div class="image blue ">
        <img src="Images/contact_blue.svg" alt="">
    </div>
    <div class="image green">
        <img src="Images/contact_green.svg" alt="">
    </div>
    <div class="image yellow">
        <img src="Images/contact_yellow.svg" alt="">
    </div>
    <div class="image orange ">
        <img src="Images/contact_orange.svg" alt="">
    </div>
    <div class="image pink">
        <img src="Images/contact_pink.svg" alt="">
    </div>
    <div class="image red">
        <img src="Images/contact_red.svg" alt="">
    </div>

         <form id="contact_form" method="post">
             <div class="inputBox">
                 <input name="ask_f_name" type="text" placeholder="First Name *" required="">
                 <input name="ask_l_name" type="text" placeholder="Last Name">
             </div>
             <div class="inputBox">
                 <input name="ask_email" type="email" placeholder="E-mail *" required="">
                 <input name="ask_sub" type="text" placeholder="Subject *" required="">
             </div>
             <textarea name="ask_query" placeholder="Message *" name="" id="" cols="30" rows="10"></textarea>
             <button name="Contact_us" type="submit" class="btn">Send Message</button>
         </form>

     </div>

 </section>

 <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require('PHP_Mailer\Exception.php');
    require('PHP_Mailer\PHPMailer.php');
    require('PHP_Mailer\SMTP.php');


    if (isset($_POST['Contact_us'])) {
        $fname = $_POST['ask_f_name'];
        $lname = $_POST['ask_l_name'];
        $stu_email = $_POST['ask_email'];
        $ask_sub = $_POST['ask_sub'];
        $ask_ques = $_POST['ask_query'];

        $mail = new PHPMailer(true);

        try {
                              
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'eguru.contactus@gmail.com';            
            $mail->Password   = 'egurucontactus123';                              
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                


            $mail->setFrom('eguru.contactus@gmail.com');
            $mail->addAddress($stu_email);    
          
            $mail->isHTML(true);
            $mail->Subject = 'eGURU | Contact Us';



            $mail->Body    = "
            <body style='background-color: #F9A826; padding: 10px;'>
    <div class='whole' style='background-color: #fff; margin:10px; padding:5px; border-radius: 25px;'>
        <div style='margin:0px; padding:0; '>
            <h1 style='text-align: center;  padding-top: 2rem;  color: #F9A826;'>eGURU | Contact Us</h1>
        </div>

        <hr style='width: 100%; border-radius:10px; height:0.5px; background-color:#F9A826; border-top: 2px solid #F9A826; '>


        <div style='width: 100%; display: flex; align-items:center; justify-content: center;'>
            <img style=' width: 100%;' src='https://s3-us-west-2.amazonaws.com/brillianthire-blog/2020/05/undraw_real_time_collaboration_c62i.png'>
        </div>

        <p style='text-align: left; font-size:1.6rem;  margin: 5px; padding: 10px; color: #F9A826;'>
            <span style='color: #F9A826; background-color: #fff;'>Hi $fname,</span> <br>
            <span style='color: #F9A826; font-size:1rem;'> You have recently contacted us regarding &quot;$ask_sub&quot;. Your query will be answered shortly.</span>
            <br>
            <br>
        </p>
        <div style='color: #F9A826; font-size:1.2rem; margin: 5px; padding: 10px;'>
            <span style='color: #F9A826; font-size:1.2rem;'> Credentials:</span>

            <br>
            <span style='color: #F9A826; font-size:1.2rem;'>Full Name : $fname $lname</span>
            <br>
            <span style='color: #F9A826; font-size:1.2rem;'>Subject : $ask_sub</span>
            <br>
            <span style='color: #F9A826; font-size:1.2rem;'>Query : $ask_ques</span>

            <br>
        </div>



    </div>
</body>";


            $mail->send();


            echo '<script>alert("A Copy of your Responses has been Sent to you via Mail. Your Query will be Answered Shortly. Thanks!");
    window.location="index.php";</script>';
        } catch (Exception $e) {
            echo '<script>alert("Message could not be sent.")</script>';
        }
    }



    ?>


 <!-- contact section ends -->