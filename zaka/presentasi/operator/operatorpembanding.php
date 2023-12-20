<?php
//sama dengan
$a = 5;
$b = '5';
if ($a == $b) {
    // Ini akan dieksekusi karena nilai $a dan $b sama meskipun tipe datanya berbeda
}

//identik
$a = 5;
$b = '5';
if ($a === $b) {
    // Ini tidak akan dieksekusi karena nilai $a dan $b sama tapi tipe datanya berbeda
}

?>