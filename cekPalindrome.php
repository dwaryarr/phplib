<?php

echo cekPalindrome("No Melon, No Lemon");

function cekPalindrome(string $string, bool $caseInsensitive = true)
{
    $string = trim($string); // Hilangkan spasi di awal dan akhir string


    if (empty($string)) {
        return false; // Kembalikan false untuk string kosong
    }

    if ($caseInsensitive) {
        $string = strtolower($string);
        // Mengubah string menjadi huruf kecil untuk pengecekan yang tidak peka huruf besar kecil
    }

    $characters = str_split($string);

    for ($i = 0; $i < count($characters); $i++) {
        if ($characters[$i] !== $characters[count($characters) - ($i + 1)]) {
            return false;
        }
    }

    return true;
}
