<?php

// Inclusion du fichier de configuration
require(__DIR__.'/inc/config.php');

// Je récupère l'id de l'article demandé
if (isset($_GET['id'])) {
    $authorId = intval($_GET['id']);
}
else {
    $authorId = 0;
}

// Je récupère l'article dont on veut le détail
$postList = $dbData->getPostsByAuthor($authorId);
$author = $dbData->getAuthor($authorId);
// print_r($author);exit; // debug

// Inclusion de la vue à la fin du script
require(__DIR__.'/views/author.php');
