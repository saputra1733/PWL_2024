<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <style>
        .biodata {
            border: 1px solid #ccc;
            padding: 20px;
            width: 800px;
           
            background-color: #f5f5f5;
            margin: 20px auto;
        }

        .biodata-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .biodata-info {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
        
        $namaLengkap = "Ghaniyu Ilmi Saputra";
        $tanggalLahir = "2000-05-13";
        $tempatLahir = "Malang";
        $alamat = "Dewandari";
        $noTelp = "00000";
        $email = "Malvian@gmail.com";
        
    ?>

    <div class="biodata">
        <h2 class="biodata-header">Biodata Diri</h2>
        <div class="biodata-info">
            <p><strong>Nama Lengkap:</strong> <?php echo $namaLengkap; ?></p>
            <p><strong>Tanggal Lahir:</strong> <?php echo $tanggalLahir; ?></p>
            <p><strong>Tempat Lahir:</strong> <?php echo $tempatLahir; ?></p>
            <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
            <p><strong>Nomor Telepon:</strong> <?php echo $noTelp; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            </div>
    </div>
</body>
</html>