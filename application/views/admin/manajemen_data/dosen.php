<section class="content">
    
<div class="container-fluid">
                                                <div class="block-header">
                                                    <h1>Manajemen Dosen</h1>
                                                </div>
              <!-- Striped Rows -->
                                              
           <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <button type="button" class="btn bg-blue waves-effect mb-5" data-toggle="modal" data-target="#tambah">+ Tambah Data Dosen</button>
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
                                        <th>ID Dosen</th>
                                        <th>Nama Dosen</th>
                                        <th>NIDN</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Foto Profil</th>
                                        <th>Email</th>
                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody> 

                                <?php   foreach ($dosen as $dsn) : ?>
                              
                                        <td><?= $dsn['id_dosen'];?></td>
                                        <td><?= $dsn['nama_dosen'];?></td>
                                        <td><?= $dsn['nidn'];?></td>
                                        <td><?= $dsn['jk'];?></td>                                       
                                        <td><?= $dsn['foto_profil'];?></td>
                                        <td><?= $dsn['email'];?></td>
                                       
                                                                             
                                        <td>
                                            <button type="button" class="btn btn bg-grey waves-effect" data-toggle="modal" data-target="#edit">
                                                <i class="material-icons">mode_edit</i></button>
                                                <a href=""></a>

                                                        <a href="<?= base_url(); ?>admin/manajemendosen/hapus/<?= $dsn['id_dosen']; ?>">
                                                            <button type="button" class="btn btn bg-red waves-effect">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                        </a>
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
                   <h4 class="modal-title" id="defaultModalLabel">Tambah Data Dosen</h4>
                       </div>
                   <div class="modal-body">

                     <form action="manajemendosen/tambah" method="post">
                                   
                       
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="nama_dosen">Nama Dosen</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="nama_dosen" placeholder="  ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="nidn">NIDN</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name="nidn" placeholder=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                  
                        <div class=" row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="jk">Jenis Kelamin</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <select class="form-control show-tick" id="jk" name='jk'>
                                        <option value="select">-- Please select --</option>
                                        <option value="Laki-laki">laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>                                     
                                    </select>
                                </div>
                       </div>
                    <!-- <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="foto_profil">Foto profil</label>
                        </div>
                         <div class="body col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <form action="/" id="foto_profil" name="foto_profil" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email"  class="form-control" name="email" placeholder=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="modal-footer">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit"  class="btn bg-grey waves-effect">Simpan</button>
                                                    <button type="button" name="tambah" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                   </form>
           </div></div></div> </div>  </div>
               
                <!-- {{-- -------------------------- Pop Up - edit------------------------------------------ --}} -->

                <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                    <div class="card modal-dialog modal-lg" role="document">
                            <div class="modal-content"> <div class="modal-content">
                                           
                                              
               <div class="modal-header">
                       <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                           </div>
                       <div class="modal-body">

                       <form class="form-horizontal">
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>ID Dosen</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="string"  class="form-control" name="id_role" placeholder=" ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="text">Nama Dosen</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="nama" placeholder="  ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="text">NIDN</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name="email" placeholder=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="text">Jenis Kelamin</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name="status" placeholder=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Foto profil</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name="status" placeholder=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address">Email</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name="status" placeholder=" ">
                                </div>
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