<?php
$koneksi = mysqli_connect("localhost","root","","tugaspraktikum2");

$name = $_POST['name'];
$email = $_POST['email'];
$webshite = $_POST['webshite'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];
$submit = $_POST['submit'];

$query = "INSERT INTO tugaspraktikum2 VALUES('$name','$email','$webshite','$comment','$gender','$submit')";

mysqli_query($koneksi, $query);
?>