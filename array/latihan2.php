<?php
$mahasiswa =  [
    ["Dion Andika", 2035008, "Informatika", "dionandika443@gmail.com"],
    ["Alfridzi", 2035001, "Informatika", "alfaridziumri123@gmail.com"]
];
var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
      <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama : <?= $mhs[0]; ?></li>
            <li>Npm : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>email : <?= $mhs[3]; ?></li>
      </ul>
      <?php endforeach; ?>


</body>

</html>