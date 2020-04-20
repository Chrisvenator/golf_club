<?php require_once "../../doctrine/orm/bootstrap.php"; ?>
<?php

$debug = false;

$platz = $_POST['postplatz'];
$feld = $_POST['postfeld'];
$score = $_POST['postscore'];
$user = $_POST['postUser'];

if ($platz == "Wien") {
    $platz = " Wien";
}

if ($debug) {
    echo $platz . "; ";
    echo $feld . "; ";
    echo $score . "; ";
    echo "<br>";


//if (isset($_POST['Submit1435345'])) {
    if ($debug) {
        echo "Attempting to instert into Golfplatz<br>";
    }
}

$spiel = new Stats();
//$spiel->setFkGolfplatzID($platz);
//$spiel->setFkGolffeldID($feld);
$spiel->setScore($score);
//$spiel->setFkUserID($user);
//////////////////////////////////
// Überprüfen, ob es Golfplatz/Feld/User schon gibt. wenn nicht, dann wird "Undefined" gespeichert
$dql = "SELECT g FROM golfplatz g";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$stats = $query->getResult();
//    echo $stats . "----";
$istDa = false;
$istDaId = 3;
$istDaName = "Undefined";
/* @var golfplatz $stat */
foreach ($stats as $stat) {
    if ($stat->getName() == $platz) {
        $istDa = true;
        $istDaId = $stat->getID();
        $istDaName = $stat->getName();
    }
}

if ($istDa == true) {
    if ($debug) {
        echo "id: " . $istDaId . "; ";
        echo "platzname: " . $istDaName . "; ";
        echo "Platz gefunden; ";
    }
    $spiel->setFkGolfplatzID($istDaId);
} else {
    if ($debug) {
        echo "Platz nicht gefunden; ";
        echo "; name: " . $platz;
    }
    $spiel->setFkGolfplatzID(3);
}

///////////////////////////
///////////////////////////

$dql = "SELECT g FROM golffeld g";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$stats = $query->getResult();
//    echo $stats . "----";
$istDa2 = false;
$istDaId2 = 8;
$istDaName2 = "Undefined";
/* @var golffeld $stat */
foreach ($stats as $stat) {
    if ($stat->getName() == $feld) {
        $istDa2 = true;
        $istDaId2 = $stat->getID();
        $istDaName2 = $stat->getName();
    }
}

if ($istDa2 == true) {
    if ($debug) {
        echo "id: " . $istDaId2 . "; ";
        echo "platzname: " . $istDaName2 . "; ";
        echo "Feld gefunden; ";
    }
    $spiel->setFkGolffeldID($istDaId2);
} else {
    if ($debug) {
        echo "Keine Feld gefunden";
        echo "; name: " . $platz;
    }
    $spiel->setFkGolffeldID(8);
}

///////////////////////////
///////////////////////////
$dql = "SELECT u FROM user u";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(100);
$users = $query->getResult();

$UserGefunden = false;
$UserID = 14;
/* @var User $finduser */
foreach ($users as $finduser) {
//        echo $user->getUserName();
    if ($finduser->getUserName() == $user) {
        $UserGefunden = true;
        $UserID = $finduser->getId();
    }
}

if ($UserGefunden) {
    if ($debug) {
        echo "User gefunden; ";
    }
    $spiel->setFkUserID($UserID);
} else {
    if ($debug) {
        echo "User nicht gefunden; ";
    }
    $spiel->setFkUserID($UserID);
}
///////////////////////////

try {
    $entityManager->persist($spiel);
} catch (\Doctrine\ORM\ORMException $e) {
    if ($debug) {
        echo $e;
    }
}
try {
    $entityManager->flush();
} catch (\Doctrine\ORM\OptimisticLockException $e) {
    if ($debug) {
        echo $e;
    }
} catch (\Doctrine\ORM\ORMException $e) {
    if ($debug) {
        echo $e;
    }
}
if ($debug) {
    echo "<br>Golfplatz inserted";
}
//} //<------ isstet($_Post[...])
?>