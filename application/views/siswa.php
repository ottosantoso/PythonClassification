 <section class="content-header">
 
      <h1>
        Upload Data Siswa
        <small>Import</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Student</a></li>
        <li><a href="#">Add Students</a></li>
      </ol>
      <div class="form-group">
      <form action="<?php echo base_url();?>index.php/c_siswa/upload/" method="post" enctype="multipart/form-data">
                <input type="file" name="userfile" id="addToTable" class="btn bg-maroon margin"/>
                <input type="submit" value="Upload file"/>

        </form>
        </div>  
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- SELECT2 EXAMPLE --> 

       <form action="<?php echo base_url();?>index.php/c_siswa/insert_siswa" method="post">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Students</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <!--Boddy Input Pegawai -->      

        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputNIP">NIS</label>
                  <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan Nomor Induk Siswa" required>
                </div>
              <div class="form-group">
                  <label for="exampleInputName">Nama Siswa</label>
                  <input type="text" class="form-control" id="namasiswa" name="namasiswa" placeholder="Masukkan Nama Siswa" required>
                </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" name="jeniskelamin" style="width: 100%;" required>
                  <option selected="selected">Pilih Jenis Kelamin</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                  <label>Agama</label>
                  <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required>
              </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Sekarang" required>
              </div>
              <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Input Tempat Lahir" required>
              </div>
                            <div class="form-group">
              <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="tanggallahir" placeholder="Masukkan Tanggal Lahir" required>
                </div>
              </div>   
              <!--         
              <div class="form-group">
              <label>Status                
                  <input type="radio" name="status" class="minimal" value="Aktif"> Aktif
                   <input type="radio" name="status" class="minimal" value="OFF"> Tidak Aktif
              </label>
              </div>
              -->
              <!-- /.form-group -->
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