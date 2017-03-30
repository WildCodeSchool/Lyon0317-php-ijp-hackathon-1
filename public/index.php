<?php

require_once __DIR__ . '/../vendor/autoload.php';

$bdd = new \omdb\DbManager();
$searchManager = new \omdb\SearchManager($bdd);

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../tmp',
));

echo $twig->render('index.html.twig');