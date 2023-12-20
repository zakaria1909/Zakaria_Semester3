<?php
//AND
$a = 5;
$b = 3;
if ($a > 0 && $b > 0) {
    // Ini akan dieksekusi karena kedua kondisi benar
}

//OR
$a = 5;
$b = 3;
if ($a == 5 || $b == 5) {
    // Ini akan dieksekusi karena salah satu kondisi benar
}

//NOT
$a = 5;
if (!($a == 10)) {
    // Ini akan dieksekusi karena kondisi di dalam NOT bernilai false
}

?>