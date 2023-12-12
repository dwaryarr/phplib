<?php

echo cekAngkaPrima(7);

function cekAngkaPrima(int $angka)
{
    if ($angka === 2) {
        return true;
    }

    if ($angka % 2 === 0 or $angka < 2) {
        return false;
    }

    $i = 3;
    while ($i <= sqrt($angka)) {
        if ($angka % $i === 0) {
            return false;
        }
        $i += 2;
    }

    return true;
}
