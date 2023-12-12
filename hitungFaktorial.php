<?php
echo factorial(4);

function factorial(int $number)
{
    static $cache = []; //internal caching memory for speed

    if ($number < 0) {
        throw new \Exception("Angka negatif tidak diperbolehkan untuk menghitung Faktorial");
    }

    // Factorial of 0 is 1
    if ($number === 0) {
        return 1;
    }

    if (isset($cache[$number])) {
        return $cache[$number];
    }

    // Recursion since x! = x * (x-1)!
    $fact = ($number * factorial($number - 1));

    $cache[$number] = $fact;

    return $fact;
}
