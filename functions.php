<?php

function createPassword($passwordLength) {

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890!"$%&/()=?.';
$newPassword = '';



while(strlen($newPassword) < $passwordLength) {
    $random = $characters[rand(0, strlen($characters)-1)];
    $newPassword .= $random;
};



session_start();

$_SESSION['newPassword'] = ($newPassword);

return true;

};



?>