<script>
    window.addEventListener("scroll", () => {
        if (window.scrollY > 0) {
            document.getElementById("main-nav").style.opacity = 0.5;
        } else {
            document.getElementById("main-nav").style.opacity = 1;
        }
    });
</script>

<!--First navigation bar-->
<div class="fixed-top">
    <div class="container-fluid" style="background-color: white;">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-3 mb-2">
                <a href="https://www.facebook.com/profile.php?id=100074778947350" target=”_blank” style="text-decoration: none;"><img class="img-fluid" src="Images/other resources/FB icon.png" height="40px" width="40px"><font class="ms-2" style="font-weight: 100; font-size: 12px; color: black;">FOLLOW US ON FACEBOOK</font></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-3 mb-2">
                <a href="index.php"><img class="img-fluid" src="Images/other resources/output-onlinegiftools.gif" width="500px" height="70px" style="object-position: center;"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-3 mb-2">
                <font style="font-weight: 100; font-size: 12px;">CONTACT US</font><br>
                <a class="me-4" style="text-decoration: none; color: black;" href="https://wa.me/94779407273" target=”_blank”><img class="img-fluid" src="Images/other resources/Whatsapp icon.png" height="35px" width="35px"><font class="ms-1" style="font-weight: 200; font-size: 12px;">WhatsApp</font></a>
                <a class="ms-4" style="text-decoration: none; color: black;" href="https://m.me/100074778947350" target=”_blank”><img class="img-fluid" src="Images/other resources/Messenger icon.png" height="35px" width="35px"><font class="ms-1" style="font-weight: 200; font-size: 12px;">Messenger</font></a>
            </div>
        </div>
    </div>
    <!--First navigation bar end-->

    <!--Second navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark"  style="background-image: linear-gradient(to right,#344ceb,#1d4f70);" id="main-nav">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: center;">
                <div class="navbar-nav menu" id="nav-menu">
                    <a class="nav-link" href="index.php" style="width: 200px;">HOME</a>
                    <a class="nav-link" href="aboutUs.php" style="width: 200px;">ABOUT US</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="width: 200px;">
                            PRODUCTS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="moonstone.php">MOONSTONE</a></li>
                            <li><a class="dropdown-item" href="gemstone.php">GEMSTONE</a></li>
                            <li><a class="dropdown-item" href="jewelry.php">JEWELERY</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="services.php" style="width: 200px;">SERVICES</a>
                    <a class="nav-link" href="contactUs.php">CONTACT US</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!--Second navigation bar end-->
