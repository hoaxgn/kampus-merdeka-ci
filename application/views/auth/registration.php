<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

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
                                <input class='validate' type='text' name='nama' id='nama' />
                                <label for='nama'>Masukkan Nama Anda</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='npm' id='npm' />
                                <label for='npm'>Masukkan Npm Anda</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='email' name='email' id='email' />
                                <label for='email'>Enter your email</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Enter your password</label>
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