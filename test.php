<?php
include './bootstrap.php';
use model\Pirate;
use model\Bateau;



$p1 = new Pirate();
$p2 = new Pirate();
$p3 = new Pirate();
$p4 = new Pirate();
$b1 = new Bateau();
$b2 = new Bateau();
$p1->setBlase('pilou')->setButin(200)->setPicture("assets/p1.png");
$p2->setBlase('JoJo')->setButin(300)->setPicture("assets/p2.png");
$p3->setBlase('BeberT')->setButin(30)->setPicture("assets/p3.png");
$p4->setBlase('Boulie')->setButin(3210)->setPicture("assets/p4.png");
$b1->setNom('Clypso')->setImage("assets/b1.jpeg");
$b1->addPirates($p1,$p2);
$b2->setNom('RainbowWarrior')->setImage("assets/b2.jpg");
$b2->addPirates($p3,$p4);
$pirates = [$p1,$p2,$p3,$p4];
foreach ($pirates as $item){
    $entityManager->persist($item);
}

$bateaux=[$b1,$b2];
foreach ($bateaux as $item){
    $entityManager->persist($item);
}
$entityManager->flush();

//$repo = $entityManager->getRepository('model\Pirate');
//$tab = $repo->findBy(['blase'=>'pilou']);
//print_r($tab);
//$tab1 = $repo->findBy(['butin'=> 300]);
//print_r($tab1);
//$item = $repo->findOneBy(['butin'=>300]);
//print_r($item);
//$item2 = $repo->findByButin(300);
//print_r($item2);
//$item3 = $repo->findOneByButin(300);
//print_r($item2);


/**
$query = $entityManager->createQuery('select p from model\Pirate p');
$result = $query->getResult();
//var_dump ($result);
$query1 = $entityManager->createQuery('select p from model\Pirate p where p.butin= 300');
$result1 = $query1->getResult();
//var_dump ($result1);
$query2 = $entityManager->createQuery('select p from model\Pirate p where p.butin > 300');
$result2 = $query2->getResult();
//var_dump ($result2);
//$query3 = $entityManager->createQuery('select p from model\Pirate p where p.butin < 300');
//$result3 = $query3->getSingleResult();//renvoi erreur si plusieur resultat possible
//var_dump ($result3);
$query4 = $entityManager->createQuery('select p from model\Pirate p where p.butin > 300');
$result4 = $query4->getOneOrNullResult();
//var_dump ($result4);
$query5 = $entityManager->createQuery('select p.blase, p.butin from model\Pirate p ');
$result5 = $query5->getScalarResult();
//var_dump ($result5);
$query6 = $entityManager->createQuery('select b from model\Bateau b where b.nom like :nom');
$query6->setParameter(':nom','Clypso');
$result6 = $query6->getSingleResult();
var_dump ($result6);
$query7 = $entityManager->createQuery('select b from model\Bateau b join b.pirates p where b.nom like :nom');
$query7->setParameter(':nom','Clypso');
$result6 = $query7->getSingleResult();
var_dump ($result7);**/
//$pers = new stdClass();
//$pers->nom="Jamie";
//$pers->prenom="leboiteux";
//$pers->dob = new DateTime('1723-10-21');
//
//$pers1= new stdClass();
//$pers1->nom="Jean";
//$pers1->prenom="moineau";
//$pers1->dob = new DateTime('1809-12-01');
//
//$pers2= new stdClass();
//$pers2->nom="Nicolas";
//$pers2->prenom="Grotte";
//$pers2->dob = new DateTime('1950-05-27');
//
//$tab=[$pers,$pers1,$pers2];
//echo $twig->render('index.twig',['pirate'=>$pers, 'tab'=>$tab]);
