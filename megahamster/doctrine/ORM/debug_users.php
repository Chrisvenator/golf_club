<?php

require_once "bootstrap.php";

$dql = "SELECT u FROM user u";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$users = $query->getResult();

foreach ($users as $user) {
    echo "ID: " . $user->getId();
    echo "; Username:" . $user->getUserName();
    echo "; Vorname:" . $user->getVorName();
    echo "; Nachname: " . $user->getNachName();
    echo "; Passwort: " . $user->getPassword();
    echo "\n";
    echo "\n";
}