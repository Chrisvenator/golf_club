<?php require_once "../../doctrine/orm/bootstrap.php"; ?>
<?php

$debug = false;

$name = $_POST['postname'];
$lochnummer = $_POST['postlochnummer'];
$parScore = $_POST['postparScore'];
$platz = $_POST['postplatz'];

if ($debug) {
    echo $name . "; ";
    echo $lochnummer . "; ";
    echo $parScore . "; ";
    echo $platz . "; ";
    echo "<br>";


//if (isset($_POST['Submit1435345'])) {
    echo "Attempting to instert into Golfplatz<br>";
}
//    $name = $_POST['name'];
//    $lochnummer = $_POST['lochnummer'];
//    $par = $_POST['parScore'];
//        $platz = $_POST['platz'];
//        echo '<script>alert( "' . json_decode($platz) . '")</script>';
//        echo '<script>alert(document.getElementById("toPHP").value)</script>';
//        echo '<script>console.log("' . json_decode($platz) . '")</script>';

$golffeld = new Golffeld();
$golffeld->setName($name);
$golffeld->setLochNummer($lochnummer);
$golffeld->setParScore($parScore);
//////////////////////////////////
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
    }
    $golffeld->setFkGolfpltzId($istDaId);
} else {
    if ($debug) {
        echo "nichts gefunden";
        echo "; name: " . $platz;
    }
    $golffeld->setFkGolfpltzId(3);
}

///////////////////////////


try {
    $entityManager->persist($golffeld);
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