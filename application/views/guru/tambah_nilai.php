<!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Pengisian Nilai</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-xs-12">
			  <!-- Pilih NIS -->
              <div class="form-group">
                <label>Pilih NIP</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">19289247993294 || Asih Mahayu</option>
				  <option selected="selected">19234509231242 || Muh. Bend Tra</option>
                </select>
              </div>
						
			<!-- Pilih ID KELAS -->
              <div class="form-group">
                <label>Pilih ID KELAS</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">VII00A || VII A</option>
				  <option selected="selected">VII00B || VII B</option>
                </select>
              </div>
			   
			  <!-- Pilih ID MAPEL -->
              <div class="form-group">
                <label>Pilih ID MAPEL</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">MPL001 | | IPA</option>
				  <option selected="selected">MPL002 | | IPS</option>
                </select>
              </div>
			  
			<!-- Masukkan Data Semester -->
			<div class="form-group">
                  <label>Semester</label>
                 <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Ganjil</option>
				  <option>Genap</option>
                </select>
            </div>
			  
			<!-- Proses Memasukkan Nilai Dalam Tabel -->
			 <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>NAMA</th>
				  <th>Tugas 1</th>
				  <th>Tugas 2</th>
				  <th>Tugas 3</th>
				  <th>Tugas 4</th>
				  <th>harian 1</th>
				  <th>harian 2</th>
				  <th>harian 3</th>
				  <th>harian 4</th>
				  <th>UTS</th>
				  <th>UAS</th>
				  <th>Sikap</th>
                </tr>
                </thead>
				<tbody>
					<tr>
						<th></th>
						<th></th>
						<th><input type="text" class="form-control" placeholder="tugas1"></th>
						<th><input type="text" class="form-control" placeholder="tugas2"></th>
						<th><input type="text" class="form-control" placeholder="tugas3"></th>
						<th><input type="text" class="form-control" placeholder="tugas4"></th>
						<th><input type="text" class="form-control" placeholder="harian1"></th>
						<th><input type="text" class="form-control" placeholder="harian2"></th>
						<th><input type="text" class="form-control" placeholder="harian3"></th>
						<th><input type="text" class="form-control" placeholder="harian4"></th>
						<th><input type="text" class="form-control" placeholder="UTS"></th>
						<th><input type="text" class="form-control" placeholder="UAS"></th>
						<th><input type="text" class="form-control" placeholder="Sikap"></th>		
					</tr>
				</tbody>
            </table>
            </div>
  
            
              <!-- /.form-group -->
            </div>
  
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
				<button type="submit" class="btn btn-info pull-left">Submit</button>
                <button type="submit" class="btn btn-default pull-right">Cancel</button>
        </div>
      </div>
	</section>
	
  </div>