<?php

require_once __DIR__ . '/../vendor/autoload.php';

$db = new \omdb\DbManager();
$searchManager = new \omdb\SearchManager();
$keywordManager = new \omdb\KeywordManager($db);

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../tmp',
));

$data = array();
$index = true; // Show Jumbotron

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $searchManager->setTitle($_POST['title']);
    $data = $searchManager->getList();
    $index = false; // Show list
//
    $keyword = $keywordManager->findKeyword($_POST['title']);
    if ($keyword['keyword'] != "") {
        $keywordManager->setNumber($keyword['numbercount']+1);
        $keywordManager->updateKeyword($keyword['id']);
    } else {
        $keywordManager->setKeyword($_POST['title']);
        $keywordManager->setNumber(1);
        $keywordManager->addKeyword();
    }
}

echo $twig->render('index.html.twig', array('data' => $data, 'index' => $index)); // traduction de php dans twig