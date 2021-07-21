<!-- Section: Slider -->
<section class="slider">
    <ul class="slides">
        <li>
            <img src="<?php echo base_url(); ?>/assets/img/hero-bg.jpg">
            <!-- random image -->
            <div class="caption left-align">
                <h2>Tentang Kami</h2>

            </div>
        </li>
        <li>
            <img src="<?php echo base_url(); ?>/assets/img/slider-2-1200.webp">
            <!-- random image -->
            <div class="caption right-align">
                  <h2>Tentang Kami</h2>
            </div>
   
        </li>
        <li>
            <img src="<?php echo base_url(); ?>/assets/img/slider-3-1200.webp">
            <!-- random image -->
            <div class="caption right-align">
                  <h2>Tentang Kami</h2>
            </div>
        </li>
    </ul>
    </section>
    

    
    <?php  foreach($tentang as $ttg) ?>
           <div class="container">
                <h4><?=  $ttg['judul']; ?> </h4>
                <h5><?=  $ttg['isi']; ?> </h5>
            </div>
    <?php  ?>
    