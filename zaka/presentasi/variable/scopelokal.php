<?php
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x adalah: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x adalah: $x</p>";

?>


