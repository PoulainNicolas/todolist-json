<?php

// il lit le contenu du fichier json, et affiche chaque entrée dans 
// la bonne zone ("A Faire" ou "Archive") avec le contenu html nécessaire pour avoir une checkbox.

// $file='todo.json';

// $json_data=json_decode($file, true);
// var_dump($json_data);

    //Récupération du fichier JSON
    $content = file_get_contents('todo.json');
    // Transformer le resultat sous forme de tableau
    $str = json_decode($content,true);
    // print_r($str);


?>