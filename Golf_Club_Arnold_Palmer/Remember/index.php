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

<body> <?php require_once "../../megahamster/doctrine/orm/bootstrap.php"; ?>

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

    <!-- section intro -->
    <section id="intro">
        <div class="intro-content">
            <h2>Welcome to APFC!</h2>
            <h3>The official Arnold Palmer Golf Fan Club</h3>
            <div>
                <a href="#content" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </section>
    <!-- /section intro -->

    <section id="content">
        <div class="container">


            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="icon">
                                    <span class="badge badge-info badge-circled">1</span>
                                    <i class="ico icon-eye-open icon-5x"></i>
                                </div>
                                <div class="text">
                                    <h4><strong>Show stats</strong></h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am anumat lib
                                        persum sea facilisis.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="icon">
                                    <span class="badge badge-success badge-circled">2</span>
                                    <i class="ico icon-search icon-5x"></i>
                                </div>
                                <div class="text">
                                    <h4><strong>Track Stats</strong></h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="icon">
                                    <span class="badge badge-warning badge-circled">3</span>
                                    <i class="ico icon-group icon-5x"></i>
                                </div>
                                <div class="text">
                                    <h4><strong>compete with friends</strong></h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="icon">
                                    <span class="badge badge-important badge-circled">4</span>
                                    <i class="ico icon-file icon-5x"></i>
                                </div>
                                <div class="text">
                                    <h4><strong>Export stats as PDF</strong></h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                    </p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="span12">
                    <div class="cta-box">
                        <div class="row">
                            <div class="span8">
                                <div class="cta-text">
                                    <h2>Special price in very <span>limited</span> times</h2>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="cta-btn">
                                    <a href="#" class="btn btn-color">Call Action <i class="icon-caret-right"></i></a>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="offer">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span12">
                            <div class="aligncenter">
                                <h3>Our features and pricing</h3>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, labores dolorum scriptorem eum an, te quodsi sanctus
                                    neglegentur eam, et lorem persecuti conclusionemque mei.
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="span3">
                            <h5>Choose package and start grow</h5>
                            <p>
                                Per an putent audiam adolescens, mel ceteros fierent democritum te. No ubique malorum
                                euismod usu.
                            </p>
                            <p>
                                Movet facilis democritum ea quo. Est ei illum consulatu accommodare, nam dicta expetenda
                                suavitate ad.
                            </p>
                        </div>

                        <div class="span3">
                            <div class="pricing-box-plain">
                                <div class="heading">
                                    <h4>Basic</h4>
                                    <span>Free</span>
                                </div>
                                <div class="desc">
                                    <ul>
                                        <li>Show Stats</li>
                                        <li>Track your Stats</li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <a href="#" class="btn btn-inverse">Sign Up</a>
                                </div>
                            </div>
                        </div>

                        <div class="span3">
                            <div class="pricing-box-plain">
                                <div class="heading">
                                    <h4>Premium</h4>
                                    <span>$19 / Month</span>
                                </div>
                                <div class="desc">
                                    <ul>
                                        <li>Show Stats</li>
                                        <li>Track your Stats</li>
                                        <li>Compete with friends</li>
                                        <li>Export as PDF</li>
                                        <li>2 free Tournament entries</li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <a href="#" class="btn btn-inverse">Sign Up</a>
                                </div>
                            </div>
                        </div>

                        <div class="span3">
                            <div class="pricing-box-plain">
                                <div class="heading">
                                    <h4>Tournament</h4>
                                    <span>$49 / Month</span>
                                </div>
                                <div class="desc">
                                    <ul>
                                        <li>Show Stats</li>
                                        <li>Track your Stats</li>
                                        <li>Compete with friends</li>
                                        <li>Export as PDF</li>
                                        <li>Export as XML</li>
                                        <li>Embedd in your OWN Website</li>
                                        <li>Unlimited free tournament entries</li>
                                    </ul>
                                </div>
                                <div class="action">
                                    <a href="#" class="btn btn-color">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="works">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h3>Top Scorer</h3>
                    <div class="row">

                        <div class="grid cs-style-3">
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/1.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>Rory Mcllroy</h3>
                                            <p>
                                                <a href="img/dummies/works/Rory_Mcllory.jpg"
                                                   data-pretty="prettyPhoto[gallery1]"
                                                   title="Score: 9.4474"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <!--                                                <a href="http://www.rorymcilroy.com/career.html"><i-->
                                                <!--                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>-->
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/2.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>John Rahm</h3>
                                            <p>
                                                <a href="img/dummies/works/Jon_Rahm.png"
                                                   data-pretty="prettyPhoto[gallery1]"
                                                   title="John Rahm: 8.4798 Points"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <!--                                                <a href="http://www.rorymcilroy.com/career.html"><i-->
                                                <!--                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>-->
                                            </p></figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/3.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>Brooks Koepka</h3>
                                            <p>
                                                <a href="img/dummies/works/Brooks_Koepka.jpg"
                                                   data-pretty="prettyPhoto[gallery1]"
                                                   title="Score: 7.7292"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <!--                                                <a href="http://www.rorymcilroy.com/career.html"><i-->
                                                <!--                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>-->
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div><img src="img/dummies/works/4.jpg" alt=""></div>
                                        <figcaption>
                                            <h3>Justin Thomas</h3>
                                            <p>
                                                <a href="img/dummies/works/Justin_Thomas.jpg"
                                                   data-pretty="prettyPhoto[gallery1]"
                                                   title="Score: 7.4113"><i
                                                            class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                                                <!--                                                <a href="http://www.rorymcilroy.com/career.html"><i-->
                                                <!--                                                            class="icon-file icon-circled icon-bglight icon-2x active"></i></a>-->
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
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
                            <li><a href="#">Main Site</a></li>
                            <li><a href="../web/index.php">UCP</a></li>
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
