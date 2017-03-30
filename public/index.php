<?php

require_once __DIR__ . '/../vendor/autoload.php';

$db = new \omdb\DbManager();
$searchManager = new \omdb\SearchManager();

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../tmp',
));


$data = array();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $searchManager->setTitle($_POST['title']);
    $data = $searchManager->getList();
}


echo $twig->render('index.html.twig', array('data' => $data)); // traduction de php dans twig