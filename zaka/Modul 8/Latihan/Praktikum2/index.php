<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data</title>
  <style>
    body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f8f9fa;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

h1 {
  font-size: 24px;
  color: #333;
  margin-bottom: 20px;
}

form {
  max-width: 400px;
  width: 100%;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 8px;
  font-size: 14px;
  color: #555;
}

input,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

label[for="laki-laki"],
label[for="perempuan"] {
  display: inline-block;
  margin-right: 20px;
  font-size: 14px;
}

input[type="radio"] {
  margin-bottom: 0;
  transform: scale(0.4);
}

div {
  display: flex;
  justify-content: space-between;
}

button {
  padding: 12px;
  background-color: #3498db;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 16px;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #2980b9;
}

  </style>
</head>
<body>

<h1>PHP Form Validation Example</h1>
  <form action="handle_form.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="website">Website:</label>
    <input type="url" name="website" id="website">

    <label for="komentar">Komentar:</label>
    <textarea name="komentar" id="komentar" rows="4" required></textarea>

    <label for="gender">Jenis Kelamin:</label>
    <div>
    <input type="radio" name="gender" id="laki-laki" value="laki-laki" required>
    <label for="laki-laki">Laki-Laki</label>

    <input type="radio" name="gender" id="perempuan" value="perempuan" required>
    <label for="perempuan">Perempuan</label>
    </div>

    <button type="submit">Kirim Data</button>
  </form>
</body>
</html>
