<html>
    <head>
        <!--Bootstrap-->
        <title>Moonstone Mine | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!--Bootstrap end-->

        <!--Icon-->
        <link rel="icon" href="Images/other resources/Icon.png">
        <!--Icon end-->
        
        <!--Bootstrap for owl carouse-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
              integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
              crossorigin="anonymous" />
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
              integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
              crossorigin="anonymous" />
        <!--Bootstrap for owl carouse end-->

        <!--Styles for form-->
        <style>
            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }

            .gem-bg {
                background: none;
            }
        </style>
        <!--Styles for form end-->

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
                .grid1{
                    border-radius: 15px;
                    margin-left: 30px;
                    margin-bottom: 20px;
                }
                .grid2{
                    border-radius: 15px;
                    margin-right: 30px;
                    margin-bottom: 20px;
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
                .grid1{
                    width: 85%;
                    height: 165px;
                    border-radius: 15px;
                    margin-left: 30px;
                    margin-bottom: 20px;
                }
                .grid2{
                    width: 85%;
                    height: 165px;
                    border-radius: 15px;
                    margin-left: 30px;
                    margin-bottom: 20px;
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
                .grid1{
                    margin-top: 20px;
                    width: auto;
                    height: 40%;
                    border-radius: 15px;
                    margin-bottom: 20px;

                }
                .grid2{
                    margin-top: 20px;
                    width: auto;
                    height: 40%;
                    border-radius: 15px;
                    margin-bottom: 20px;
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
                .grid1{
                    width: 85%;
                }
                .grid2{
                    width: 85%;
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
                .grid1{
                    width: 85%;
                    border-radius: 15px;
                    margin-bottom: 20px;
                    margin-top: 20px;
                }
                .grid2{
                    width: 85%;
                    border-radius: 15px;
                    margin-bottom: 20px;
                    margin-top: 20px;
                }
            }
            @media (min-width: 912px) and (max-width: 1368px) {
                .custom {
                    margin-top: 170px;
                }
                .grid1{
                    width: 85%;
                    border-radius: 15px;
                    margin-bottom: 20px;
                    margin-top: -5px;
                }
                .grid2{
                    width: 85%;
                    border-radius: 15px;
                    margin-bottom: 20px;
                    margin-top: -5px;
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
                .grid1{
                    width: 85%;
                    margin-top: 20px;
                    border-radius: 15px;
                    margin-bottom: 20px;
                }
                .grid2{
                    width: 85%;
                    margin-top: 20px;
                    border-radius: 15px;
                    margin-bottom: 20px;
                }
            }
            @media (min-width: 768px) and (max-width: 1024px) {
                .custom {
                    margin-top: 170px;
                }
                .grid1{
                    width: 85%;
                    border-radius: 15px;
                    margin-bottom: 20px;
                    margin-top: 20px;
                }
                .grid2{
                    width: 85%;
                    border-radius: 15px;
                    margin-bottom: 20px;
                    margin-top: 20px;
                }
            }
        </style>
        <!--Styles for a body content end-->

    </head>
    <body style="background-image: url('Images/other resources/bg.jpg'); background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;">
        <!--Navigation link-->
        <?php include './navigation.php'; ?>
        <!--Navigation link end-->
        <div class="container custom" style="background-image: url('Images/other resources/bg.jpg'); background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;">
            <script>
                document.getElementById("nav-menu").children[0].classList.add("active");
            </script>

            <!--Picture Slider-->
            <div class="row mt-3 ms-2 me-2">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <center>
                        <video controls muted autoplay style="border-radius: 15px; height: 340px; width: auto; object-fit: cover;" class="img-fluid">
                            <source src="Videos/main.mp4" type="video/mp4">
                        </video>
                    </center>
                </div>
                <!--Picture Slider end-->

                <!--Picture grid-->
                <div class="col-lg-3 col-md-6 col-sm-12 text-center" style="padding: 10px;">
                    <div><a href="gemstone.php"><img src="Images/grid/gemstones.png" width="90%" class="grid1 img-fluid"></a></div>
                    <div><a href="jewelry.php"><img src="Images/grid/jewellery.png" width="90%" class="grid1 img-fluid"></a></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center" style="padding: 10px;">
                    <div><a href="moonstone.php"><img src="Images/grid/moonstone.png" width="90%" class="grid2 img-fluid"></a></div>
                    <div><a href="services.php"><img src="Images/grid/services.png" width="90%" class="grid2 img-fluid"></a></div>
                </div>
                <!--Picture grid end-->
            </div>

            <hr class="mt-5">

            <!--Gemstone owl carousel-->
            <div class="mt-5">
                <font style="font-weight: 100; font-size: 23px; margin-left: 50px;">POPULAR GEMSTONES</font>
                <div class="row mt-5">
                    <div class="col-12 m-auto">
                        <div class="owl-carousel owl-theme">
                            <div class="item mb-4">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/gemstones/ruby.jpg" alt="" class="card-img-top rounded-circle" style="opacity:1; border-radius: 10px; width: 200px; height: 200px; object-fit: cover;"></center>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <font>RUBY</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center> <img src="Images/gemstones/sapphire.jpg" alt="" class="card-img-top rounded-circle" style="border-radius: 10px; width: 200px; height: 200px; object-fit: cover;"></center>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <font>SAPPHIRE</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/gemstones/aquamarine.jpg" alt="" class="card-img-top rounded-circle" style="border-radius: 10px; width: 200px; height: 200px; object-fit: cover;"></center>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <font>AQUAMARINE</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/gemstones/cymophane-cats-eye.jpg" alt="" class="card-img-top rounded-circle" style="border-radius: 10px; width: 200px; height: 200px; object-fit: cover;"></center>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <font>CYMOPHANE</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/gemstones/alexandrite.jpg" alt="" class="card-img-top rounded-circle" style="border-radius: 10px; width: 200px; height: 200px; object-fit: cover;"></center>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <font>ALEXANDRITE</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center> <img src="Images/gemstones/spinel.jpg" alt="" class="card-img-top rounded-circle" style="border-radius: 10px; width: 200px; height: 200px; object-fit: cover;"></center>
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <font>SPINEL</font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Gemstone owl carousel end-->

            <hr class="mt-5">

            <!--Jewelery owl carousel-->
            <div class="mt-5">
                <font style="font-weight: 100; font-size: 23px; margin-left: 50px;">POPULAR JEWELERIES</font>
                <div class="row mt-5">
                    <div class="col-12 m-auto">
                        <div class="owl-carousel owl-theme">
                            <div class="item mb-4">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/jewellery/1.jpg" alt="" class="card-img-top" style="border-radius: 20px; width: 200px; height: 200px; object-fit: cover;"></center>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center> <img src="Images/jewellery/2.jpg" alt="" class="card-img-top" style="border-radius: 20px; width: 200px; height: 200px; object-fit: cover;"></center>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/jewellery/3.jpg" alt="" class="card-img-top" style="border-radius: 20px; width: 200px; height: 200px; object-fit: cover;"></center>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/jewellery/4.jpg" alt="" class="card-img-top" style="border-radius: 20px; width: 200px; height: 200px; object-fit: cover;"></center>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center><img src="Images/jewellery/5.jpg" alt="" class="card-img-top" style="border-radius: 20px; width: 200px; height: 200px; object-fit: cover;"></center>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card border-0 gem-bg">
                                    <center> <img src="Images/jewellery/6.jpg" alt="" class="card-img-top" style="border-radius: 20px; width: 200px; height: 200px; object-fit: cover;"></center>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
                    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous"></script>
            <script>
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 15,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        },
                        1400: {
                            items: 4
                        }
                    }
                })
            </script>
            <!--Jewelery owl carousel end-->
            <br>
            <hr>

            <!--Services part-->
            <center>
                <div class="row mt-5 text-center">
                    <font style="font-size: 23px;text-align:center; text-decoration: underline; font-weight: 100;">SERVICES</font><br><br>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                        <video controls autoplay style="border-radius: 15px;" class="img-fluid text-center">
                            <source src="Videos/My Video.mp4" type="video/mp4">
                            <source src="Videos/My Video.ogg" type="video/ogg">
                        </video>
                    </div>
                    <div class="col-lg-6 text-center mt-5">
                        <font style="font-weight: 100; font-size: 18px;"><b>THE SERVICES WE PROVIDE</b></font>
                        <p class="mt-5 text-uppercase" style="font-size:15px; font-weight: 100;">Gemstone cutting and polishing services are available from us<br>
                            and you can see gemstones cutting and polishing ,<br> 
                            if you need to get or see our service, contact us now.<br><br>
                            • Gemstone cutting and polishing.<br><br>
                            &nbsp;&nbsp;• Moonstone cutting and polishing.
                        </p>
                    </div>
                </div>
            </center>
            <!--Services part end-->
            <br>
            <hr>
            <!--Gemstone or Moonstone requesting part-->
            <center>
                <div class="row mt-5 mb-5">
                    <font style="font-size: 23px;text-align:center; text-decoration: underline; font-weight: 100; ">REQUEST FOR GEM STONE</font><br><br>
                    <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                        <img class="img-fluid" src="Images/other resources/requesting.png" style="border-radius: 15px;">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <form action="index.php" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="name" style="font-weight: 100; font-size: 15px;">NAME</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="name" name="fullname" id="fullname" placeholder="TYPE YOUR NAME" height="30px;" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="email" style="font-weight: 100; font-size: 15px;">EMAIL</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="email" name="email" placeholder="EMAIL" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="contact" style="font-weight: 100; font-size: 15px;">SUBJECT</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="subject" name="subject" placeholder="SUBJECT" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="subject" style="font-weight: 100; font-size: 15px;">INQUIRY</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="message" name="message" placeholder="WRITE YOUR INQUIRY" style="height:200px" required></textarea>
                                </div>
                            </div>
                            <div style="justify-content: center;">
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary" onclick="myFunction()">SEND MESSAGE</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </center>
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
        <!--Footer link-->
        <?php include './footer.php'; ?>
        <!--Footer link end-->
    </body>
</html>
