<?php 

// start the session
session_start();

// var_dump($_SESSION['new_password']);

?>

<!DOCTYPE html>
<html lang="it">
<head>

     <!-- characters and viewport tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO tags -->
    <meta name="author" content="Serena Malusà" />
    <meta name="description" content="php exercise">

    <!-- title and icon -->
    <title>PHP Generated Strong Password</title>
    <link rel="icon" href="./imgs/logo-small.ico">

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container">

        <h1 class="mt-5">Strong password generator</h1>

            <div class="card p-3 mt-5">
                <h6>Your new password is: <br>
                <?php echo $_SESSION['new_password'] ?></h6>
            </div>

    </div>

</body>
</html>