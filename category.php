<?php

// Inclusion du fichier de configuration
require(__DIR__.'/inc/config.php');

// Je récupère l'id de l'article demandé

if (isset($_GET['id'])) {
    $categoryId = intval($_GET['id']);
}
else {
    $categoryId = 0;
}

// Je récupère l'article dont on veut le détail
$postList = $dbData->getPostsByCategory($categoryId);
$category = $dbData->getCategory($categoryId);
// print_r($author);exit; // debug

// Inclusion de la vue à la fin du script
require(__DIR__.'/views/category.php');
