<!-- Main content -->
<form action="<?php echo base_url();?>index.php/c_deskripsi/insert_deskripsi" method="post">
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Subjects</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <!--Boddy Input Pegawai -->
        <div class="box-body">
          <div class="row">
          <div class="form-group">
            <form action="<?php echo base_url();?>index.php/c_deskripsi/upload/" method="post" enctype="multipart/form-data">
                <input type="file" name="userfile" id="addToTable" class="btn bg-maroon margin"/>
                <input type="submit" value="Upload file"/>

          </form>
          </div>

          <?php
          $msg=$this->session->flashdata('error');
          if(!empty($msg)){ ?>
                    <label for="exampleInputemail"><?php echo $msg; ?></label>
           <?php } ?>
           
           <?php
              $nipGuru= $this->session->userdata('username');
              $query=$this->db->query("select * from pengajar join guru using(nip) where kdpengajar='".$nipGuru."'")->result();
             ?>
          <?php  foreach($list_data->result() as $row) {?>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputemail">ID Nilai</label>
                  <input type="text" class="form-control" id="idnilai" name="idnilai" value="<?php echo $row->idnilai;?>" placeholder=""  readonly>
              </div>
				      <div class="form-group">
                  <label for="exampleInputemail">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $row->nip;?>" placeholder=" " readonly>
                </div>
				      <div class="form-group">
                  <label for="exampleInputemail">NIS</label>
                  <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $row->nis;?>" placeholder=" " readonly>
                </div>
				      <div class="form-group">
                  <label for="exampleInputemail">ID Mapel</label>
                  <input type="text" class="form-control" id="idmapel" name="idmapel" value="<?php echo $row->idmapel;?>" placeholder=" " readonly>
                </div>
				      <div class="form-group">
                  <label for="exampleInputemail">ID Kelas</label>
                  <input type="text" class="form-control" id="idkelas" name="idkelas" value="<?php echo $row->idkelas;?>" placeholder=" " readonly>
                </div>
				
              <div class="form-group">
                  <label>Deskripsi Pengetahuan</label>
                  <textarea class="form-control" rows="3" name="pengetahuan" placeholder="Masukkan Deskripsi pengetahuan" required></textarea> <br>
               </div>
			   <div class="form-group">
                  <label>Deskripsi Keterampilan</label>
				          <textarea class="form-control" name="keterampilan" rows="3" placeholder="Masukkan Deskripsi keterampilan" required></textarea>
				 </div>
			   <div class="form-group">
              <label>Deskripsi Sikap</label>
				      <textarea class="form-control" name="sikap" rows="3" placeholder="Masukkan Deskripsi sikap" required></textarea>
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
        <?php } ?>
      </div>
  </section>
  </div>