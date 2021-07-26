<section class="content">
    
<div class="container-fluid">
                  <div class="block-header">
                      <h1>pembukaan Pendaftaran Program Kegiatan</h1>
                                                </div>
              <!-- Striped Rows -->
                                              
           <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <button type="button" class="btn bg-blue waves-effect mb-5" data-toggle="modal" data-target="#tambah">+ Tambah Data Program</button>
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
                                        <th>Id Program Kegiatan </th>
                                        <th>Nama Program Kegiatan </th>
                                        <th>Status</th>                                                                                                             
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                      
                                <?php $no=1;
                                 foreach ($kegiatan as $keg) : ?>
                                        <td><?=  $no++ ?></td>
                                        <td><?=  $keg['id_kegiatan']; ?></td>
                                        <td><?=  $keg['kegiatan']; ?></td>
                                        <td>Aktif</td>
                                                                                                     
                                        <td>
                                            
                                              <button type="button" class="btn btn bg-blue waves-effect" data-toggle="modal" data-target="#status">
                                                <i class="material-icons">mode_edit</i></button>
                                            <button type="button" class="btn btn bg-red waves-effect">
                                                <i class="material-icons">delete</i></button>
                                            
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

               <div class="modal fade" id="status" tabindex="-1" role="dialog">
                <div class="card modal-dialog" role="document">
                        <div class="modal-content"> <div class="modal-content">
                                       
                                          
           <div class="modal-header">
                   <h4 class="modal-title" id="defaultModalLabel">Status Program Kegiatan</h4>
                       </div>
                   <div class="modal-body">

                    <form class="form-horizontal">  
                                 <form action>
                                    
                        <div class="row clearfix">
                               <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                   <label>Nama Program Kegiatan </label>
                               </div>
                               <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                   <div class="form-group">
                                       <div class="form-line">
                                       <input type="text" class="form-control" placeholder="Kegiatan Wirausaha" disabled />
                                       </div>
                                   </div>
                               </div>
                           </div>
                                          <div class=" form-group">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="role">Status Kegiatan</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                    <select class="form-control show-tick" id="role" name='role'>
                                                        <option value="select">-- Status --</option>
                                                        <option value="1">Aktif</option>
                                                        <option value="2">NonAktif</option>
                                                       

                                                    </select>
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