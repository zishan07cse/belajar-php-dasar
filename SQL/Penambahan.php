<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <h2><?php require 'Validasi.php' ?></h2>
    <form method="POST">
        <ol>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" id="nama" name="Nama" required> <!--value di atribut "name"nya harus sama sesuai nama field di databasenya-->
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="email" id="email" name="Email" required> <!--value di atribut "name"nya harus sama sesuai nama field di databasenya-->
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" id="Jurusan" name="Jurusan" required> <!--value di atribut "name"nya harus sama sesuai nama field di databasenya-->
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="gambar" id="gambar" name="Gambar" required> <!--value di atribut "name"nya harus sama sesuai nama field di databasenya-->
            </li>
            <br>
            <button type="submit" name="kirim">Tambah Data</button>
        </ol>
    </form>
    <a href="Index.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>