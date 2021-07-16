<section class="content">
    
<div class="container-fluid">
                                                <div class="block-header">
                                                    <h1>Manajemen User</h1>
                                                </div>
              <!-- Striped Rows -->
                                              
           <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <button type="button" class="btn bg-blue waves-effect mb-5" data-toggle="modal" data-target="#tambah">+ Tambah Data User</button>
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
                                        
                                         
                                        <th>ID User</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                          
                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    
                                <?php 
                             
                                  foreach ($user as $us) : ?>
                                    <tr>
                                    
                                        <td><?=  $us['id_user']; ?></td>
                                        <td><?=  $us['username']; ?></td>
                                        <td><?=  $us['password']; ?></td>
                                        <td><?=  $us['role']; ?></td>                                       
                                       
                                        
                                        
                                      
                                                                             
                                        <td>
                                            <button type="button" class="btn btn bg-grey waves-effect" data-toggle="modal" data-target="#edit">
                                                <i class="material-icons">mode_edit</i></button>

                                                <a href="<?= base_url(); ?>admin/manajemenuser/hapus/<?= $us['id_user']; ?>">
                                                <button type="button" class="btn btn bg-red waves-effect">
                                                <i class="material-icons">delete</i>
                                                </button></a>
 

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
                   <h4 class="modal-title" id="defaultModalLabel">Tambah Data User</h4>
                       </div>
                   <div class="modal-body">

                    
                    <form action="manajemenuser/tambah" method="post">
                                   
                       <div class=" form-group">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="username">Username</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="username" >
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class=" form-group">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="password">Password</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="password"  class="form-control" name="password" >
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class=" form-group">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="role">Role</label>
                           </div>
                           <div class="col-sm-6">
                                    <select class="form-control show-tick" id="role" name='role'>
                                        <option value="select">-- Please select --</option>
                                        <option value="1">1 - Admin</option>
                                        <option value="2">2 - Dosen</option>
                                        <option  value="3">3 - Mahasiswa</option>

                                    </select>
                                </div>
                       </div>
      
                    
                            <div class="modal-footer">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" name="tambah" class="btn bg-grey waves-effect">Simpan</button>
                                                    <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                   </form>
           </div></div>
        </div>
     </div>  
    </div>
               
                <!-- {{-- -------------------------- Pop Up - edit------------------------------------------ --}} -->

                <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                <div class="card modal-dialog" role="document">
                        <div class="modal-content"> <div class="modal-content">
                                       
                                          
           <div class="modal-header">
                   <h4 class="modal-title" id="defaultModalLabel">Edit Data User</h4>
                       </div>
                   <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $user['id_user']; ?>">  
                    
                    <form action="manajemenuser/ubah" method="post">
                                   
                       <div class=" form-group">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="username">Username</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="username" value="<?= $user['username']; ?>" >
                                       <small class="form-text text-danger"><?= form_error('username'); ?></small>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class=" form-group">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="password">Password</label>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                               <div class="form-group">
                                   <div class="form-line">
                                       <input type="text"  class="form-control" name="password" value="<?= $user['password']; ?>" >
                                       <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class=" form-group">
                           <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                               <label for="role">Role</label>
                           </div>
                           <div class="col-sm-6">
                           <select class="form-control show-tick" id="role" name='role'>
                                        <option value="select">-- Please select --</option>
                                        <option value="1">1 - Admin</option>
                                        <option value="2">2 - Dosen</option>
                                        <option  value="3">3 - Mahasiswa</option>

                                    </select>
                                </div>
                       </div>
      
                    
                            <div class="modal-footer">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" name="ubah" class="btn bg-grey waves-effect">Simpan</button>
                                                    <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                   </form>
           </div></div>
        </div>
     </div>  
    </div>

</section>