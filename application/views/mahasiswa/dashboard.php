 <!-- kotak kiri  -->

 <section id="isi" class="section section-isi scrollspy">


     <div class="row">
         <label>
             <h5 class="blue-text">Program Kegiatan</h5>
         </label>
         <div class="col s12 m4">
             <div class="card grey lighten-3">
                 <div class="card-content ">
                     <h5>Cari Data</h5>
                     <h6>Program Kegiatan</h6>
                     <select class="browser-default">

                         <option value="1">Kegiatan Wirausaha</option>
                         <option value="2">Magang/Praktik Kerja</option>
                         <option value="3">Membangun Desa / Kuliah Kerja Nyata </option>
                         <option value="4">Mengajar disekolah </option>
                         <option value="5">Penelitian/Riset </option>
                         <option value="6">Proyek kemanusiaan</option>
                         <option value="7">Studi proyek/Independen </option>
                         <option value="8">Pertukaran Pelajar </option>
                     </select>

                     <div class='input-field col s12'>

                         <input class='validate' type='text' name='namakegiatan' id='email' />
                         <label>Nama Kegiatan</label>
                     </div>



                     <div class='input-field col s12'>
                         <input class='validate' type='text' name='lokasi' id='email' />
                         <label>Lokasi</label>
                     </div>

                     <h6>Jenis Kepesertaan</h6>

                     <select class="browser-default">

                         <option value="1">Perorangan</option>
                         <option value="2">Kelompok</option>
                         <option value="3">Option 3</option>

                     </select>

                     <div class="card-content ">
                         <button type='button' name='btn_cari' class='col s3 btn btn-small waves-effect grey darken-2 right-align'>Cari</button>
                     </div>

                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col s8">
                 <div class="card grey lighten-3">
                  <a href="<?= base_url() ?>mahasiswa/daftar_anggota" class="black-text">
                     <div class="card-content">
                         <div class="col s6">
                             <h6 class="blue-text">Pertukaran Mahasiswa Merdeka Angkatan 1 2021</h6>
                             <h7 class="">Direktorat Jendral Pembelajaran dan Kemahasiswaan</h7>
                         </div>
                         <div class="col s6">
                             <h6 class="btn-small green" style="border-radius: 20px;">Pertukaran Pelajar</h6><br>
                             <h7></h7><br>
                         </div>

                         <div class="card-content">
                             <div class="col s4">
                                 <span>Batas Pendaftaran</span>
                                 <p>1 Mei 2021 s/d 20 Mei 2021
                                 </p>
                             </div>
                             <div class="card-content">
                                 <div class="col s3">
                                     <span>Kuota</span>
                                     <p>1000 Orang</p>
                                 </div>
                             </div>
                             <div class="col s3">
                                 <span>Durasi Kegiatan</span>
                                 <p>27 mei s/d 30 mei 2021</p><br>
                             </div>

                             <div class="col s6 ">
                                 <br>
                                 <span>Deskripsi Kegiatan</span><br>
                                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel officiis voluptatum
                                     quam at vitae ratione, excepturi saepe ipsa optio magnam.</p><br>

                             </div>
                   </a>
                             <div class="card-content">
                             </div>
                             <div class="card-content">
                             </div>
                             <div class="card-content">
                             </div>
                             <div class="card-content">
                             </div>
                         </div>


                     </div>
                 </div>
             </div>


         </div>

     </div>

     </div>
 </section>


 </body>

 </html>