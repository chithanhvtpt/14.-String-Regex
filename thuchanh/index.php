<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase") . '<br>';
    } else {
        echo("String's first character is not uppercase");
    }
}
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('codegym');
