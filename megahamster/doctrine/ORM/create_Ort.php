<?php

require_once "bootstrap.php";

$ortsName = $argv[1];
$ort = new Ort();
$ort->setOrt($ortsName);

$entityManager->persist($ort);
$entityManager->flush();

echo "Ort erstellt";