    <form action="<?php echo base_url();?>index.php/c_mapel/update_pengajar" method="post"> 
  <section class="content-header">
      <h1>
        Profile Pengajar
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Pengajar</a></li>
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

        
        <div class="box-body">
    <?php  foreach($list_data->result() as $row) {?>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                  <label>Kode Pengajar</label>
                  <input type="text" class="form-control" id="kdpengajar" name="kdpengajar" value="<?php echo $row->kdpengajar;?>" readonly>
                </div>
              <div class="form-group">
                  <label for="exampleInputNIP">NIP Pengajar </label>
                  <input type="text" class="form-control" id="Nip" name="nip" value=<?php echo $row->nip;?>".<?php echo $row->namaguru;?>." readonly>
              </div>
             <!--   
              <div class="form-group">
                  <label>NIP Pengajar</label>
                  <select class="form-control select2" name="nip" readonly style="width: 100%;>
                  <option value=""> Pilih NIP Pengajar </option>
                     < ?php 
                        $nip=$data->nip;
                        $nip=$this->db->query("select * from guru")->result();
                            if(!empty($nip)){
                            foreach($nip as $pengajar){
                                if($pengajar->nip ==$nip){
                                  echo "<option value='".$pengajar->nip."'selected>".$pengajar->nip."</option>";
                                }else{
                                  echo "<option value='".$pengajar->nip."'>".$pengajar->nip."  ||   ".$pengajar->namaguru."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
                </div> -->
              <div class="form-group">
                  <label>Kelas Mengajar</label>
                  <select class="form-control select2" name="idkelas" readonly style="width: 100%;>
                  <option value=""> Pilih Kelas Mengajar </option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("select * from kelas")->result();
                            if(!empty($idkelas)){
                            foreach($idkelas as $kdkelas){
                                if($kdkelas->idkelas ==$idkelas){
                                  echo "<option value='".$kdkelas->idkelas."'selected>".$kdkelas->idkelas."</option>";
                                }else{
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."  ||   ".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
              <div class="form-group">
                <label>Pilih Mata Pelajaran</label>
                <select class="form-control select2" name="idmapel" readonly style="width: 100%;>
                  <option value=""> Pilih Kelas Mengajar </option>
                     <?php 
                        $idmapel=$data->idmapel;
                        $idmapel=$this->db->query("select * from mapel")->result();
                            if(!empty($idmapel)){
                            foreach($idmapel as $kdmapel){
                                if($kdmapel->idmapel ==$idmapel){
                                  echo "<option value='".$kdmapel->idmapel."'selected>".$kdmapel->idmapel."</option>";
                                }else{
                                  echo "<option value='".$kdmapel->idmapel."'>".$kdmapel->idmapel."  ||   ".$kdmapel->namamapel."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
              <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <input type="text" class="form-control" id="tahunajaran" name="tahunajaran" value=<?php echo $row->tahunajaran;?> placeholder="Tahun Ajaran">
              </div>
              <div class="form-group">
                <label>Semester Mengajar</label>
                <select class="form-control select2" name="semester" style="width: 100%;">
                  <option selected="selected" value=<?php echo $row->semester ?> >Pilih Semester</option>
                  <option value="Ganjil">Ganjil</option>
                  <option value="Genap">Genap</option>
                </select>
              </div>

            <!-- /.col -->
          </div>
          </div>
       <?php  } ?>
      </div>
    
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="button" value="Cancel" class="btn btn-primary" onClick="history.go(-1);" />
        </div>
      </div>
  </section>
  </form>