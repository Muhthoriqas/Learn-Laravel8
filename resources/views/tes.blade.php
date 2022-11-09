<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tambah </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 style="color:  green">INI HALAMAN TAMBAH </h1>
    <h1><?php echo 'Nama Saya '.$nama ?></h1>
    <h1>Umur Saya : <?= $Umur; ?></h1>
    <img src="assets/image1.jpg" alt="" width="200px" height="200px">
    <img src="<?= $image ?>" alt="">
    <script src="js/script.js"></script>
</body>
</html>