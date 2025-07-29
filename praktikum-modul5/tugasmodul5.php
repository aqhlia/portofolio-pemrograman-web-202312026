<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>
    </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:rgb(255, 255, 255);
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2c3e50;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: vertical;
        }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color:rgb(47, 105, 181);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .success {
            background: #eafaf1;
            border: 1px solid#218aa7;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .success p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Buku Tamu Digital STITEK Bontang</h2>

        <?php
        // Inisialisasi variabel
        $nama = $email = $pesan = "";
        $error = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil dan validasi data
            $nama = trim($_POST["nama"]);
            $email = trim($_POST["email"]);
            $pesan = trim($_POST["pesan"]);

            if (empty($nama) || empty($email) || empty($pesan)) {
                $error = "Semua kolom wajib diisi.";
            } else {
                // Bersihkan data dari karakter berbahaya
                $nama = htmlspecialchars($nama);
                $email = htmlspecialchars($email);
                $pesan = htmlspecialchars($pesan);

                echo "<div class='success'>";
                echo "<h4>Terima kasih, data Anda telah terkirim!</h4>";
                echo "<p><strong>Nama:</strong> $nama</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Pesan:</strong> $pesan</p>";
                echo "</div>";
            }
        }

        if (!empty($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>

        <form method="POST" action="">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">

            <label for="email">Alamat Email</label>
            <input type="email" name="email" id="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">

            <label for="pesan">Pesan/Komentar</label>
            <textarea name="pesan" id="pesan" rows="4"><?= isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : '' ?></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</body>
</html>
