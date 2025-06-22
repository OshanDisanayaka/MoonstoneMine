<html>
    <head>
        <!--Bootstrap-->
        <title>Moonstone Mine | About Us</title>
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
    <body class="custom" style="background-image: url('Images/other resources/bg.jpg'); background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;">
        <!--Navigation link-->
        <?php include './navigation.php'; ?>
        <!--Navigation link end-->
        <div class="container custom" style="background-image: url('Images/other resources/bg.jpg'); background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;">
            <script>
                document.getElementById("nav-menu").children[1].classList.add("active");
            </script>

            <!--About us stuff-->
            <div class="container mt-4" id="page-container">
                <div class="row" id="content-wrap">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <center>
                            <h1 style="font-weight: 100; font-size: 23px;" class="mb-5">ABOUT US</h1>
                            <p style="font-size: 15px; font-weight: 100;" class="mt-5 text-uppercase text-center">We, Meetiyagoda Moonstone Mine, have been providing excellent service in Sri Lanka for many years,providing the highest quality gemstones, moonstone, and jewelry,and also providing several other services such as gemstone cutting and polishing, moonstone cutting and polishing. We are committed to providing our valuable services continuously.</p>
                        </center>
                    </div>
                </div>

                <hr class="mt-5">

                <div class="row" id="content-wrap">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <center>
                            <h1 style="font-weight: 100; font-size: 23px;" class="mb-5">OUR MISSION</h1>
                            <p style="font-size: 15px; font-weight: 100;" class="mt-5 text-uppercase text-center">Our mission is to curate and offer a stunning collection of ethically sourced gemstones that captivate the essence of beauty and individuality. We are committed to providing a seamless and transparent shopping experience, where each gemstone tells a unique story of craftsmanship, authenticity, and responsible sourcing. With a passion for quality and a dedication to customer satisfaction, we strive to be a trusted destination for those seeking timeless treasures from the heart of the Earth.</p>
                        </center>
                    </div>
                </div>

                <hr class="mt-5">

                <div class="row" id="content-wrap">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <center>
                            <h1 style="font-weight: 100; font-size: 23px;" class="mb-5">OUR VISION</h1>
                            <p style="font-size: 15px; font-weight: 100;" class="mt-5 text-uppercase text-center">Our vision is to be the premier destination for gemstone enthusiasts, setting the standard for excellence in the industry. We aspire to create a community that celebrates the artistry, cultural significance, and geological marvels embodied in each gemstone. As we grow, we envision establishing partnerships with artisans, fostering sustainable practices, and contributing to the appreciation and conservation of precious gemstone resources. By continuously innovating and inspiring a deeper connection with the Earth's wonders, we aim to be the go-to source for those who cherish the extraordinary beauty of gemstones.</p>
                        </center>
                    </div>
                </div>

            </div>
            <!--About us stuff end-->
        </div>
        <!--Footer link-->
        <?php include './footer.php'; ?>
        <!--Footer link end-->
    </body>
</html>
