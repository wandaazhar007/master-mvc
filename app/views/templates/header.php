<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= WAZAPP_BASEURL ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= WAZAPP_BASEURL ?>/css/wazappstyle.css">
    <title>Halaman <?= $data['title'] ?></title>
</head>
<body>
<div class="container mt-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= WAZAPP_BASEURL ?>/home">Master MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">History<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WAZAPP_BASEURL ?>/product">product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transaction</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WAZAPP_BASEURL ?>/mahasiswa">Mahasiswa</a>
            </li>
        </ul>
    </div>
    </nav>