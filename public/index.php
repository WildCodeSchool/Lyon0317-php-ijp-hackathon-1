<?php

require_once __DIR__ . '/../vendor/autoload.php';

$db = new \omdb\DbManager();
$searchManager = new \omdb\SearchManager($db);
$keywordManager = new \omdb\KeywordManager($db);

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../tmp',
));

$data = array();    // Définition de $data
$index = true;      // Affichage de la page "index"
$list  = $keywordManager->listKeyword();

if($_SERVER['REQUEST_METHOD'] == "POST")                    // Si "submit" (envoi de formulaire)
{
    $searchManager->setTitle(trim($_POST['title']));            // On définit le mot-clé sans espace avant/après ( via trim() )
    $searchManager->setYear(trim($_POST['year']));
    $searchManager->setType(trim($_POST['type']));
    $data = $searchManager->getList();                          // On récupère dans $data le function getList() qui retourne la réponse de l'API
    $index = false;                                             // Affichage de la liste

    // Gestion mot-clé
    $keyword = $keywordManager->findKeyword(trim($_POST['title'])); // Recherche du mot-clé dans la BDD grâce à la function findKeyword($word)

    if ($keyword['keyword'] != "") {                            // Si le mot-clé recherché existe déjà
        $keywordManager->setNumber($keyword['numbercount']+1);      // On définit le nouveau nombre (+1)
        $keywordManager->updateKeyword($keyword['id']);             // Mise à jour avec la paramètre $id
    } else {                                                    // Si le mot-clé n'existe pas
        if($data != false){
            $keywordManager->setKeyword(trim($_POST['title']));         // On définit le mot-clé sans espace avant/après ( via trim() )
            $keywordManager->setNumber(1);                              // On définit le numbercount par défaut à 1
            $keywordManager->addKeyword();// Ajout du mot-clé
        }
    }
}

echo $twig->render('index.html.twig', array('data' => $data, 'index' => $index, 'list' => $list));   // Appel de Twig avec les "paramètres" $data & $index