<section class="content">
    
<div class="container-fluid">
                                                <div class="block-header">
                                                    <h2>Manajemen Menu Program Kegiatan</h2>
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
                                        <th>Id Kegiatan</th>
                                        <th>Nama Kegiatan </th>
                                        <th>Aksi</th>
                                      
                                    
                                
                                    </tr>
                                </thead>
                                <tbody> 
                                    
                                      
                                <?php  foreach ($kegiatan as $keg) : ?>
                                        <td><?=  $keg['id_kegiatan']; ?></td>
                                        <td><?=  $keg['kegiatan']; ?></td>


                                       
                                                                             
                                        <td>
                                            <button type="button" class="btn btn bg-blue waves-effect" data-toggle="modal" data-target="#detail">
                                                <i class="material-icons">error_outline</i></button>
                                            <button type="button" class="btn btn bg-grey waves-effect" data-toggle="modal" data-target="#edit">
                                                <i class="material-icons">mode_edit</i></button>
                                                 
 
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
                   <h4 class="modal-title" id="defaultModalLabel">Tambah Data Program Kegiatan</h4>
                       </div>
                   <div class="modal-body">

 
                   <form action="manajemenkegiatan/tambah" method="post">  
                                   
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>Nama Kegiatan </label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="kegiatan" placeholder=" ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>Pengertian</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                        <textarea rows="4" input type="text" class="form-control no-resize" name="pengertian" placeholder=" "></textarea>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Tujuan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                     <textarea rows="5" input type="text"  class="form-control no-resize" name="tujuan" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Mekanisme</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" input type="text"  class="form-control no-resize" name="keg_mekanisme" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Lembaga</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" input type="text"  class="form-control no-resize" name="keg_lembaga" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Mahasiswa</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5"   class="form-control no-resize" name="keg_mahasiswa" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Penilaian</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" input type="text"  class="form-control no-resize" name="keg_penilaian" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>SKS </label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="sks" placeholder=" ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       
                            <div class="modal-footer">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" name="tambah" class="btn bg-grey waves-effect">Simpan</button>
                                                    <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                   </form>
           </div>
       </div>
    </div> 
  </div>  
</div>
   <!-- {{-- -------------------------- Pop Up - Form ------------------------------------------ --}} -->

   <div class="modal fade" id="detail" tabindex="-1" role="dialog">
                <div class="card modal-dialog" role="document">
                        <div class="modal-content"> <div class="modal-content">
                                       
                                          
           <div class="modal-header">
                   <h4 class="modal-title" id="defaultModalLabel">Tambah Data Program Kegiatan</h4>
                       </div>
                   <div class="modal-body">

                    <form class="form-horizontal">  
                                 <form action>
                                   
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>Nama Kegiatan </label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="id_role" placeholder="Masukan  ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>Pengertian</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder=" "></textarea>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Tujuan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                     <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Mekanisme</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Lembaga</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Mahasiswa</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Penilaian</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Sks</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
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
           </div>
       </div>
    </div> 
  </div>  
</div>
              
             
       
                <!-- {{-- -------------------------- Pop Up - edit------------------------------------------ --}} -->

                <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                <div class="card modal-dialog" role="document">
                        <div class="modal-content"> <div class="modal-content">
                                       
                                          
           <div class="modal-header">
                   <h4 class="modal-title" id="defaultModalLabel">Tambah Data Program Kegiatan</h4>
                       </div>
                   <div class="modal-body">

                                 <form action>
                                   
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>Nama Kegiatan </label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="id_role" placeholder="Masukan  ">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label>Pengertian</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder=" "></textarea>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Tujuan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                     <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Mekanisme</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Lembaga</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Mahasiswa</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Kegiatan Penilaian</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="">Sks</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="5" class="form-control no-resize" placeholder=" "></textarea>
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
           </div>
       </div>
    </div> 
  </div>  
</div>
</section>