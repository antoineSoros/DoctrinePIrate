<?php
include '../bootstrap.php';
use model\Pirate;
use model\Bateau;

$queryP = $entityManager->createQuery('select p from model\Pirate p');
$resultP = $queryP->getResult();
$queryB = $entityManager->createQuery('select b,p from model\Bateau b join b.pirates p ');
$resultB = $queryB->getResult();

echo $twig->render('listing_bateaux.twig',['bateaux'=>$resultB]);
echo $twig->render('listing_pirates.twig',['tab'=>$resultP]);