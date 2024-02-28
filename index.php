<?php

    var_dump($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>

     <!-- characters and viewport tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO tags -->
    <meta name="author" content="Serena Malusà" />
    <meta name="description" content="php exercise">

    <!-- title and icon -->
    <title>PHP Strong Password Generator</title>
    <link rel="icon" href="./imgs/logo-small.ico">

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">

        <h1>Strong password generator</h1>
        <form class="card mt-5 p-3" method="GET">

            <div class="input-group">
                <input type="text" class="form-control" placeholder="write here the lenght of the password" name="password-length">
                <button class="btn btn-outline-primary">Button</button>
            </div>

        </form>
    </div>

    
</body>
</html>