<?php

require_once "bootstrap.php";

$dql = "SELECT g FROM golffeld g";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$stats = $query->getResult();

/* @var golffeld $stat */

foreach ($stats as $stat) {
    echo "ID: " . $stat->getID();
    echo "; Name:" . $stat->getName();
    echo "; Lochnummer:" . $stat->getLochNummer();
    echo "; PAR-Score:" . $stat->getParScore();
    echo "; FK-Golfplatz-ID:" . $stat->getFkGolfpltzId();
    echo "\n";
    echo "\n";
}
//echo "ende";
