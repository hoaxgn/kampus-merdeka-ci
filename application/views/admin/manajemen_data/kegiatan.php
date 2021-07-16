<section class="content">
    
<div class="container-fluid">
                                                <div class="block-header">
                                                    <h2>Manajemen User</h2>
                                                </div>
              <!-- Striped Rows -->
                                              
           <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <button type="button" class="btn bg-blue waves-effect mb-5" data-toggle="modal" data-target="#tambah">+ Tambah Data Program Kegiatan</button>
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
                                        <th>ID Program Kegiatan</th>
                                        <th>ID Kegiatan</th>
                                        <th>Id Mahasiswa</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Lokasi</th>
                                        <th>Jenis</th>
                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    
                                      
                                    
                                    <td>1</td>
                                        <td>id_kegiatan</td>
                                        <td>id_mhs</td>
                                        <td>nama_kegiatan</td>                                       
                                        <td>lokasi</td>
                                        <td>jenis</td>
                                       
                                                                             
                                        <td>
                                            <button type="button" class="btn btn bg-grey waves-effect" data-toggle="modal" data-target="#edit">
                                                <i class="material-icons">mode_edit</i></button>
                                                <a href=""></a>
                                            <button type="button" class="btn btn bg-red waves-effect">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                  

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
                   <h4 class="modal-title" id="defaultModalLabel">Tambah Data User</h4>
                       </div>
                   <div class="modal-body">

                    <form class="form-horizontal">  
                                 <form action>
                                   
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>ID Role</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="string"  class="form-control" name="id_role" placeholder="Masukan ID Role">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="email_address_2">Nama</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="nama" placeholder="Masukan Nama">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Email</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name="email" placeholder="Masukan Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Status</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" name="status" placeholder="Masukan Status">
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
                                   <label for="email_address_2">ID Mahasiswa</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id="email_address_2" class="form-control" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label for="email_address_2">ID Program Kegiatan</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id="email_address_2" class="form-control" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label for="email_address_2">SKS</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id="email_address_2" class="form-control" placeholder="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label for="email_address_2">Keterangan</label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                           <input type="text" id="email_address_2" class="form-control" placeholder="">
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