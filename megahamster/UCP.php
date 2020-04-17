<?php
require_once "./doctrine/ORM/bootstrap.php";
if (isset($_SESSION['user'])) {
    $dql = "SELECT u FROM user u WHERE b.user = " . $_SESSION['user'];

    $query = $entityManager->createQuery($dql);
    $query->setMaxResults(30);
    $users = $query->getResult();

    foreach ($users as $user) {
        echo "ID: " . $user->getId();
        echo "; Vorname:" . $user->getUserName();
        echo "; Nachname: " . $user->getNachName();
        echo "\n";
        echo "\n";
    }
}