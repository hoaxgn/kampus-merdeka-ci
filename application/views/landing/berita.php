
    <!-- Berita -->
  <body>
    <div class="section"></div>
      <div class="section"></div>
      <div class="container">
                    <a href="<?= base_url() ?>"><i class="material-icons medium">keyboard_arrow_left</i></a>
        <div class="card"> 
            <div class="section">    
               
                 <div class="container">
                 
                    <h4 class="center"><?=  $berita['judul_info']; ?> </h4>
                      <span class="grey-text text-darken-2"><?=  $berita['tgl_upload']; ?> </span>
                        <div class="divider"></div>
                  </div> 
               </div>

                    <div class="section">
                            <div class="center" >
                            <img src="<?php echo base_url(); ?>/assets/picture/<?= $berita['gambar']; ?>" width="600px" height="400px">
                             </div>
                        </div>
                    
        
                    
                    <div class="section">
                        <div>
                        <div class="container">
                        <h5><?=  $berita['info']; ?></h5>
                    

                 </div>
             </div>
         </div>
    </div>
</div> 

    </body>
 
  