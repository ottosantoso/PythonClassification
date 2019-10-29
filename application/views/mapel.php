    <section class="content-header">
      <h1>
        Mata Pelajaran
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Maple</a></li>
        <li><a href="#">Add Maple</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Information Mapel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <!--Boddy Input Pegawai -->
        <form action="<?php echo base_url();?>index.php/c_mapel/insert_mapel" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputNIP">Id Mapel</label>
                  <input type="text" class="form-control" id="idmapel" name="idmapel" placeholder="Masukkan Id Mapel" required="Mapel Haru di isi">
                </div>
              <div class="form-group">
                  <label>Nama Mapel</label>
                  <input type="text" class="form-control" id="namamapel" name="namamapel" placeholder="Masukkan Nama Mapel" required="Nama Mapel Harus di isi">
                </div>
              <div class="form-group">
                  <label>KKM</label>
                  <input type="text" class="form-control" id="kkm" name="kkm" placeholder="Masukkan KKM" required="KKM harus di isi">
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
    </form>
  </section>
