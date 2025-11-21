<?php
// --- BAGIAN PHP (LOGIKA SERVER) ---
// Kita mendefinisikan data di sini, lalu menampilkannya di bawah
$judul_halaman = "Website PHP Sederhana";
$nama_pengunjung = "Sobat Coding"; // Anda bisa ubah nama ini
$daftar_hobi = ["Belajar PHP", "Membaca Dokumentasi", "Ngopi", "Debugging"]; 
$hari_ini = date("l, d F Y"); // Mengambil tanggal otomatis dari server
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul_halaman; ?></title> <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            background-color: #eef2f5;
            text-align: center;
        }
        .kotak-konten {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
            border-top: 5px solid #4745a4; /* Warna ungu khas PHP */
        }
        h1 span { color: #4745a4; }
        ul { text-align: left; display: inline-block; }
        .info-waktu {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
            font-style: italic;
        }
        button {
            padding: 10px 20px;
            background-color: #4745a4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="kotak-konten">
        <h1>Halo, <span><?php echo $nama_pengunjung; ?></span>!</h1>

        <p>Ini adalah halaman HTML yang ditenagai oleh <strong>PHP</strong>.</p>
        <p>Jika Anda melihat tanggal di bawah, itu dihasilkan oleh server, bukan diketik manual.</p>
        
        <hr>

        <h2>Hobi Saya (Dari Array PHP):</h2>

        <ul>
            <?php foreach($daftar_hobi as $hobi): ?>
                <li><?php echo $hobi; ?></li>
            <?php endforeach; ?>
        </ul>

        <br><br>
        
        <button onclick="alert('PHP itu asik!')">Tes JavaScript</button>

        <div class="info-waktu">
            Halaman ini dimuat pada tanggal: <br>
            <strong><?php echo $hari_ini; ?></strong>
        </div>
    </div>

</body>
</html>