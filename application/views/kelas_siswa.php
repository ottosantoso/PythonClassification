    <section class="content-header">
      <h1>
        Profile Class
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Class</a></li>
        <li><a href="#">Add Class</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Information Class</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <!--Boddy Input Pegawai -->
        <form action="<?php echo base_url();?>index.php/c_kelassiswa/insert_kelassiswa" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
               <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
               <select class="form-control select2" name="kdkelas" readonly style="width: 100%; required>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("select * from kelas")->result();
                            if(!empty($idkelas)){
                            foreach($idkelas as $kdkelas){
                                if($kdkelas->idkelas ==$idkelas){
                                  echo "<option value='".$kdkelas->idkelas."'selected>".$kdkelas->idkelas."</option>";
                                }else{
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."  | ^_^ |  ".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
              <!-- INPUT DATA NIS SISWA -->

              <div class="form-group">
               <label>Pilih NIS Siswa</label>
               <select class="form-control select2" name="nis" id="nis" onchange="myFunction()" readonly style="width: 100%;>
                  <option value=""> Pilih NIS Siswa</option>
                     <?php 
                        $nis=$data->nis;
                        $nis=$this->db->query("select * from siswa")->result();
                            if(!empty($nis)){
                            foreach($nis as $niskelas){
                                if($niskelas->nis ==$nis){
                                  echo "<option value='".$niskelas->nis."'selected>".$niskelas->nis."</option>";
                                }else{
                                  echo "<option value='".$niskelas->nis." - ".$niskelas->namasiswa."'>".$niskelas->nis."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
                <p id="demo"></p>
              </div>

              <!-- Untuk Input Nama Siswa -->

              <div class="form-group">
               <!--<label>Nama Siswa</label> -->
               <input type="text" class="form-control" id="namasiswa" name="namasiswa" placeholder="Nama Siswa" readonly="">
              </div>
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