<?php

/**
 * @param int $length
 * @param bool $numbers
 * @param bool $smallCase
 * @param bool $largeCase
 * @return string
 */
function generatePassword(int $length = 10, bool $numbers = false, bool $smallCase = false, bool $largeCase = false)
{
    $characters = '';

    if ($numbers == "y") {
        $characters .= '0123456789';
    }

    if ($smallCase == "y") {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }

    if ($largeCase == "y") {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if (!empty($characters)) {
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $message = "Password: " . $randomString;
        return $message;

    } else {
        echo "Error: At least one option must be selected";
    }

}

$length = readline("Length of your password: ");
if (!is_numeric($length)) {
    echo $length . " is not number! ";
    echo "Input must be number!\n";
    exit;
}
$numbers = readline("Do you want numbers? y/n ");
$smallCase = readline("Do you want lowercase letters? y/n ");
$largeCase = readline("Do you want uppercase letters? y/n ");

echo generatePassword($length, $numbers, $smallCase, $largeCase), "\n";


