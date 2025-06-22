<html>
    <head>
        <!--Bootstrap-->
        <title>Moonstone Mine | Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!--Bootstrap end-->

        <!--Icon-->
        <link rel="icon" href="Images/other resources/Icon.png">
        <!--Icon end-->

        <!--Styles for a body content-->
        <style>
            /* 
                      ##Device = Desktops
                      ##Screen = 1281px to higher resolution desktops
            */

            @media (min-width: 1281px) {
                .custom {
                    margin-top: 200px;
                }
            }

            /* 
              ##Device = Laptops, Desktops
              ##Screen = B/w 1025px to 1280px
            */

            @media (min-width: 1025px) and (max-width: 1280px) {
                .custom {
                    margin-top: 175px;
                }
            }

            /* 
              ##Device = Tablets, Ipads (portrait)
              ##Screen = B/w 768px to 1024px
            */

            @media (min-width: 768px) and (max-width: 1024px) {
                .custom {
                    margin-top: 170px;
                }
            }

            /* 
              ##Device = Tablets, Ipads (landscape)
              ##Screen = B/w 768px to 1024px
            */

            @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
                .custom {
                    margin-top: 170px;
                }
            }

            /* 
              ##Device = Low Resolution Tablets, Mobiles (Landscape)
              ##Screen = B/w 481px to 767px
            */

            @media (min-width: 481px) and (max-width: 767px) {
                .custom {
                    margin-top: 310px;
                }
            }

            /* 
              ##Device = Most of the Smartphones Mobiles (Portrait)
              ##Screen = B/w 320px to 479px
            */

            @media (min-width: 320px) and (max-width: 480px) {
                .custom {
                    margin-top: 300px;
                }
            }
        </style>
        <!--Styles for a body content end-->
    </head>

    <body style="background-image: url('Images/other resources/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed;" class="custom">
        <!--Navigation link-->
        <?php include './navigation.php'; ?>
        <!--Navigation link end-->
        <div class="container custom" style="background-image: url('Images/other resources/bg.jpg'); background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;">
            <script>
                document.getElementById("nav-menu").children[4].classList.add("active");
            </script>

            <!--Contact us stuff-->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <center>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                                        <h1 style="font-weight: 100; font-size: 23px;" class="mb-5">HOW TO FIND US</h1>
                                        <p class="text" style="font-size: 15px; font-weight: 100;">IF YOU HAVE ANY QUESTIONS , JUST FILL IN THE CONTACT FORM<br> AND WE WILL ANSWER YOU SHORTLY. IF YOU ARE LIVING NEARBY ,<br> THEN COME AND VISIT OUR PLACE.</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <h1 style="font-weight: 100; font-size: 23px;" class="mb-3">OUR DETAILS</h1>
                                        <p class="text" style="font-size: 15px; font-weight: 100;">
                                            PATHALA ROAD , DOMANWILA ,<br>
                                            MITIYAGODA.<br><br>
                                            PHONE: <br>(+94) 77 940 7273<br>
                                            (+94) 77 928 3313
                                        </p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <img src="Images/grid/moonstone.png" width="80%" style="margin-top: 90px;">
                                    </div>



                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <h1 style="font-weight: 100; font-size: 23px;" class="mb-5">GET IN TOUCH</h1>
                                        <form action="contact.php" method="post">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="name" class="headerfont" style="font-size: 15px; font-weight: 100;">NAME</label>
                                                </div>
                                                <div class="col-75">
                                                    <input style="width: 80%" type="text" id="name" name="fullname" id="fullname" placeholder="Type your name" class="text" required>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-25">
                                                    <label for="email" class="headerfont" style="font-size: 15px; font-weight: 100;">EMAIL</label>
                                                </div>
                                                <div class="col-75">
                                                    <input style="width: 80%" type="text" id="email" name="email" placeholder="Email" class="text" required>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-25">
                                                    <label for="contact" class="headerfont" style="font-size: 15px; font-weight: 100;">SUBJECT</label>
                                                </div>
                                                <div class="col-75">
                                                    <input style="width: 80%" type="text" id="subject" name="subject" placeholder="Subject" class="text" required>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-25">
                                                    <label for="subject" class="headerfont" style="font-size: 15px; font-weight: 100;">MESSAGE</label>
                                                </div>
                                                <div class="col-75">
                                                    <textarea style="width: 80%" id="message" name="message" placeholder="Write your inquiry" class="text" required></textarea>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                                    <button type="submit" name="submit" class="btn btn-primary headerfont" onclick="myFunction()">Send Message</button>
                                                </div>
                                            </div>
                                            <br>
                                        </form>
                                    </div>


                                    <?php
                                    // checking if the form is submit
                                    if (isset($_POST['submit'])) {
                                        $fullname = $_POST['fullname'];
                                        $email = $_POST['email'];
                                        $subject = $_POST['subject'];
                                        $message = $_POST['message'];

                                        $to = 'chamindat267@gmail.com';
                                        $mail_subject = 'Message from Website';
                                        $email_body = "Message from Contact Us Page of the Website: <br>";
                                        $email_body .= "<b>From:</b> {$fullname} <br>";
                                        $email_body .= "<b>Subject:</b> {$subject} <br>";
                                        $email_body .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

                                        $header = "From: {$email}\r\nContent-Type: text/html;";

                                        $send_mail_result = mail($to, $mail_subject, $email_body, $header);

                                        if ($send_mail_result) {
                                            echo "<script>alert(Message Sent.)</script>";
                                        } else {
                                            echo "<script>alert(Message Not Sent.)</script>";
                                        }
                                    }
                                    ?>
                                    <!--Gemstone or Moonstone requesting part end-->

                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!--Contact us stuff end-->
        </div>
        <!--Footer link-->
        <?php include './footer.php'; ?>
        <!--Footer link end-->
    </body>
</html>
