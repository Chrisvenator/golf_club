<?php

require_once "bootstrap.php";

$ortsName = $argv[1];
$neuOrtName = $argv[2];


/* @var Ort $ort */
$ort = $entityManager->getRepository('ort')
    ->findOneBy(array('ort' => $ortsName));


//echo $ort->getId();
echo "Alt: " . $ort->getOrt();

$ort->setOrt($neuOrtName);
$entityManager->flush();

echo "\nneu: " . $ort->getOrt();