<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Card Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h4>List Card Mahasiswa</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($user as $value) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->name; ?></td>
                            <td><?= $value->date_birth; ?></td>
                            <td><?= $value->place_of_birth; ?></td>
                            <td><?= $value->address; ?></td>
                            <td>
                                <a href="<?= site_url('welcome/detail/') . $value->id ?>" class="btn btn-success">Detail Card</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>