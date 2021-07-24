<html>

<!-- Section: Slider -->
<section class="slider">
    <ul class="slides">
        <li>
            <img src="<?php echo base_url(); ?>/assets/img/hero-bg.jpg">
            <!-- random image -->
            <div class="caption  center-align">
                <h2>Selamat Datang</h2>

            </div>
        </li>
        <li>
            <img src="img/slider-2-1200.webp">
            <!-- random image -->
            </div>
        </li>
        <li>
            <img src="img/slider-3-1200.webp">
            <!-- random image -->
            <div class="caption right-align">

            </div>
        </li>
    </ul>
</section>



<!-- Section: Icon Boxes -->
<section id="program" class="section section-program scrollspy">
    <div class="container center">
        <div class="row">
            <div class="col s12 m3">
                <div class="card-panel hoverable">
                    <a href="home/program_kegiatanwirausaha">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-kegiatan-wirausaha.png" style="width: 60%;">
                    </a>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel hoverable">
                    <a href="home/program_magang">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-magang.png" style="width: 60%;">
                    </a>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel hoverable">
                    <a href="home/program_kkn">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-membangun-desa.png" style="width: 60%;">
                    </a>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel hoverable">
                    <a href="home/program_mengajar">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-mengajar.png" style="width: 68%;">
                    </a>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel hoverable ">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-penelitian.png" style="width: 60%;">
                    </a>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel hoverable">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-proyek-kemanusiaan.png" style="width: 60%;">
                    </a>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel hoverable">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-studi-idependen.png" style="width: 60%;">
                    </a>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card-panel hoverable">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>/assets/img/icon-magang.png" style="width: 60%;">
                    </a>
                </div>
            </div>
        </div>
</section>

<!-- Section: Berita -->
<section id="berita" class="section section-berita scrollspy">
    <div class="container">
        <div class="row">
            <h4 class="center">
                <span class="teal-text">Berita</span>
            </h4>
            <?php  foreach ($berita as $br) : ?>
            <div class="col s12 m4">
                <a href="<?= base_url(); ?>home/detailberita/<?= $br['id_info']; ?>">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo base_url(); ?>/assets/img/resort2.jpg"  ">
                     </div>
                    <div class="card-content">
                    <h5>
                             <?=  $br['judul_info']; ?>  
                    </h5>
                       <div class="section">
                             <?=  $br['tgl_upload']; ?>
                        </div>
                    </div>
                            
                                
                           
                </div>
                </a>
            </div>
            
            <?php endforeach; ?>
            </div>
           
        </div>
    </div>
</section>



<!-- Section: Follow -->

<section class="section section-follow #616161 grey darken-2 white-text">
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                <h4>Follow Teknik Informatika</h4>
                <p>Follow us on social media for special offers</p>
                <a href="#" class="white-text">
                    <i class="fab fa-facebook fa-4x"></i>
                </a>
                <a href="#" class="white-text">
                    <i class="fab fa-pinterest fa-4x"></i> </a><a href="#" class="white-text">
                    <i class="fab fa-twitter fa-4x"></i> </a><a href="#" class="white-text">
                    <i class="fab fa-linkedin fa-4x"></i> </a><a href="#" class="white-text">
                    <i class="fab fa-google-plus fa-4x"></i>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- Section: Pengumuman -->
<section id="pengumuman" class="section section-berita scrollspy">
    <div class="container">
        <div class="row">
            <h4 class="center">
                <span class="teal-text">Pengumuman</span>
            </h4>
                <?php  foreach ($pengumuman as $pg) : ?>
            <div class="col s12 m4">
  <a href="<?= base_url(); ?>home/detailpengumuman/<?= $pg['id_info']; ?>">   
                <div class="card">
                    <div class="card-image">
                    </div>
                    <div class="card-content">
                    <h5>
                             <?=  $pg['judul_info']; ?>  
                    </h5>
                       <div class="section">
                             <?=  $pg['tgl_upload']; ?>
                        </div>
                    </div>
     
                </div>
            </div>
            
  </a>       
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- Section: Penawaran -->
<section id="Pengumuman" class="section section-berita scrollspy">
    <div class="container">
        <div class="row">
            <h4 class="center">
                <span class="teal-text">Penawaran</span>
            </h4>
            <?php  foreach ($penawaran as $pr) : ?>
            <div class="col s12 m4">
      <a href="<?= base_url(); ?>home/detailpenawaran/<?= $pr['id_info']; ?>"> 
                <div class="card">
                    <div class="card-image">
                    </div>
                    <div class="card-content">
                    <h5>
                             <?=  $pr['judul_info']; ?>  
                    </h5>
                       <div class="section">
                             <?=  $pr['tgl_upload']; ?>
                        </div>
                    </div>
     
                </div>
            </div>
      </a>     
            <?php endforeach; ?>
        </div>
    </div>
</section>