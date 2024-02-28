<?php


/**
 * function that generate a string of random character, of the give lenght
 * 
 * @param int $password_length - the lenght of the string to generate
 * @return string $new_password - the new generated string
 */
function create_password ($password_length) {
    
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $capital_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!#$%&\()*+,-./:;<=>?@[\]^_{|}~';
    $characters = $letters . $capital_letters . $numbers . $symbols;
    
    $new_password = '';
    
    for ($i=0; $i < $password_length; $i++) {
        // get a random number between 0 and the lenght of the character string
        $index = rand(0,strlen($characters));
        // get the character with that index 
        $random_character = $characters[$index];
        // concatenate the characters
        $new_password = $new_password . $random_character;
    };
    
    return $new_password;
    
};

// $user_password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : '';
$user_password_length = $_GET['password-length'] ?? '';

// if the form has been sent 
if (!empty($_GET)) {

    var_dump (create_password(12));


}  


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