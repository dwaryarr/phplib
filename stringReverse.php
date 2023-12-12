<?php

echo stringReverse('Hello World!');

function stringReverse(string $string)
{
    $string = trim($string); // Hilangkan spasi di awal dan akhir string

    $characters = str_split($string);

    $reversedCharacters = [];

    for ($i = (count($characters) - 1); $i >= 0; $i--) {
        $reversedCharacters[] = $characters[$i];
    }

    return implode('', $reversedCharacters);
}
