         <section class="content-header">
 
      <h1>
        Upload Data Guru
        <small>Import</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Guru</a></li>
        <li><a href="#">tambah guru</a></li>
      </ol>
      <div class="form-group">
      <form action="<?php echo base_url();?>index.php/c_admin/upload/" method="post" enctype="multipart/form-data">
                <input type="file" name="userfile" id="addToTable" class="btn bg-maroon margin"/>
                <input type="submit" value="Upload file"/>

        </form>
        </div>  
    </section>
        <form action="<?php echo base_url();?>index.php/c_admin/insert_guru" method="post">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Pegawai</h3>

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
                  <label for="exampleInputNIP">Nomor Induk Pegawai</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan Nomor Induk Pegawai" required="numeric">
                </div>
              <div class="form-group">
                  <label for="exampleInputName">Nama Pegawai</label>
                  <input type="text" class="form-control" id="namapegawai" name="namaguru" placeholder="Masukkan Nama Pegawai" required="Nama Pegawai Harus di Isi">
                </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" name="jeniskelamin" style="width: 100%;" required="Jenis kelamin harus diisi">
                  <option selected="selected">Pilih Jenis Kelamin</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                  <label>Agama</label>
                  <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required="Agama harus di isi">
              </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Sekarang" required="Alamat harus di isi">
              </div>
              <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Input Tempat Lahir" required="Tempat Lahir harus di Isi">
              </div>
              <div class="form-group">
              <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="tanggallahir" placeholder="Masukkan Tanggal Lahir" required="Tanggal harus di isi">
                </div>
              </div>            
              <div class="form-group">
              <label>Status                
                  <input type="radio" name="status" class="minimal" value="Aktif" required> Aktif
                   <input type="radio" name="status" class="minimal" value="OFF" required> Tidak Aktif
              </label>
              </div>
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