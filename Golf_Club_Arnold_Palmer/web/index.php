<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sharp Profile Widget A Flat Responsive Widget Template :: w3layouts</title>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link href="css/font-awesome.min.css" rel='stylesheet' type='text/css'/>
    <link href="//fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Sharp Profile Widget  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"/>
</head>
<body>
<?php
session_start();
require_once "../../megahamster/doctrine/orm/bootstrap.php";
if (!isset($_SESSION['user'])) { ?>
    <meta http-equiv="refresh" content="0;url=http://chrisvenator.hd/megahamster/einloggen.php"/>
<?php }

$uName = $_SESSION['user'];

$dql = "SELECT u FROM user u";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(100);
$users = $query->getResult();

$currentUser = [];
$UserGefunden = false;
foreach ($users as $user) {
//        echo $user->getUserName();
    if ($user->getUserName() == $uName) {
        $UserGefunden = true;
        $currentUser = $user;
    }
}

if ($UserGefunden == true) {
//    echo "; " . $currentUser->getId() . " ;";
    $dql = "SELECT s FROM stats s WHERE s.fk_User_ID = " . $currentUser->getId();

    $query = $entityManager->createQuery($dql);
    $query->setMaxResults(100);
    $stats = $query->getResult();

    $totalShots = 0;
    $holeInOnes = 0;
    $games = sizeof($stats);
//    echo "Found results: " . $games;

    /* @var Stats $stat */
    foreach ($stats as $stat) {
        $totalShots += $stat->getScore();
        if ($stat->getScore() == 1) {
            $holeInOnes++;
        }
    }

}

?>
<h1>Profil</h1>
<div class="content-agile" id="HTMLtoPDF">
    <div class="profile-agileinfo">
        <a href="../Remember/index.php">Home</a>
        <div class="pr-inner">
            <img src="images/p1.jpg" alt=" "/>
            <h2><?php echo $_SESSION['user'] ?></h2>
            <h3>Web Developer</h3>
            <div class="profile-bottom-w3-part2">
                <div class="profile-bottom-w3-part2-left">
                    <h4><?php echo $totalShots ?></h4>
                    <h5>Shots</h5>
                </div>
                <div class="profile-bottom-w3-part2-middle">
                    <h4><?php echo $holeInOnes ?></h4>
                    <h5>Hole in ones</h5>
                </div>
                <div class="profile-bottom-w3-part2-right">
                    <h4><?php echo $games ?></h4>
                    <h5>Games</h5>
                </div>

            </div>
        </div>
        <div class="mail">
            <div class="mail-left">
                <p><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><a href="mailto:info@example.com">info@example.com</a>
                </p>

            </div>
            <div class="contact-right">
                <p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+123456789
                <p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="login-left">
        <h3>Played Games:</h3>
        <ul>
            <?php
            $i = 0;
            $dql = "SELECT s FROM stats s WHERE s.fk_User_ID = " . $currentUser->getId();

            $query = $entityManager->createQuery($dql);
            $query->setMaxResults(30);
            $spiele = $query->getResult();


            /* @var Stats $spiel */
            foreach ($spiele as $spiel) {
                $i++;
                /* @var Golffeld $golffeld */
                $dql = "SELECT s FROM golffeld s WHERE s.id = " . $spiel->getFkGolffeldID();

                $query = $entityManager->createQuery($dql);
                $query->setMaxResults(100);
                $golffeld = $query->getResult();


                /* @var Golfplatz $golfplatz */
                $dql = "SELECT s FROM golfplatz s WHERE s.id = " . $spiel->getFkGolfplatzID();

                $query = $entityManager->createQuery($dql);
                $query->setMaxResults(100);
                $golfplatz = $query->getResult();
                /* @var Golfplatz $golfp */
                /* @var Golffeld $golff */
                foreach ($golffeld as $golff) {
                    foreach ($golfplatz as $golfp) {

                        if ($i % 2 == 0) {
                            ?>
                            <li><a class="fb"><i></i><?php
                                    echo $golfp->getName() . " - " . $golff->getName() . " - Score: " . $spiel->getScore();
                                    ?>
                                </a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li><a class="goog"><i></i><?php
                                    echo $golfp->getName() . " - " . $golff->getName() . " - Score: " . $spiel->getScore();
                                    ?>
                                </a>
                            </li>
                            <?php
                        }
                    }
                }
            } ?>
        </ul>
    </div>


    <div class="clear"></div>
</div>

<a href="#" id="button" onclick="HTMLtoPDF()">Download as PDF</a>

<script src="../../Golf_Club_Arnold_Palmer/ExportAsPDF/js/jspdf.js"></script>
<script src="../../Golf_Club_Arnold_Palmer/ExportAsPDF/js/jquery-2.1.3.js"></script>
<script src="../../Golf_Club_Arnold_Palmer/ExportAsPDF/js/pdfFromHTML.js"></script>

</body>
</html>