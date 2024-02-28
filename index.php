<?php

require_once __DIR__ . "/partials/init.php";
require_once __DIR__ . "/partials/functions.php";

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

        <h1 class="mt-5">Strong password generator</h1>
        <form class="mt-5 p-3" method="GET">

            <div class="row">
                
                <div class="col-10">
        
                    <input autofocus type="text" class="form-control <?= $invalid_class ?>" placeholder="write here the lenght of the password" name="password-length">
                    <div class="invalid-feedback col-6">
                        <?= $invalid_feeback ?>
                    </div>
        
                </div>
                <div class="col-auto">
        
                    <button class="btn btn-primary">Button</button>
        
                </div>            

            </div>

        </form>

        <!-- <?php if(!empty($_GET)) { ?>
            <div class="card p-3 mt-5">
                <h6>Yor new password is: <br>
                <?php echo $user_password ?></h6>
            </div>
        <?php } ?> -->
    </div>

    
</body>
</html>