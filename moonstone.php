<html>
    <head>
        <!--Bootstrap-->
        <title>Moonstone Mine | Moonstone</title>
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

            .box{
                box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
                transition: 1s;

            }
            .box:hover{
                transform: scale(1.3);
                z-index: 2;
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
                document.getElementById("nav-menu").children[2].children[0].classList.add("active");
                document.getElementById("nav-menu").children[2].children[1].children[0].children[0].classList.add("list-group-item-dark");
            </script>

            <!--Gemstone selling stuff-->
            <center>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 style="font-weight: 100; font-size: 20px; text-align: center" class="mt-2">MOONSTONE COLLECTION</h1>
                        </div>
                    </div>

                    <div class="row  mt-4">
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/1.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px;  border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/2.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/3.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/4.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                    </div>      

                    <div class="row  mt-4">
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/5.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/6.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/7.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/8.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row  mt-4">
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
                            <div class="card" style="height: 280px; width: 235px; border-radius: 15px;">
                                <img src="Images/moonstone collection/9.jpeg" class="card-img-top img-fluid box" alt="..." style="height: 210px; width: 235px; border-radius: 15px 15px 0px 0px;">
                                <div class="card-body">
                                    <a href="https://wa.me/94779407273" target=”_blank” class="btn btn-primary">Contact The Seller</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <!--Gemstone selling stuff end-->
    </div>
    <!--Footer link-->
    <?php include './footer.php'; ?>
    <!--Footer link end-->
</body>
</html>
