<?php

function createPassword($characters_number) {

$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890!"$%&/()=?.';
$newPassword = '';



while(strlen($newPassword) < $characters_number) {
    $random = $characters[rand(0, strlen($characters)-1)];
    $newPassword .= $random;
};

return $newPassword;

};

    
if (isset($_GET['passwordLength'])) {
    $newPassword = createPassword($_GET['passwordLength']);
};


?>