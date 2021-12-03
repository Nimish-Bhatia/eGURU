


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eGURU</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file cdn link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header class="header">

        <div class="name"><a href="index.php" class="logo"> <i class="fas fa-dice-d20"></i>&nbsp;

                <span>e</span>GURU Admin Area</a>

        </div>

        <div class="icons">
            <div class="fas fa-moon" id="theme-btn"></div>          
            <a href="logout.php">  <div class="fas fa-sign-out-alt" id="login-btn"></div> </a>
          <a href="index.php"><div class="fas fa-home" id="menu-btn"></div></a>  
        </div>

    </header>
    

    <div class="navigate">
        <br><br><br><br><br><br>
            <a href="dashboard.php"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;Dashboard</a>
            <a href="a_courses.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Courses</a>
            <a href="a_lessons.php"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;Lessons</a>
            <a href="a_students.php"><i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Students</a>
            <a href="a_sell.php"><i class="fas fa-sticky-note"></i>&nbsp;&nbsp;Sell Report</a>
            <a href="a_payment.php"><i class="fas fa-money-bill-wave"></i>&nbsp;&nbsp;Payment Status</a>
            <a href="a_feedback.php"><i class="fas fa-comments"></i>&nbsp;&nbsp;Feedback</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Log Out</a>
            
    </div>
    
<div>

</div>

    <div class="theme-toggler">

        <div class="toggle-btn">
            <i class="fas fa-cog"></i>
        </div>

        <h3>choose color</h3>

        <div class="buttons">
            <a onclick="blue()">
                <div class="theme-btn" style="background: #3867d6; color:#6dd1ff31;"></div>
            </a>
            <a onclick="yellow()">
                <div class="theme-btn" style="background: #f7b731; color:rgba(255, 165, 0,.2);"></div>
            </a>
            <a onclick="red()">
                <div class="theme-btn" style="background: #ff0033; color:#ff52523d;"></div>
            </a>
            <a onclick="green()">
                <div class="theme-btn" style="background: #20bf6b; color:#53fe5356;"></div>
            </a>
            <a onclick="orange()">
                <div class="theme-btn" style="background: #fa8231; color:rgba(255, 165, 0,.2);"></div>
            </a>
            <a onclick="pink()">
                <div class="theme-btn" style="background: #FC427B; color:#fc427a57;"></div>
            </a>
        </div>

    </div>

   

    <br><br><br><br><br><br><br>

    
    <div class="container44">
        <div class="mainbox">
            <div class="boxofdata">Courses</div>
            <div class="boxofdata">Students</div>
            <div class="boxofdata">Sold</div>
        </div>
        
        <h1 class="tableheader">Course Ordered</h1>
        <table class="table" border="1px">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Course ID</th>
                    <th>Student Email</th>
                    <th>Order Data</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>22</td>
                    <td>100</td>
                    <td>sonam@gmail.com</td>
                    <td>20/10/2020</td>
                    <td>2000</td>
                    <td><i class="fas fa-trash-alt"></i></td>
                </tr>
            </tbody>
        </table>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="jquery.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>

    <script>

        AOS.init({
            duration: 800,
            delay: 400
        });

    </script>

</body>

</html>