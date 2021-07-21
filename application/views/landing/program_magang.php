    <!-- Section: Slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="<?php echo base_url(); ?>assets/img/hero-bg.jpg">
                <!-- random image -->
                <div class="caption left-align">
                    <h2>Magang/Praktik Kerja</h2>

                </div>
            </li>
            <li>
                <img src="<?php echo base_url(); ?>assets/img/slider-2-1200.webp">
                <!-- random image -->
                </div>
            </li>
            <li>
                <img src="<?php echo base_url(); ?>assets/img/slider-3-1200.webp">
                <!-- random image -->
                <div class="caption right-align">

                </div>
            </li>
        </ul>
    </section>

    <section id="pengertian" class="section section-pengertian scrollspy"> 
    <div class="container">
        <div class="row">
            <h4>
                <span class="teal-text">Pengertian</span>
            </h4>
            <?php  foreach($magang as $mg) ?>
            <p>
              <?=  $mg['pengertian'] ?>
            </p>
            
        </div>
    </div>
    </section>

    <section id="tujuan" class="section section-tujuan scrollspy">
    <div class="container">
        <div class="row">
            <h4>
                <span class="teal-text">Tujuan</span>
            </h4>
            
            <p>
            <?=  $mg['tujuan'] ?>
            </p>
                
            
        </div>
    </div>
    </section>

    <section id="pengertian" class="section section-pengertian scrollspy">
    <div class="container">
        <div class="row">
            <h4>
                <span class="teal-text">Mekanisme</span>
            </h4>
                    <p>
                        <?=  $mg['keg_mekanisme'] ?>
                    </p>
            <?php  ?>
        </div>
    </div>
    </section>



    