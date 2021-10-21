<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Styles By J</title>
    <link rel="stylesheet" href="Css.css">
    <link rel="shortcut icon" href="Pictures/favicomatic/favicon.ico">
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
    <meta name="viewport" content="width =device-width, initial-scale =1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <a href="Home.html"><img src="Pictures/ASBJ-Logo.png" class="Logo"></a>
    </div>
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="Home.html">HOME</a></li>
                <li><a href="About J.html">ABOUT J</a></li>
                <li><a href="Service.html">SERVICES</a></li>
                <li><a href="Appointments.html">APPOINTMENTS</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="Pictures/MenuButton.png" id="menu">
    </div>

    <!--Appointment Page-->
    <section id="Appointments">
        <div class="Appointments-title-text">
            <p>APPOINTMENTS</p>
            <h1>Schedule With J Today!</h1>
        </div>
        <section id="Overall-Appointments">
            <div class="Appointments-box">
                <div class="Appointments-left">
                    <h3>Send Your Request</h3>
                    <form action="sendmailToJ.php" method="post" name="contact_form" id="contact_form">
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
            </div>

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
                echo "Message Sent! Thank You!";
            }

            //if "email" variable is not filled out, display an error
            else {
                echo "There has been an error!";
            }
            ?>

        </h2>

        <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> footer <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
        <section id="footer">
            <img src="Pictures/All-Styles2.png" class="footer-img">
            <div class="title-text">
                <p>Contact</p>
                <h1>Visit J Today!</h1>
            </div>
            <div class="footer-row">
                <div class="footer-left">
                    <i class="fa fa-clock"></i>
                    <h1>My Hours</h1>
                    </i>
                    <p>Monday to Saturday - 10am to 5:30pm</p>
                </div>
                <div class="footer-right">
                    <i class="fa fa-phone"></i>
                    <h1>Get In Touch</h1>
                    <p>2201 N. Martin Luther King Dr.</p>
                    <p>Jasminyoung32@gmail.com</p>
                    <p>708-740-8823</p>
                </div>

            </div>
            <div class="social-links">
                <a href=""><i class="fab fa-facebook"></i></a>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <p>Copyright Henny C Code Designs </p>
            </div>

        </section>


</body>

</html>