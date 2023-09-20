<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kop Surat</title>
    <style>
        .logo {
            flex: 1;
        }

        .logo img {
            width: 100px;
            margin-top: -20px;
        }

        .company-info {
            flex: 2;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .address {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td class="logo" style="width: 180px;">
                <img src="<?= $image; ?>" width="100" height="100" alt="Logo Perusahaan">
            </td>
            <td class="company-info" style="text-align: center;">
                <div class="company-name">PT. Arkatama Multi Solusindo</div>
                <div class="address">Jl. Joyoagung No. 11, Kelurahan Dinoyo, Kota Malang</div>
                <div class="address">Telepon: 087721015398</div>
                <div class="address">Email: arkatamalang@co.id</div>
            </td>
        </tr>
    </table>
    <hr>

    <!-- Isi konten surat -->
    <p style="text-align: center;">
        <b>SURAT PERNYATAAN TANGGUNG JAWAB</b>
    </p>
</body>

</html>