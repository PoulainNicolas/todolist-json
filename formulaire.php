<?php
// je récupère ce que j'encode dans l'input 'newtask'
    $newtask = $_POST['newtask'];
    echo $newtask;

// sanitisation

$options = array(
    $newtask => FILTER_SANITIZE_STRING
 );

 if(isset($newtask) AND !empty($newtask)){

    $result = filter_input_array(INPUT_POST, $options); 
    if ($result != null AND $result != FALSE){

// récupérer contenu json dans une variable
    $json=file_get_contents('todo.json');

// decoder json pour convertir json string en données php

    $decode=json_decode($json, true);
    // var_dump($decode);

    // création d'un array
    $newarray = array(
        'task' => $_POST['newtask'],
        'archived' => 0
    );

    $decode[] = $newarray;

    $encode = json_encode($decode);
    // var_dump($encode);

    file_put_contents('todo.json', $encode);

    header('Location: index.php');


 }
}


?>