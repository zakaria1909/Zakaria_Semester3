<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Olah Nama Dosen</title>
</head>
<body>
  <form class="" action="proses.php" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama" autocomplete="off"> <br>
    <label for="">Umur</label>
    <input type="text" name="umur" autocomplete="off"> <br>
    <label for="">Email</label>
    <input type="text" name="email" autocomplete="off"> <br>
    <label for="">Jenis kelamin</label>
    <input type="radio" name="jeniskelamin" value="pria">pria
    <input type="radio" name="jeniskelamin" value="pria">pria <br>
    <label for="">Agama</label>
    <select class="" name="agama" >
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Buddha">Buddha</option>
        <option value="Hindu">Hindu</option>
        <option value="Konghucu">Konghucu</option>
    </select><br>
    <label for="">Komentar</label><br>
    <textarea name="komentar" id="" cols="50" rows="7"></textarea><br>
    <button type="submit" name="submit" value = <?php echo date("h:i:sa"); ?> >Submit</button>
  </form>
</body>
</html>
