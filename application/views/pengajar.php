    <section class="content-header">
      <h1>
        Profile Pengajar
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pengajar</a></li>
        <li><a href="#">Add Pengajar</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Information Pengajar</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <!--Boddy Input Pegawai -->
        <form action="<?php echo base_url();?>index.php/c_mapel/insert_pengajar" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
      <!-- Pilih Guru Mengajar -->
                <div class="form-group">
                  <label>Kode Pengajar</label>
                  <input type="text" class="form-control" id="kdpengajar" name="kdpengajar" placeholder="Kode Pengajar" required>
                </div>

                    <div class="form-group">
               <label>Pilih Guru Mengajar</label>
               <select class="form-control select2" name="pengajar" readonly style="width: 100%;>
                  <option value=""> Pilih Pengajar</option>
                     <?php 
                        $nip=$data->nip;
                        $nip=$this->db->query("select * from guru")->result();
                            if(!empty($nip)){
                            foreach($nip as $pengajar){
                                if($pengajar->nip ==$nip){
                                  echo "<option value='".$pengajar->nip."'selected>".$pengajar->nip."</option>";
                                }else{
                                  echo "<option value='".$pengajar->nip."'>".$pengajar->nip."  &nbsp;&nbsp;&nbsp; ".$pengajar->namaguru."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>

      
      <!-- Pilih Id Kelas -->
               <div class="form-group">
               <label>Pilih Id Kelas</label>
               <select class="form-control select2" name="kdkelas" readonly style="width: 100%;>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("select * from kelas")->result();
                            if(!empty($idkelas)){
                            foreach($idkelas as $kdkelas){
                                if($kdkelas->idkelas ==$idkelas){
                                  echo "<option value='".$kdkelas->idkelas."'selected>".$kdkelas->idkelas."</option>";
                                }else{
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."  &nbsp;&nbsp;&nbsp;  ".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
              <!-- INPUT DATA NIS SISWA -->

              <div class="form-group">
               <label>Pilih Mata Pelajaran</label>
               <select class="form-control select2" name="kdmapel" readonly style="width: 100%;>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idmapel=$data->idmapel;
                        $idmapel=$this->db->query("select * from mapel")->result();
                            if(!empty($idmapel)){
                            foreach($idmapel as $kdmapel){
                                if($kdmapel->idmapel ==$idmapel){
                                  echo "<option value='".$kdmapel->idmapel."'selected>".$kdmapel->idmapel."</option>";
                                }else{
                                  echo "<option value='".$kdmapel->idmapel."'>".$kdmapel->idmapel."  &nbsp;&nbsp;&nbsp;  ".$kdmapel->namamapel."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
                <p id="demo"></p>
              </div>
        
            <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <input type="text" class="form-control" id="tahunajaran" name="tahunajaran" placeholder="Tahun ajaran" required>
            </div>
      
      <div class="form-group">
                <label>Semester</label>
                <select class="form-control select2" name="semester" required style="width: 100%;">
                  <option selected="selected">Pilih Semester</option>
                  <option value="Genap">Genap</option>
                  <option value="Ganjil" >Ganjil</option>
                </select>
              </div>



              <!-- Untuk Input Nama Siswa -->


            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="button" value="Cancel" class="btn btn-primary" onClick="history.go(-1);" />
        </div>
      </div>
  </section>
  </div>