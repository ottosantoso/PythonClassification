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
            <div class="col-md-6">
        <!-- NIP GURU -->
        <?php 
              $nipGuru= $this->session->userdata('username');
              $query=$this->db->query("select * from pengajar join guru using(nip) where kdpengajar='".$nipGuru."' limit 0,1")->result();
			  $nip='';
             ?>
              <div class="form-group">
                <label>NIP</label>
                <?php 
                foreach($query as $query){ echo '<textarea class="form-control" id="Nip" name="nip" value='. $query->nip.' readonly>'.$query->nip.'</textarea>'; }
				$nip=$query->nip;
				?>
                </div>
            <!--Batas NIP-->
            <?php 
              $nipGuru= $this->session->userdata('username');
              $query=$this->db->query("select * from pengajar join guru using(nip) where kdpengajar='".$nipGuru."' limit 0,1")->result();
			  $nama='';
			 ?>
      <!-- Nama Guru -->
              <div class="form-group">
                <label>Nama Guru</label><?php
                   foreach($query as $query){
                    echo '<textarea class="form-control" id="Nip" name="nip" value='. $query->namaguru.' readonly>'.$query->namaguru.'</textarea>';
                   }
                $nama=$query->namaguru;
				?>
                
              </div>
			  
			  <?php 
              $nipGuru= $this->session->userdata('username');
              $query=$this->db->query("select * from kelas join pengajar using(idkelas) where kdpengajar='".$nipGuru."' limit 0,1")->result();
			  $kelas='';
			  $semester='';
			  $thnajar='';
			  $idkelas='';
			 ?>
      <!-- Nama Guru -->
              <div class="form-group">
                <label>Kelas</label><?php
                   foreach($query as $query){
                    echo '<textarea class="form-control" id="Nip" name="nip" value='. $query->idkelas.' readonly>'.$query->namakelas.'</textarea>';
                   }
                $kelas=$query->namakelas;
				$semester=$query->semester;
				$thnajar=$query->tahunajaran;
				$idkelas=$query->idkelas;
			 ?>
				
              </div>
        
      <!-- Proses Memasukkan Nilai Dalam Tabel -->
      <div class="col-xs-12">
       <div class="box-body">

          <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>NIS</th>
              <th>NAMA</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <form action="<?php echo base_url();?>index.php/c_wali/view_siswa_wali" method="post">
          <?php foreach($list_data->result() as $row) { ?>
            <tr>
              <th><a href="<?php echo base_url();?>index.php/c_wali/raport?kelas=<?php echo $kelas;?>&guru=<?php echo $nama;?>&nama=<?php echo $row->namasiswa;?>
			  &nis=<?php echo $row->nis;?>&semester=<?php echo $semester; ?>&thnajar=<?php echo $thnajar; ?>&idkelas=<?php echo $idkelas; ?>" target="_blank"> <?php echo $row->nis;?> </a></th>
              <th><?php echo $row->namasiswa;?></th>
              <th><a href="<?php echo base_url();?>index.php/c_deskripsi/view_detail_deskripsi?nis=<?php echo $row->nis;?>" target="_blank">Deskripsi</a></th>          
            </tr>
         <?php } ?>
          </tbody>
          </table>
        </div> 
        </form>   
             <!-- /.form-group -->
            </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
  </section>
  
  </div>