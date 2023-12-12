<?php

echo bulanTerbilang(01);

function bulanTerbilang($bulan)
{
    // Array untuk menyimpan nama bulan
    $nama = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
    ];

    // Mengembalikan nama bulan
    return $nama[$bulan - 1];
}
