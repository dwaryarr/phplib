<?php

echo dayFormat(date('j F Y'));

function dayFormat($date)
{
    $date = date('D', strtotime($date));
    if ($date == 'Sun') {
        $hari = 'Minggu';
    } else if ($date == 'Mon') {
        $hari = 'Senin';
    } else if ($date == 'Tue') {
        $hari = 'Selasa';
    } else if ($date == 'Wed') {
        $hari = 'Rabu';
    } else if ($date == 'Thu') {
        $hari = 'Kamis';
    } else if ($date == 'Fri') {
        $hari = 'Jumat';
    } else if ($date == 'Sat') {
        $hari = 'Sabtu';
    }
    return $hari;
}
