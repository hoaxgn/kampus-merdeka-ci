<section class="content">
    
</section><section class="content">
    
    <div class="container-fluid">
                                                    <div class="block-header">
                                                        <h1>Manajemen Mahasiswa</h1>
                                                    </div>
                  <!-- Striped Rows -->
                                                  
               <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button type="button" class="btn bg-blue waves-effect mb-5" data-toggle="modal" data-target="#tambah">+ Tambah Data mahasiswa</button>
                        <ul class="header-dropdown m-r--5">
                             
                            
                                    
    
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                 
                                            <th>No</th>
                                            <th>ID Mahasiswa</th>
                                            <th>NPM</th>
                                            <th>NIK</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Jenis Kelamin</th>                                         
                                            <th>Foto Profil</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>Semester</th>
                                            <th>IPK</th>
                                        
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    <tr>
                                            <?php $no=1;
                                            foreach ($mahasiswa as $mhs) : ?>
                                          
                                            <td><?=  $no++ ?></td>
                                            <td><?=  $mhs['id_mhs']; ?></td>
                                            <td><?=  $mhs['npm']; ?></td>
                                            <td><?=  $mhs['nik']; ?></td>
                                            <td><?=  $mhs['nama_mhs']; ?></td>
                                            <td><?=  $mhs['jk']; ?></td>                                                                             
                                            <td><img src="<?php echo base_url(); ?>/assets/picture/mhs/<?= $mhs['foto_profil']; ?>" width="110px" height="110px"></td> 
                                            <td><?=  $mhs['tempat_lahir']; ?></td>
                                            <td><?=  $mhs['tanggal']; ?></td>
                                            <td><?=  $mhs['agama']; ?></td>                                       
                                            <td><?=  $mhs['email']; ?></td>
                                            <td><?=  $mhs['no_hp']; ?></td>
                                            <td><?=  $mhs['semester']; ?></td>
                                            <td><?=  $mhs['ipk']; ?></td>
                                           
                                           
                                                                                 
                                            <td>
                                                <button type="button" class="btn btn bg-grey waves-effect" data-toggle="modal" data-target="#edit">
                                                    <i class="material-icons">mode_edit</i></button>
                                                  
                                                <button type="button" class="btn btn bg-red waves-effect">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
    
                                    </tbody>
                                </table>
                                
                            </div>  
                        </div>
    
    
                                     </div>
                                 </div>    
                            </div>
                        </div>
                    
    
                   <!-- {{-- -------------------------- Pop Up - Form ------------------------------------------ --}} -->
    
                   <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                    <div class="card modal-dialog" role="document">
                            <div class="modal-content"> <div class="modal-content">
                                           
                                              
               <div class="modal-header">
                       <h4 class="modal-title" id="defaultModalLabel">Tambah Data Mahasiswa</h4>
                           </div>
                       <div class="modal-body">
    
                        <form class="form-horizontal">  
                                     <form action>
                                       
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>ID Mahasiswa</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="id_mahasiswa" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>NPM</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="npm" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>NIK</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="nik" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Nama Mahasiswa </label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="nama_mhs" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class=" form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="jk">Jenis Kelamin</label>
                                    </div>
                                        <div class="col-sm-6">
                                          <select class="form-control show-tick" id="jk" name='jk'>
                                                        <option value="select">-- Silahkan Pilih --</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                        </div>
                               </div>

                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Foto Profil</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="foto_profil" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Tempat lahir</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="tempat_lahir" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-3 form-control-label">
                            <label for>Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="input-group date" id="bs_datepicker_component_container" name="tanggal">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name=" " placeholder="Masukan  ">
                                </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                            </div>
                        </div>
                    </div>
                           <div class=" form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="agama">agama</label>
                                    </div>
                                        <div class="col-sm-6">
                                          <select class="form-control show-tick" id="agama" name='agama'>
                                                        <option value="select">-- Silahkan Pilih --</option>
                                                        <option value="islam">Islam</option>
                                                        <option value="protestan">Protestan</option>
                                                        <option value="katolik">Katolik</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="buddha">Buddha</option>
                                                        <option value="khonghucu">Khonghucu</option>
                                                    </select>
                                        </div>
                               </div>
                        
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Email</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="email" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>No Hp</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="no_hp" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class=" form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="semester">Semester</label>
                                    </div>
                                        <div class="col-sm-6">
                                          <select class="form-control show-tick" id="semester" name='semester'>
                                                        <option value="select">-- Silahkan Pilih --</option>
                                                        <option value="1"> 1</option>
                                                        <option value="2"> 2</option>
                                                        <option value="3"> 3</option>
                                                        <option value="4"> 4</option>
                                                        <option value="5"> 5</option>
                                                        <option value="6">6 </option>
                                                    </select>
                                        </div>
                               </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>IPK</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="ipk" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           
                        
                                <div class="modal-footer">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit"  class="btn bg-grey waves-effect">Simpan</button>
                                                        <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                       </form>
               </div></div></div> </div>  </div>
                   
                    <!-- {{-- -------------------------- Pop Up - edit------------------------------------------ --}} -->
    
                    <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                    <div class="card modal-dialog" role="document">
                            <div class="modal-content"> <div class="modal-content">
                                           
                                              
               <div class="modal-header">
                       <h4 class="modal-title" id="defaultModalLabel">Tambah Data Mahasiswa</h4>
                           </div>
                       <div class="modal-body">
    
                        <form class="form-horizontal">  
                                     <form action>
                                       
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>ID Mahasiswa</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="id_mahasiswa" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>NPM</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="npm" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>NIK</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="nik" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Nama Mahasiswa </label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="nama_mhs" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class=" form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="jk">Jenis Kelamin</label>
                                    </div>
                                        <div class="col-sm-6">
                                          <select class="form-control show-tick" id="jk" name='jk'>
                                                        <option value="select">-- Silahkan Pilih --</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                        </div>
                               </div>

                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Foto Profil</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="foto_profil" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Tempat lahir</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="tempat_lahir" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-3 form-control-label">
                            <label for>Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="input-group date" id="bs_datepicker_component_container" name="tanggal">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name=" " placeholder="Masukan  ">
                                </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                            </div>
                        </div>
                    </div>
                           <div class=" form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="agama">agama</label>
                                    </div>
                                        <div class="col-sm-6">
                                          <select class="form-control show-tick" id="agama" name='agama'>
                                                        <option value="select">-- Silahkan Pilih --</option>
                                                        <option value="islam">Islam</option>
                                                        <option value="protestan">Protestan</option>
                                                        <option value="katolik">Katolik</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="buddha">Buddha</option>
                                                        <option value="khonghucu">Khonghucu</option>
                                                    </select>
                                        </div>
                               </div>
                        
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Email</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="email" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>No Hp</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="no_hp" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class=" form-group">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="semester">Semester</label>
                                    </div>
                                        <div class="col-sm-6">
                                          <select class="form-control show-tick" id="semester" name='semester'>
                                                        <option value="select">-- Silahkan Pilih --</option>
                                                        <option value="1"> 1</option>
                                                        <option value="2"> 2</option>
                                                        <option value="3"> 3</option>
                                                        <option value="4"> 4</option>
                                                        <option value="5"> 5</option>
                                                        <option value="6">6 </option>
                                                    </select>
                                        </div>
                               </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>IPK</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="string"  class="form-control" name="ipk" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           
                        
                                <div class="modal-footer">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit"  class="btn bg-grey waves-effect">Simpan</button>
                                                        <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                       </form>
               </div></div></div> </div>  </div>
    
    </section>