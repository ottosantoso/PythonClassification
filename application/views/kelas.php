    <section class="content-header">
      <h1>
        Informasi Kelas
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
        <form action="<?php echo base_url();?>index.php/c_kelas/insert_kelas" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputNIP">Id Kelas</label>
                  <input type="text" class="form-control" id="idkelas" name="idkelas" placeholder="Masukkan Id Kelas" required>
                </div>
              <div class="form-group">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control" id="namakelas" name="namakelas" placeholder="Masukkan Nama Kelas" required>
                </div>
              <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <input type="text" class="form-control" id="tahunajaran" name="tahunajaran" placeholder="Masukkan Tahun Ajaran" required>
              </div>
              <div class="form-group">
                    <label>Wali Kelas</label>
               <select class="form-control select2" name="nip" readonly style="width: 100%; required>
                  <option value=""> Pilih Wali Kelas </option>
                     <?php 
                        $nip=$data->nip;
                        $nip=$this->db->query("select * from guru")->result();
                            if(!empty($nip)){
                            foreach($nip as $walikelas){
                                if($walikelas->nip ==$nip){
                                  echo "<option value='".$walikelas->nip."'selected>".$walikelas->namaguru."</option>";
                                }else{
                                  echo "<option value='".$walikelas->nip."'>".$walikelas->namaguru."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
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