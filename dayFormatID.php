<?php
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>