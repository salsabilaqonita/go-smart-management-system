<?php
var_dump($_POST);
require "connect.php";
require "metpem.php";
if (isset($_POST['submit'])) {
  tambah($_POST);
}

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Sukses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("img/bgsukses.jpg") center center fixed;
            background-size: cover;
            color: black; /* Warna teks menjadi hitam */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Untuk mengisi seluruh tinggi layar */
            background-color: rgba(255, 255, 255, 0.4 );
        }

        header {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            border-bottom: 2px solid white;
            margin-bottom: 20px;
        }

        section {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang dengan transparansi */
            border-radius: 10px; /* Untuk sudut yang lebih lembut */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow untuk efek ketinggian */
            width: 80%; /* Lebar formulir */
            max-width: 400px; /* Lebar maksimum formulir */
            color: black; /* Warna teks menjadi hitam */
        }

        h1 {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }

        p {
            font-size: 18px;
            font-weight: bold;
            color: black;
            margin-bottom: 20px;
        }

        .info {
            text-align: center;
            margin-top: 10px;
            font-size: 16px;
        }

    </style>
</head>

<body>

    <header>
        <h1>Pembayaran Sukses</h1>
    </header>

    <?php
    // Ambil data dari parameter URL
    $nama = $_POST['nama'] ?? '';
    $HP = $_POST['HP'] ?? '';
    $paket = $_POST['tipe'] ?? '';
    $catatan = $_POST['catatan'] ?? '';
    $pembayaran = $_POST['paymentMethod'] ?? '';
    // $bukti = $_POST['gambar'] ?? '';

    // Set timezone to WIB
    date_default_timezone_set('Asia/Jakarta');

    // Tampilkan informasi pembayaran
    echo "<section>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Nomor Telepon/HP: $HP</p>";
    echo "<p>Paket: $paket</p>";
    echo "<p>Catatan: $catatan</p>";
    echo "<p>Metode Pembayaran: $pembayaran</p>";
    echo "<div class='info'>Kirim bukti ini berupa screenshot dan kirim ke nomor wa '081277565246' sebagai bukti sekaligus mendiskusikan waktu dan tempat belajarnya.</div>";
    
    // Tambahkan kode untuk menampilkan waktu
    $currentDateTime = date('Y-m-d H:i:s'); // Format: Year-Month-Day Hour:Minute:Second
    echo "<p>Waktu: $currentDateTime WIB</p>";

    echo "</section>";
    ?>

</body>

</html>