<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Remember - Multipurpose bootstrap site template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Your page description here"/>
    <meta name="author" content=""/>

    <!-- css -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="css/prettyPhoto.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Theme skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet"/>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"/>
    <link rel="shortcut icon" href="ico/favicon.png"/>

    <!-- =======================================================
      Theme Name: Remember
      Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

<?php
session_start();
?>

<div id="wrapper">
    <!-- start header -->
    <header>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <ul class="topmenu">
                            <li><a href="#">Home</a> &#47;</li>
                            <li><a href="#">Terms</a> &#47;</li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="span6">

                        <ul class="social-network">
                            <li><a href="https://www.facebook.com/" data-placement="bottom" title="Facebook"><i
                                    class="icon-circled icon-bglight icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" data-placement="bottom" title="Twitter"><i
                                    class="icon-circled icon-bglight icon-twitter"></i></a></li>
                            <li><a href="https://at.linkedin.com/" data-placement="bottom" title="Linkedin"><i
                                    class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                            <li><a href="https://www.pinterest.at/" data-placement="bottom" title="Pinterest"><i
                                    class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                            <li>
                                <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                   data-placement="bottom" title="Google +"><i
                                        class="icon-circled icon-google-plus icon-bglight"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">


            <div class="row nomargin">
                <div class="span4">
                    <div class="logo">
                        <h1><a href="index.html"><i class="icon-tint"></i> APFC</a></h1>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="active">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Pages <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.php">About us</a></li>
                                            <!--<li><a href="pricingbox.html">Pricing boxes</a></li>-->
                                            <li><a href="404.php">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Top Scorer <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="http://www.rorymcilroy.com/">Rory Mcilroy</a></li>
                                            <li><a href="https://www.golfmagazin.de/profil/herren/jon-rahm/">Jon
                                                Rham</a></li>
                                            <li>
                                                <a href="https://www.pgatour.com/players/player.36689.brooks-koepka.html">Brooks
                                                    Koepka</a></li>
                                            <li><a href="https://www.justinthomasgolf.com/">Justin Thomas</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#contact_us">Contact </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="../../megahamster/UCP.php">
                                            <?php
                                            if (isset($_SESSION['user'])) {
                                                echo $_SESSION['user'];
                                            } else {
                                                echo "Account";
                                            }
                                            ?><i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../../megahamster/einloggen.php">Login</a></li>
                                            <li><a href="../../megahamster/registrieren.php">Sign Up</a></li>
                                            <li><a href="../../megahamster/UCP.php">UCP</a></li>
                                            <?php
                                            if (isset($_SESSION['user'])) {
                                                ?>
                                            <form method="post">
                                                <input type="submit" value="Ausloggen" name="logout"/>
                                            </form>
                                            <?php
                                            }
                                            if (isset($_POST['logout'])) {
                                                session_destroy();
                                                ?>
                                            <meta http-equiv="refresh"
                                                  content="0;url=http://chrisvenator.hd/Golf_Club_Arnold_Palmer/Remember/index.html"/>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <section id="content">
        <div class="container">
            <div class="row">

                <div class="span6">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                        et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                        est Lorem ipsum dolor sit amet.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                        et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                        est Lorem ipsum dolor sit amet.
                    </p>

                </div>

                <div class="span6">
                    <iframe src="#" width="500" height="281" seamless></iframe>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container" id="contact_us">
            <div class="row">
                <div class="span4">
                    <div class="widget">
                        <div class="footer_logo">
                            <h3><a href="index.html"><i class="icon-tint"></i> APFC</a></h3>
                        </div>
                        <address>
                            <strong>APFC</strong><br>
                            Rennweg 89B, Golffield 90/20/3<br>
                            Vienna 1030
                            <Austria></Austria>
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                            <i class="icon-envelope-alt"></i> arnold-palmer-golfclub@gmail.com
                        </p>
                    </div>
                </div>
                <div class="span4">
                    <div class="widget">
                        <h5 class="widgetheading">Browse pages</h5>
                        <ul class="link-list">
                            <li><a href="./index.php">Main Site</a></li>
                            <li><a href="../../megahamster/UCP.php">UCP</a></li>
                            <li><a href="../../megahamster/insert/admin_insert/insert_golfplatz.php">create
                                golfplatz</a></li>
                            <li><a href="../../megahamster/insert/admin_insert/insert_golffeld.php">create golffeld</a>
                            </li>
                            <li><a href="../../megahamster/insert/admin_insert/insert_spiel.php">create new game</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="copyright">
                            <p><span>&copy; APFC Inc. All right reserved</span></p>
                        </div>

                    </div>

                    <div class="span6">
                        <div class="credits">
                            Created by <a href="#">Christopher Scherling</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/toucheffects.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/animate.js"></script>

<!-- Template Custom JavaScript File -->
<script src="js/custom.js"></script>

</body>

</html>
