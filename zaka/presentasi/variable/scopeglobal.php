<?php 
$x = 5; // global scope
function myTest() {
    // penggunaan x didalam variabel ini akan terjadi kesalahan
    echo "<p>Nilai variabel x adalah: $x </p>";
  } 
  myTest();
  
  echo "<p>Nilai variabel x adalah: $x</p>"
?>

