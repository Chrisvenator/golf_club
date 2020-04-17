<?php

require_once "bootstrap.php";

$dql = "SELECT s FROM stats s";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$stats = $query->getResult();

foreach ($stats as $stat) {
    echo "ID: " . $stat->getId();
    echo "; User ID:" . $stat->getFkUserID();
    echo "; Golffeld ID:" . $stat->getFkGolffeldID();
    echo "; Score: " . $stat->getScore();
    echo "\n";
    echo "\n";
}