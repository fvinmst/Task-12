<?php

$conn = mysqli_connect("localhost", "root", "", "ujicoba");

$result = mysqli_query($conn, "SELECT * FROM ujicoba");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Latihan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>

        <?php while ( $row = mysqli_fetch_assoc($result) ) :
        ?>
        <tr>
            <td><?= $row["id"]?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>