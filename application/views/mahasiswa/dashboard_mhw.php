<div class="slider">
    <ul class="slides">
        <li>
            <img src="<?php echo base_url(); ?>assets/img/slider-2-1200.webp"> <!-- random image -->
        </li>
        <li>
            <img src="<?php echo base_url(); ?>assets/img/slider-3-1200.webp"> <!-- random image -->
        </li>
    </ul>
</div>


  <div class="row">

    <div class="col s12 m3">
      <div class="card ">
        <div class="card-content center">
          <img src="<?php echo base_url(); ?>/assets/img/avatar-11.png">
          <br>
          <h5>Username</h5>
          <h6>Mahasiswa</h6>
          <br>
          <h6>1112225555</h6>
          <h6>Teknik Informatika</h6>
          <h6>Universitas Ibn Khaldun</h6>

        </div>
      </div>
    </div>

    <section class="program center">
      <div class="row">
        <div class="col s12 m2">
          <div class="card-panel hoverable">
            <a href="<?= base_url() ?>mahasiswa/kegiatanwirausaha">
              <img src="<?php echo base_url(); ?>/assets/img/icon-kegiatan-wirausaha.png" style="width: 60%;">
            </a>
          </div>
        </div>
        <div class="col s12 m2">
          <div class="card-panel hoverable">
          <a href="<?= base_url() ?>mahasiswa/magang">
              <img src="<?php echo base_url(); ?>/assets/img/icon-magang.png" style="width: 60%;">
            </a>
          </div>
        </div>
        <div class="col s12 m2">
          <div class="card-panel hoverable">
          <a href="<?= base_url() ?>mahasiswa/kkn">
              <img src="<?php echo base_url(); ?>/assets/img/icon-membangun-desa.png" style="width: 60%;">
            </a>
          </div>
        </div>
        <div class="col s12 m2">
          <div class="card-panel hoverable">
          <a href="<?= base_url() ?>mahasiswa/mengajar">
              <img src="<?php echo base_url(); ?>/assets/img/icon-mengajar.png" style="width: 68%;">
            </a>
          </div>
        </div>
        <div class="col s12 m2">
          <div class="card-panel hoverable ">
            <a href="#">
              <img src="<?php echo base_url(); ?>/assets/img/icon-penelitian.png" style="width: 60%;">
            </a>
          </div>
        </div>
        <div class="col s12 m2">
          <div class="card-panel hoverable">
            <a href="#">
              <img src="<?php echo base_url(); ?>/assets/img/icon-proyek-kemanusiaan.png" style="width: 60%;">
            </a>
          </div>
        </div>

        <div class="col s12 m2">
          <div class="card-panel hoverable">
            <a href="#">
              <img src="<?php echo base_url(); ?>/assets/img/icon-studi-idependen.png" style="width: 60%;">
            </a>
          </div>
        </div>

        <div class="col s12 m2">
          <div class="card-panel hoverable">
            <a href="#">
              <img src="<?php echo base_url(); ?>/assets/img/icon-pertukaran-pelajar.png" style="width: 60%;">
            </a>
          </div>
        </div>
      </div>
    </section>
    <div class="col s4 m3">
      <div class="card ">
        <div class="card-content center-align">
          <h5>Pengumuman</h5>
          <br>
          <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione iure hic cupiditate nostrum dicta obcaecati voluptatum optio dolores recusandae sunt.</span>

        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const select = document.querySelectorAll('.select');
    M.FormSelect.init(select)
  </script>

  </body>

  </html>