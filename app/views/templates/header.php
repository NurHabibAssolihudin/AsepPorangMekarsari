<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link href="<?= BASEURL; ?>/css/carousel.css" rel="stylesheet">
    <link href="heroes.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">APM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= BASEURL; ?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= BASEURL; ?>/blog">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->