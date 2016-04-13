<?php
use Doctrine\Common\Util\Debug;

// list_bugs.php
require_once "bootstrap.php";

/*
$product = $entityManager->getRepository('Product')
    ->findOneBy(array('name' => "TEST"));

print_r($product);
*/

/*
$bug = $entityManager->getRepository('Bug')
    ->findOneBy(array('id' => 1));
Debug::dump($bug); exit;
*/

$bugs = $entityManager->getRepository('Bug')
    ->findBy(array('status' => 'CLOSE'));
//Debug::dump($bugs); exit;

foreach ($bugs as $bug) {
    echo " ".$bug->getId()." ".$bug->getStatus()." \n";
}
