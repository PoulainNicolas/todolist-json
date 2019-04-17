<?php
    $newtask= $_POST["newtask"];

    // sanitisation

    if(isset($_POST['newtask']) || !empty($_POST['newtask'])){
    $result=filter_input(INPUT_POST, 'newtask', FILTER_SANITIZE_STRING);

        if($result !== null && $result !== false){

            $file='todo.json';

            // ouvrir le fichier pour avoir le contenu existant

            $current = file_get_contents($file);
            var_dump(json_decode($current));

            // ajouter un élément au fichier
            $current .= $newtask;
            var_dump($newtask);

            $json = json_encode($current);
            var_dump($json);
            // écrire le contenu dans le fichier
            // 
            file_put_contents($file, $current);

            // Header('Location:index.php');

          
        }
    }
?>