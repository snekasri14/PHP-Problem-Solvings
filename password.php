// Write a program to generate a random password of a specified length

<?php
function RandomPassword($length) {
    $pass= "abcd12345@+-";
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $pass;
    }
    return $password;
}
$passwordLength = 5; 
$randomPassword = RandomPassword($passwordLength);
echo "RandomPassword: " . $randomPassword;
?>

