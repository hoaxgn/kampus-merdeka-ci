<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teknik Informatika</title>
</head>

<body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="dark navbar-fixed">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="<?= base_url() ?>" class="brand-logo "><img src="<?php echo base_url(); ?>/assets/img/logo-kampus-merdeka.png"></a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="<?= base_url() ?>">Home</a>
                        </li>
                        <li>
                            <a href="home/about">About</a>
                        </li>
                        <li>
                            <a href="#program">Program Kegiatan</a>
                        </li>
                        <li>
                            <a href="#berita">Berita</a>
                        </li>
                        <li>
                            <a href="#pengumuman">Pengumuman</a>
                        </li>
                        <li>
                            <a href="login.html" class="waves-effect waves-light btn">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
        <li>
            <a href="#home">Home</a>
        </li>
        <li>
            <a href="#about">About</a>
        </li>
        <li>
            <a href="#program">Program Kegiatan</a>
        </li>
        <li>
            <a href="#berita">Berita</a>
        </li>
        <li>
            <a href="#pengumuman">Pengumuman</a>
        </li>
        <li>
            <a href="login.html" class="waves-effect waves-light btn">Login</a>
        </li>
    </ul>