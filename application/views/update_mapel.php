    <form action="<?php echo base_url();?>index.php/c_mapel/update_mapel" method="post"> 
  <section class="content-header">
      <h1>
        Mata Pelajaran
        <small>Update</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Mapel</a></li>
        <li><a href="#"> Update Mapel </a></li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Mata Pelajaran</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <!--Boddy Ubah Mapel -->

        
        <div class="box-body">
    <?php  foreach($list_data->result() as $row) {?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputNIP">Id Mata Pelajaran</label>
                  <input type="text" class="form-control" id="idmapel" name="idmapel" value=<?php echo $row->idmapel;?> readonly>
                </div>
              <div class="form-group">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control" id="idmapel" name="namamapel" value=<?php echo $row->namamapel;?> placeholder="Nama Mata Pelajaran ">
                </div>
              <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <input type="text" class="form-control" id="kkm" name="kkm" value=<?php echo $row->kkm;?> placeholder="Masukkan Nilai KKM">
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