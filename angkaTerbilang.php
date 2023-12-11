<?php

function terbilang($x)
{
    $terbilang = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

    if ($x < 12)
        return "" . $terbilang[$x];
    elseif ($x < 20)
        return terbilang($x - 10) . " belas";
    elseif ($x < 100)
        return terbilang($x / 10) . " puluh" . terbilang($x % 10);
    elseif ($x < 200)
        return "seratus" . terbilang($x - 100);
    elseif ($x < 1000)
        return terbilang($x / 100) . " ratus" . terbilang($x % 100);
    elseif ($x < 2000)
        return "seribu" . terbilang($x - 1000);
    elseif ($x < 1000000)
        return terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
    elseif ($x < 1000000000)
        return terbilang($x / 1000000) . " juta" . terbilang($x % 1000000);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Fungsi Terbilang dengan PHP</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="number">
        <button>Terbilang</button>
    </form>
    <hr>
    <?php
    if ($_POST) {
        echo number_format($_POST['number'], 0, ",", ".");
        echo " (";
        echo ucwords(terbilang($_POST['number']));
        echo ")";
    }
    ?>
</body>

</html>