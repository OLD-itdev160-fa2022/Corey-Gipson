<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Example contact form">
    <meta name="keywords" content="VICOM-128, HTML Contact Form">
    <link rel="stylesheet" href="CSS/TattooPriest.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">



    <link rel="shortcut icon" href="Images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Voltaire&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <section class="S-header">
        <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Nav Bar <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
        <div class="navBar">
            <!-- ******** Logo ******** -->
            <a href="index.html"><img src="Images/Logo9.png" alt="#" class="logo"></a>
            <nav>
                <!-- ******** Links ******* -->
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="About.html">About Me</a></li>
                    <li><a href="My-Work.html">My Work</a></li>
                    <li><a href="Schedule.html">Schedule</a></li>
                    <li><a href="Ministry.html">Ministry</a></li>
                    <li><a href="FAQ.html">FAQ</a></li>
                </ul>
            </nav>
        </div>
        <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Banner <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
        <div class="banner-text">
            <h1>The Tattoo Priest</h1>
            <p>"So, whether you eat or drink, or whatever you do, do all to the glory of God." - 1 Corinthians 10:31</p>
        </div>
    </section>


    <section id="Schedule">

        <div class="title-text">
            <p>Schedule</p>
            <h2>Book An Appointment With The Tattoo Priest</h2>
            <div class="explain">
                <p>
                    Please enter your info and a requested date down below.
                    The Tattoo Priest will get back to you within 24 hours.<br><br>Thank You!
                </p>
            </div>
        </div>

        <section>
            <div class="schedule-box">
                <div class="schedule-left">
                    <h3>Send Your Request</h3>
                    <form action="sendmail.php" method="post" name="contact_form" id="contact_form">
                        <fieldset>
                            <legend>Contact Information</legend>
                            <label for="first_name">First Name:</label>
                            <input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>" disabled><br>
                            <label for="last_name">Last Name:</label>
                            <input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>" disabled><br>
                            <label for="email">Email Address:</label>
                            <input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
                            <label for="verify">Verify Email:</label>
                            <input type="email" name="verify" id="verify" value="<?php echo $_REQUEST['email'] ?>" disabled><br>
                            <label for="phone">Phone Number:</label>
                            <input type="tel" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
                        </fieldset>
                        <fieldset>
                            <legend>Message Information</legend>
                            <label for="reservation_date">Today's Date:</label>
                            <input type="date" name="reservation_date" id="reservation_date" value="<?php echo $_REQUEST['reservation_date'] ?>" disabled><br>
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
                            <label for="Message">Message:</label>
                            <textarea id="message" name="message" rows="4" disabled><?php echo $_REQUEST['message'] ?></textarea>
                        </fieldset>
                </div>
                <div class="schedule-right">
                    <h3>Reach Me</h3>

                    <table>
                        <tr>
                            <td>Email:</td>
                            <td>tattoopriest@gmail.com</td>
                        </tr>

                        <tr>
                            <td>Phone:</td>
                            <td>+1-(224)-342-7971</td>
                        </tr>

                        <tr>
                            <td>location:</td>
                            <td>Chicago, IL</td>
                        </tr>

                        <tr>
                            <td>IG:</td>
                            <td>@tattoopriest</td>
                        </tr>
                    </table>
                    <div class="s-img">
                        <img src="Images/logo5.png" alt="#">
                    </div>
                </div>
            </div>
        </section>

    </section>

    <!-- This entire script, including the opening and closing ?php tags, can be nested inside of any other tag, such as div or p, to control positioning and formatting of confirmation message spit out by the email script -->
    <h2>
        <?php
        if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email

            //Set admin email for email to be sent to (use you own MATC email address)
            $admin_email = "gipsonc@gmatc.matc.edu";

            //Set PHP variable equal to information completed on the HTML form
            $email = $_REQUEST['email']; //Request email that user typed on HTML form
            $phone = $_REQUEST['phone']; //Request phone that user typed on HTML form
            $reservation_date = $_REQUEST['reservation_date']; //Request subject that user typed on HTML form
            $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
            $message = $_REQUEST['message']; //Request message that user typed on HTML form
            //Combine first name and last name, adding a space in between
            $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name'];

            //Start building the email body combining multiple values from HTML form    
            $body  = "From: " . $name . "\n";
            $body .= "Email: " . $email . "\n"; //Continue the email body
            $body .= "Phone: " . $phone . "\n"; //Continue the email body
            $body .= "Reservation Date: " . $reservation_date . "\n"; //Continue the email body
            $body .= "Message: " . $message; //Continue the email body

            //Create the email headers for the from and CC fields of the email     
            $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
            $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor

            //Actually send the email from the web server using the PHP mail function
            mail($admin_email, $subject, $body, $headers);

            //Display email confirmation response on the screen
            echo "Thank you for contacting The Tattoo Priest!";
        }

        //if "email" variable is not filled out, display an error
        else {
            echo "There has been an error!";
        }
        ?>

    </h2>

    <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> footer <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
    <section id="footer">
        <img src="Images/logo11.png" alt="#" class="footer-img">
        <div class="title-text">
            <p>Contact</p>
            <h2>Come Meet The Priest Today!</h2>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <h2>Opening Hours </h2>
                <p>Monday - Friday - 9am to 11pm</p>
                <p>Saturday and Sunday - 9am to 6pm</p>
            </div>
            <div class="footer-right">
                <h2>Get In Touch </h2>
                <p>Email: tattoopriest@gmail.com</p>
                <p>(224)-342-7971</p>
            </div>
        </div>
    </section>


</body>

</html>