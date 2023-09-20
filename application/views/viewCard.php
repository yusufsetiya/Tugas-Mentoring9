<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Mahasiswa</title>
</head>
<style>
    .company-info {
        flex: 2;
        padding: 20px;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #87CEEA;
        border: 2px solid black;
    }

    .province {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .city {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<body>
    <table border="0" width="100%">
        <tr>
            <td class="company-info" style="text-align: center !important;">
                <div class="province">Provinsi Jawa Timur</div>
                <div class="city">Kota Malang</div>
            </td>
        </tr>
    </table>
    <hr>
    <table border="0" width="100%" style="padding: 20px;">
        <tr>
            <td width="150px"><b>Nama</b></td>
            <td>:</td>
            <td width="400px"><?= $nama; ?></td>
            <td rowspan="3" style="text-align: center;">
                <img src="<?= $image; ?>" style="width: 100%;" alt="Logo Perusahaan">
            </td>
        </tr>
        <tr>
            <td><b>Tempat/Tgl Lahir</b></td>
            <td>:</td>
            <td><?= $tempat; ?> / <?= date('d F Y', strtotime($tanggal)); ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td>:</td>
            <td><?= $alamat; ?></td>
        </tr>
    </table>
</body>

</html>