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
        $index = rand(0, strlen($characters) - 1);
        // get the character with that index 
        $random_character = substr($characters, $index, 1);
        // concatenate the characters
        $new_password .= $random_character;
    };
    
    return $new_password;
    
};

?>