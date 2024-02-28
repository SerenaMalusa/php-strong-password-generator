<?php 

require_once __DIR__ . '/functions.php';

// $user_password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : '';
$user_password_length = $_GET['password-length'] ?? '';
$invalid_class = '';
$invalid_feeback = 'Please enter a number';

// if the form has been sent 
if (!empty($_GET)) {

    // if the password lenght is not a number
    if (!is_numeric($user_password_length)) {

        // set the form to communicate the error
        $invalid_class = 'is-invalid';

    // else if the password length is a number
    } else {

        // redirect the user to the password page
        header ('Location: /php-strong-password-generator/new-password.php');
        
        // create the password of the length chosen by the user
        $user_password = create_password($user_password_length);
    
        // start the session
        session_start();
        // save the new password in the session
        $_SESSION['new_password'] = $user_password;
    
        exit;

    }    

}  

?>