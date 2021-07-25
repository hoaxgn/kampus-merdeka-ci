<section class="container">
    <div class="row">
        <div class="col s4 ce">
            <div class=" card-panel ">
                <form method="post">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='username' id='username' />
                            <label for='username'>Enter your NPM/NIDN</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password' id='password' />
                            <label for='password'>Enter your password</label>
                        </div>

                        <label>
                            <input type="checkbox" />
                            <span>Remember me</span>
                        </label>

                        <label style='float: right;'>
                            <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                        </label>
                    </div>

                    <div class='row '>
                        <button type='submit' name='btn_login' class='col s6 btn btn-large waves-effect indigo'>Login</button>
                    </div>
                    <div class="row">
                        <a href="<?= base_url(); ?>auth/registration">Belum Punya Akun?</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="col s5">
            <a href="#">
                <img src="<?= base_url(); ?>/assets/img/logo-kampus-merdeka.png">

            </a>

        </div>

    </div>
</section>