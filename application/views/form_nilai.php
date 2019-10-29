    <!-- Main content -->
    <section class="content">

            <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Form Nilai</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
			<form class="form-horizontal" action="<?php echo base_url();?>index.php/c_guru/insert_nilai" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3"  class="col-sm-2 control-label">Tugas 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="tugas1" class="form-control" id="inputEmail3" placeholder="tugas1">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3"  class="col-sm-2 control-label">Tugas 2</label>
                  <div class="col-sm-10">
                    <input type="tex" name="tugas2" class="form-control" id="inputPassword3" placeholder="tugas2">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tugas 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="tugas3" class="form-control" id="inputEmail3" placeholder="tugas3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tugas 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="tugas4" class="form-control" id="inputPassword3" placeholder="tugas4">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ujian Harian 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="harian1" class="form-control" id="inputEmail3" placeholder="U.Ujian Harian 1">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Ujian Harian 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="harian2" class="form-control" id="inputPassword3" placeholder="Ujian Harian 2">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ujian Harian 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="harian3" class="form-control" id="inputEmail3" placeholder="Ujian Harian 3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Ujian Harian 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="harian4" class="form-control" id="inputPassword3" placeholder="Ujian Harian 4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nilai UTS</label>
                  <div class="col-sm-10">
                    <input type="text" name="uts" class="form-control" id="inputEmail3" placeholder="uts">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nilai UAS</label>
                  <div class="col-sm-10">
                    <input type="text" name="uas" class="form-control" id="inputPassword3" placeholder="uas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nilai Keterampilan<br><span>(praktek)</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="praktek" class="form-control" id="inputPassword3" placeholder="praktek">
                  </div>
                </div>
				      <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nilai Sikap</label>
                  <div class="col-sm-10">
                    <input type="text" name="sikap" class="form-control" id="inputEmail3" placeholder="sikap">
                  </div>
                </div>
                
				
			  </div>  
              <!-- /.form-group -->
            </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
     

        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="button" value="Cancel" class="btn btn-primary" onClick="history.go(-1);" />
        </div>
      </div>
  </div>
</section>