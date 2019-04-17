<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todolist</title>

    <script>
    let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let myObj = JSON.parse(this.responseText);
                document.getElementById("todo").innerHTML = myObj.name;
                }
            };
            xmlhttp.open("GET", "todo.json", true);
            xmlhttp.send(); 
    
    </script>

</head>
<body>
    <h1>Todolist -Json</h1>
        <h2>A faire</h2>
            <form>
                <input type="checkbox" id='todo'>
            </form>

        <h2>Archives</h2>
            <form action="">

            </form>

        <h2>Ajouter une tâche</h2>
            <form>
                <div>
                    <input type="text" name="newtask">
                </div>
                <button type="submit">Enregistrer</button>
            </form>
</body>
</html>