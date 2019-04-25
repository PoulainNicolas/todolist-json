<?php
    require 'contenu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>todolist</title>

   

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Todolist -Json</h1>           
            </div>
       </div>
    
    
        <h2>A faire</h2>
            <form action="update.php" method="POST">
                <div class="group-control">
                    <?php foreach($str as $value){ if($value['archived'] == 0){
                        echo '<p><input type="checkbox" id="newtask" value="'. $value['task'] .'"name="archived[]"> '. $value['task'].'<p>';
                    }}?>
                </div>
                <button type="submit" class="btn btn-dark">Archiver</button>

            </form>

        <h2>Archives</h2>
            <?php foreach($str as $value){ if($value['archived'] == 1){
                echo '<p><del>'.$value['task'].'</del></p>';}
            } ?>

        <h2>Ajouter une tâche</h2>
            <form action="formulaire.php" method="POST">
                <div>
                    <input type="text" name="newtask">
                </div>
                <button type="submit" class="btn btn-dark">Enregistrer</button>
            </form>
    </div>

 <!-- <script>

    // ajax envoie les newtask dans todo.json??NON c'est formulaire.php qui fait ça
    // 
    function getData(str){
        // str variable holds the content of the input field
        // vérifier que str != vide
        if(str.length == 0){
            document.getElementsById('todo').innerHTML = '';
            return;
        }else{
            // Create the function to be executed when the server response is ready
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Use the JavaScript function JSON.parse() to convert text into a JavaScript object
                // let myObj = JSON.parse(this.responseText);
                // document.getElementById("todo").innerHTML = myObj.name;
                document.getElementById('todo').innerHTML= this.responseText;
                }
            };
            // Send the request off to a PHP file (formulaire.php) on the server
            // vers php ou json? 
            xmlhttp.open("GET", "formulaire.php?q=" + str, true);
            xmlhttp.send();
        }
    }
    
    </script> -->

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>