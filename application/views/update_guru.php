        <form action="<?php echo base_url();?>index.php/c_admin/update_guru" method="post">
        <div class="box-header with-border">
          <h3 class="box-title">Ubah Data Pegawai</h3>

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
                  <label for="exampleInputNIP">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" value=<?php echo $row->nip;?> readonly>
                </div>
              <div class="form-group">
                  <label for="exampleInputName">Nama Pegawai</label>
                  <textarea class="form-control" id="namapegawai" name="namaguru" placeholder="Masukkan Nama Pegawai"><?php echo $row->namaguru ?> </textarea>
                </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" name="jeniskelamin" style="width: 100%;">
                  <option selected="selected" value=<?php echo $row->jeniskelamin ?> >Pilih Jenis Kelamin</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                  <label>Agama</label>
                  <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" value=<?php echo $row->agama ?> >
              </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Sekarang" value=<?php echo $row->alamat ?> >
              </div>
              <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value=<?php echo $row->tempatlahir ?> placeholder="Input Tempat Lahir">
              </div>
              <div class="form-group">
              <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="tanggallahir" placeholder="Masukkan Tanggal Lahir" value=<?php echo $row->tanggallahir ?> >
                </div>
              </div> 
              <div class="form-group">
              <label>Status                
                  <input type="radio" name="status" class="minimal" value="Aktif"> Aktif
                   <input type="radio" name="status" class="minimal" value="Tidak Aktif"> Tidak Aktif
              </label>
              </div>
              <!--           
              <div class="form-group">
              <label>Status                
                  <input type="radio" name="status" class="minimal" value=</div>?php echo $row->status?>  > Aktif
                   <input type="radio" name="status" class="minimal" value=</div>?php echo $row->status?> > Tidak Aktif
              </label>
              </div>-->
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <?php  } ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="button" value="Cancel" class="btn btn-primary" onClick="history.go(-1);" />
        </div>
      </div>
  </form>