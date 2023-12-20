<?php 
//penjumlahan
$a = 5;
$b = 3;
$result = $a + $b; // Hasilnya 8

//pengurangan
$a = 8;
$b = 3;
$result = $a - $b; // Hasilnya 5

//perkalian
$a = 4;
$b = 6;
$result = $a * $b; // Hasilnya 24

//pembagian
$a = 10;
$b = 2;
$result = $a / $b; // Hasilnya 5

//sisa hasil bagi
$a = 10;
$b = 3;
$result = $a % $b; // Hasilnya 1 (Sisa dari 10 dibagi 3)

//inkremen
for($i=1;$i<=100;$i++){
    echo "$i";
}

//dekremen
for($i=1;$i<=100;$i--){
    echo "$i";
}
?>

<?php
//menghitung penjualan bersih
$jual=100000;
$potongan=0.1;
$net=$jual-($jual*$potongan);
echo "Penjualan bersih = Rp $net,00";
?>
