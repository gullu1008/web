<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GoPHP Training and Development</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark mynav">
    <div class="container">
        <a class="navbar-brand" href="index.html">GoPHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url("panel")?>">Panel</a>
                </li>
                <?php
                if(isset($durum) && $durum)
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('logout')?>">Çıkış</a>
                </li>
                <?php
                }
                else
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('login')?>">Panel Giriş</a>
                </li>
                <?php
                }
                ?>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
