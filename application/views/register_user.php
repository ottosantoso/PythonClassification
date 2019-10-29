       
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" method="post" action="<?php echo site_url()?>/c_admin/insert_user"> 
                <div class="form-group">
                <div class="col-xs-12">
                <label> Id Register </label>
                <select class="form-control select2" name="idregistrasi" readonly style="width: 100%;>
                  <option value=""> Pilih Pengajar</option>
                     <?php 
                        $nip=$data->nip;
                        $nip=$this->db->query("select * from guru")->result();
                            if(!empty($nip)){
                            foreach($nip as $idregistrasi){
                                if($idregistrasi->nip ==$nip){
                                  echo "<option value='".$idregistrasi->nip."'selected>".$idregistrasi->nip."</option>";
                                }else{
                                  echo "<option value='".$idregistrasi->nip."'>".$idregistrasi->nip."&nbsp;&nbsp;&nbsp;".$idregistrasi->namaguru."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
                </div>
                </div>

                <div class="form-group">
                <div class="col-xs-12">
                <label> Username </label>
                <select class="form-control select2" name="username" readonly style="width: 100%;>
                  <option value="">Username berdasarkan Kode Pengajar</option>
                     <?php 
                        $kdpengajar=$data->kdpengajar;
                        $kdpengajar=$this->db->query("select namaguru, nip, kdpengajar from Pengajar join guru using(nip) ")->result();
                            if(!empty($kdpengajar)){
                            foreach($kdpengajar as $username){
                                if($username->kdpengajar ==$kdpengajar){
                                  echo "<option value='".$username->kdpengajar."'selected>".$username->namaguru."</option>";
                                }else{
                                  echo "<option value='".$username->kdpengajar."'>".$username->namaguru."&nbsp;&nbsp;||&nbsp;&nbsp;  ".$username->kdpengajar."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
                </div>
                </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                        <label>Password</label>
                            <input class="form-control input-lg" type="password" name="password" required placeholder="Password">
                        </div>
                    </div>

                <div class="form-group">
                    <div class="col-xs-12">
                    <label>Status Admin</label>
                    <select class="form-control" name="statusadmin" required style="width: 100%;" required="" >
                        <option selected="selected">Pilih Status Admin * YA atau TIDAK *</option>
                        <option value="Yes">Ya</option>
                        <option value="No">Tidak</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                    <label>Status Guru</label>
                    <select class="form-control" name="statusguru" required style="width: 100%;" required="" >
                        <option selected="selected">Pilih Status Guru * YA atau TIDAK *</option>
                        <option value="Yes">Ya</option>
                        <option value="No">Tidak</option>
                    </select>
                    </div>
                </div>

                    <div class="form-group">
                    <div class="col-xs-12">
                    <label>Wali Kelas</label>
                    <select class="form-control" name="statuswali" required style="width: 100%;" required="" >
                        <option selected="selected">Pilih Status Wali Kelas * YA atau TIDAK *</option>
                        <option value="Yes">Ya</option>
                        <option value="No">Tidak</option>
                    </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                    <label>Kepala Sekolah</label>
                    <select class="form-control" name="statuskepalasekolah" required style="width: 100%;" required="" >
                        <option selected="selected">Pilih Status Kepala Sekolah * YA atau TIDAK *</option>
                        <option value="Yes">Ya</option>
                        <option value="No">Tidak</option>
                    </select>
                    </div>
                </div>
<!--
                <div class="form-group">
                <div class="col-xs-12">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="userfile">
                  </div>
                </div>
-->
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-success waves-effect waves-light btn-lg w-lg" type="submit">Register</button> 
                            <input type="button" value="Cancel" class="btn btn-primary" onClick="history.go(-1);" />
                            
                        </div>

                    </div>
                </form> 
                </div>                                 
</div>