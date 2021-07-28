<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>

    <div class="section"></div>
    <main>
        <center>

            <a href="<?= base_url(); ?>landing/home">
                <img class="responsive-img" style="width: 250px;" src="<?= base_url(); ?>assets/img/logo-kampus-merdeka.png" /></a>
            <div class="section"></div>

            <h5 class="indigo-text">Silahakan Daftar Akun Anda</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="post" action="<?= base_url('auth/registration'); ?>">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='nama_mhs' id='nama_mhs' />
                                <label for='nama' value="<?= set_value('nama_mhs'); ?>">Masukkan Nama Anda</label>
                                <?= form_error('nama_mhs', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='npm' id='npm' value="<?= set_value('npm'); ?>" />
                                <label for='npm'>Masukkan Npm Anda</label>
                                <?= form_error('npm', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='email' name='email' id='email' value="<?= set_value('email'); ?>" />
                                <label for='email'>Masukkan Nama Anda</label>
                                <?= form_error('email', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' value="<?= set_value('password'); ?>" />
                                <label for='password'>Masukkan Password Anda</label>
                                <?= form_error('password', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password1' id='password1' />
                                <label for='password21'>Konfirmasi Password Anda</label>
                                <?= form_error('password', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Register</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="<?= base_url(); ?>auth/login">Login</a>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>