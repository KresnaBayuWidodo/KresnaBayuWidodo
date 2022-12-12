<?php

$host = mysqli_connect("localhost", "", "root", "unipma")

mysqli_query($host,"SELECT * FROM mahasiswa")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border="1">
        <tr>
            <th></th>
        </tr>
    </table>
</body>
</html>
