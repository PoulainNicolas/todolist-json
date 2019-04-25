<?php
// Récupération de l'item 
foreach($_POST['archived'] as $value){
    
    // Lecture du fichier
    $json = file_get_contents('todo.json');
    // transformation en array
    $decode = json_decode($json,true);
    foreach($decode as $key => $val){
        if($val['task'] === $value){
            $decode[$key]['archived'] = 1;
        }
    }
    $encode = json_encode($decode);
    // Vérifier si tout s'est bien passé!
    if(file_put_contents('todo.json',$encode)){
        header('Location:index.php');
    }
}

?>