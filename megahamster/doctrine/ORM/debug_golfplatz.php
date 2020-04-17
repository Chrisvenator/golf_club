<?php

require_once "bootstrap.php";

$dql = "SELECT g FROM golfplatz g";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$stats = $query->getResult();

foreach ($stats as $stat) {
    echo "ID: " . $stat->getID();
    echo "; Name:" . $stat->getName();
    echo "; Addresse:" . $stat->getAddresse();
    echo "; Eigentuemer:" . $stat->getEigentuemer();
    echo "\n";
    echo "\n";
}
//echo "ende";
