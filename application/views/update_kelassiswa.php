    <form action="<?php echo base_url();?>index.php/c_kelas/update_kelas" method="post"> 
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

        
        <div class="box-body">
    <?php  foreach($list_data->result() as $row) {?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
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
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."  | ^_^ |  ".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
              <div class="form-group">
                  <label>NIS</label>
                  <input type="text" class="form-control" id="nis" name="nis" value=<?php echo $row->nis;?> placeholder=" ">
                </div>
              <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" id="namasiswa" name="namasiswa" value=<?php echo $row->namasiswa;?> placeholder=" ">
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