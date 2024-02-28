<?php 

require_once __DIR__ . '/functions.php';

// $user_password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : '';
$user_password_length = $_GET['password-length'] ?? '';

// if the form has been sent 
if (!empty($_GET)) {

    // redirect the user to the password page
    header ('Location: /php-strong-password-generator/new-password.php');

    // create the password of the length chosen by the user
    $user_password = create_password($user_password_length);

    exit;

}  

?>