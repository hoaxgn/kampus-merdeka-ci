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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">
    <link rel="stylesheet" href="<? echo base_url(); ?>assets/css/file_upload.css">
    <script scr="<? echo base_url(); ?>assets/js/script.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            M.Modal.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            M.Dropdown.init(elems, {
                hover: false,
                coverTrigger: false
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            M.Slider.init(elems);
        });

        $(document).ready(function() {
            $('input#input_text, textarea#textarea2').characterCounter();
        });
    </script>
    <title>Teknik Informatika</title>
    <link rel="icon" href="<?= base_url('assets/dash/') ?>logo-header.ico" type="image/x-icon">
</head>

<body>

    <section class="section grey white-text">
        <div class="row">
            <div class="col s12 left">
                <a href="#" class="brand-logo "><img src="<?php echo base_url(); ?>assets/img/logo-kampus-merdeka.png">
                </a>
                <img src="<?= base_url(); ?>assets/img/avatar-10.png" alt="" class="dropdown-trigger right" data-target="dropdown2" style="width: 50px; margin-right: 50px; margin-top: 25px;">
            </div>
            <ul id='dropdown2' class='dropdown-content'>
                <li><a href="#!">Account</a></li>
                <li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
            </ul>
        </div>
    </section>
    <!-- Navbar -->
    <div class="navbar">
        <nav class=" #616161 grey lighten-1  black-text">

            <div class="nav-wrapper">
                <ul class="left ">
                    <li>
                        <a href="<?= base_url(); ?>" class="black-text">Dashboard</a>
                    </li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger black-text" href="#!" data-target="dropdown1">Pengajuan Usulan<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="<?= base_url(); ?>validation">Validasi Proposal</a></li>
                    <li><a href="<?= base_url(); ?>laporanharian">Laporan Harian</a></li>
                    <li><a href="<?= base_url(); ?>laporantengah">Laporan Tengah</a></li>
                    <li><a href="<?= base_url(); ?>laporanakhir">Laporan Akhir</a></li>
                </ul>
            </div>
    </div>

    </nav>
    </div>
    </div>

    </nav>
    </div>