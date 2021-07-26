<section class="content">
    
<div class="container-fluid">
                                                <div class="block-header">
                                                    <h1>Manajemen Informasi</h1>
                                                </div>
              <!-- Striped Rows -->
                                              
           <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <button type="button" class="btn bg-blue waves-effect mb-5" data-toggle="modal" data-target="#tambah">+ Tambah Data Informasi</button>
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

                                        <th>Id Informasi </th>
                                        <th>Id Admin </th>
                                        <th>jenis Informasi </th>
                                        <th>Judul Informasi </th>
                                        <th>Isi Informasi</th>
                                        <th>Gambar Informasi </th>
                                        <th>Tanggal Upload </th>
                                       
                                     
                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    
                            <?php    
                                foreach ($info as $in) : ?>
                                    <tr>    
                                        <td><?=  $in['id_info']; ?></td>
                                        <td><?=  $in['id_admin']; ?></td>
                                        <td><?=  $in['jenis_info']; ?></td>
                                        <td><?=  $in['judul_info']; ?></td>  
                                        <td><?=  $in['info']; ?></td>    
                                        <td><img src="<?php echo base_url(); ?>/assets/picture/<?= $in['gambar']; ?>" width="110px" height="110px"></td> 
                                        <td><?=  $in['tgl_upload']; ?></td>                                        
                                        
                                       
                                                                             
                                        <td>
                                            <button type="button" class="btn btn bg-grey waves-effect" data-toggle="modal" data-target="#edit">
                                                <i class="material-icons">mode_edit</i></button>
                                                <a href=""></a>
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
                   <h4 class="modal-title" id="defaultModalLabel">Tambah Data Informasi</h4>
                       </div>
                   <div class="modal-body">

                    <form class="form-horizontal">  
                                 <form action>
                                   
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label> Id Admin</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="string"  class="form-control" name="id_role" placeholder="Masukan  ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class=" form-group">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="role">jenis Informasi</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <select class="form-control show-tick" id="role" name='role'>
                                        <option value="select">-- Please select --</option>
                                        <option value="1">1 - Berita</option>
                                        <option value="2">2 - Pengumuman</option>
                                        <option  value="3">3 - Penawaran</option>

                                    </select>
                                </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Judul Informasi</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name=" " placeholder="Masukan  ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for>Isi Informasi</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name=" " placeholder="Masukan  ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for>Gambar Informasi</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name=" " placeholder="Masukan  ">
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-3 form-control-label">
                            <label for>Tanggal Upload</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="input-group date" id="bs_datepicker_component_container">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name=" " placeholder="Masukan  ">
                                </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
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
                    <div class="card modal-dialog modal-lg" role="document">
                            <div class="modal-content"> <div class="modal-content">
                                           
                                              
               <div class="modal-header">
                       <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                           </div>
                       <div class="modal-body">

                       <form class="form-horizontal">
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label for=" _address_2"> </label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id=" _address_2" class="form-control" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label for=" _address_2"> </label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id=" _address_2" class="form-control" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label for=" _address_2"> </label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id=" _address_2" class="form-control" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label for=" _address_2"> </label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id=" _address_2" class="form-control" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>

                          
                               
                           <div class="modal-footer">
                               <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                   <button type="button" class="btn bg-grey waves-effect">SAVE CHANGES</button>
                                                   <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                               </div>
                           </div>
                       </form>
               </div></div></div> </div>  </div>

</section>