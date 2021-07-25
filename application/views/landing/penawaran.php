    <!-- penawaran -->
  <body>
  <div class="section"></div>
     <div class="section"></div>
      <div class="container">
        <div class="col s12 m7">
            <div class="section">
 
                 <a href="<?= base_url() ?>"><i class="material-icons medium">keyboard_arrow_left</i></a>                              


              <h4 class="header"><?=  $penawaran['judul_info']; ?></h4>
            </div>
    <div class="card horizontal">
         <div class="card-image">
         <img src="<?php echo base_url(); ?>/assets/picture/<?= $penawaran['gambar']; ?>" width="350px" height="340px">
         </div>
      <div class="card-stacked">
          <div class="card-content">
              <div class="section">
                  <h5>Lorem ipsum is placeholder text commonly</h5>
              </div>
             <p><?=  $penawaran['info']; ?></p>
          </div>
      </div>
    </div>
  </div>
           
      </div>
    </body>

