<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Khodam</title>
    <style>
        /* Mengatur body dengan tema laut yang memukau */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #3a7bd5, #00d2ff); /* Gradasi biru laut yang modern */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff; /* Warna teks menjadi putih */
        }

        .container {
            width: 400px;
            background: rgba(255, 255, 255, 0.15); /* Transparansi putih dengan sedikit efek */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37); /* Bayangan lebih halus */
            backdrop-filter: blur(10px); /* Efek blur pada latar belakang */
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.18); /* Border dengan efek transparan */
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-10px); /* Efek hover dengan sedikit gerakan */
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffffff; /* Warna teks solid putih */
        }

        input {
            padding: 12px;
            width: 80%;
            border: none;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.3); /* Transparansi putih pada input */
            font-size: 16px;
            color: white;
            margin-bottom: 20px;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7); /* Placeholder putih dengan transparansi */
        }

        button {
            padding: 12px 30px;
            background: linear-gradient(135deg, #00d2ff, #3a7bd5); /* Gradasi pada tombol */
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Efek bayangan tombol */
            transition: background 0.3s, transform 0.3s;
        }

        button:hover {
            background: linear-gradient(135deg, #3a7bd5, #00d2ff); /* Efek hover gradasi terbalik */
            transform: translateY(-5px); /* Efek hover tombol naik sedikit */
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
            color: #fff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Sedikit efek bayangan pada teks hasil */
        }

        p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cek Khodam Anda</h1>
    
    <!-- Form akan dikirim kembali ke halaman yang sama -->
    <form method="POST" action="">
        <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
        <br>
        <button type="submit">Cek Khodam</button>
    </form>

    <div id="result">
    <?php
if (isset($_POST['nama'])) {
    // Mengamankan input dari user
    $nama = htmlspecialchars($_POST['nama']);

    // Array Khodam dan Deskripsi
    $khodams = array(
        "Rawa rontek" => "",
        "Sate Padang" => "",
        "Tutup Odol" => "",
        "Tutup panci" => "",
        "Siluman tutup Termos" => "",
        "Singa introvert" => "",
        "Sandal jepit" => "",
        "Tikus got" => "",
        "Monyet depresi" => "",
        "Kudanil Sad" => "",
        "Babi Malu malu" => "",
        "Gardan fu" => "",
        "Gardan fuso" => "",
        "Ratu kegelapan" => "",
        "Harimau Birahi" => "",
        "Jasuke" => "",
        "Knalpot racing" => "",
        "Kunti bogel" => "",
        "Monyet kepo" => "",
        "Panci bolong" => "",
        "Kosong" => "",
    );

    // Mengambil Khodam secara acak
    $randomKey = array_rand($khodams);
    $khodamAnda = $randomKey;
    $deskripsiKhodam = $khodams[$randomKey];

    // Menampilkan hasil hanya dengan Khodam dan deskripsinya
    echo "<b>Nama: " . $nama . "</b><br>";      
    echo "<b>Khodam Anda: " . $khodamAnda . "</b><br>";
    echo "<p>" . $deskripsiKhodam . "</p>";
}
?>

    </div>
</div>

</body>
</html>
