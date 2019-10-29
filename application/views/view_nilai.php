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
             ?>
              <div class="form-group">
                <label>NIP</label>
                <?php 
                foreach($query as $query){ echo '<textarea class="form-control" id="Nip" name="nip" value='. $query->nip.' readonly>'.$query->nip.'</textarea>'; }?>
                </div>
            <!--Batas NIP-->
            <?php 
              $nipGuru= $this->session->userdata('username');
              $query=$this->db->query("select * from pengajar join guru using(nip) where kdpengajar='".$nipGuru."' limit 0,1")->result();
             ?>
      <!-- Nama Guru -->
              <div class="form-group">
                <label>Nama Guru</label><?php
                   foreach($query as $query){
                    echo '<textarea class="form-control" id="Nip" name="nip" value='. $query->namaguru.' readonly>'.$query->namaguru.'</textarea>';
                   }
                ?>
                
              </div>
         
             <form action="<?php echo base_url();?>index.php/c_guru/view_nilai" method="post">
      <!-- Mata Pelajaran Yang di Ajar -->        
              <div class="form-group">
                <label>Mata Pelajaran</label>
                <select class="form-control select2" id="kdmapel" name="kdmapel" readonly style="width: 100%;>
                  <option value=""> Pilih Mata Pelajaran</option>
                     <?php 
                        $idmapel=$data->idmapel;
                        $idmapel=$this->db->query("select DISTINCT  m.* from mapel m join pengajar p on p.idmapel=m.idmapel
                        where p.kdpengajar='".$nipGuru."'")->result();
                            if(!empty($idmapel)){
                            foreach($idmapel as $kdmapel){
                                if($kdmapel->idmapel ==$idmapel){
                                  echo "<option value='".$kdmapel->idmapel."'selected>".$kdmapel->idmapel."</option>";
                                }else{
                                  echo "<option value='".$kdmapel->idmapel."'>".$kdmapel->idmapel."&nbsp&nbsp&nbsp".$kdmapel->namamapel."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>

        <!-- Pilih ID Kelas -->
              <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
               <select class="form-control select2" id="kdkelas" name="kdkelas" readonly style="width: 100%;>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("select k.* from kelas k join pengajar p on p.idkelas=k.idkelas
                        where p.kdpengajar='".$nipGuru."'")->result();
                            if(!empty($idkelas)){
                            foreach($idkelas as $kdkelas){
                                if($kdkelas->idkelas ==$idkelas){
                                  echo "<option value='".$kdkelas->idkelas."'selected>".$kdkelas->idkelas."</option>";
                                }else{
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."&nbsp&nbsp&nbsp&nbsp".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
               <button type="submit" name="view"  value="1" class="btn btn-primary">View</button>
            
        </div>  
        </form>
      <!-- Proses Memasukkan Nilai Dalam Tabel -->
      <div class="col-xs-12">
       <div class="box-body">

          <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>NIS</th>
              <th>NAMA</th>
              <th>Rata-Rata Tugas</th>
              <th>Rata-Rata Harian</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Keterampilan</th>
              <th>Sikap</th>
              <th>Deskripsi</th>

            </tr>
          </thead>
          <tbody>
          <form action="<?php echo base_url();?>index.php/c_guru/insert_nilai" method="post">
          <?php $i=0; if(!empty($list_data)){;foreach($list_data as $row) { ?>
            <tr>
              <th><?php echo $row->nis;?></th>
              <input type="hidden" class="form-control" name="nis<?php echo $i;?>" placeholder="praktek" value="<?php  echo $row->nis;?>">
               <input type="hidden" class="form-control" name="id<?php echo $i;?>" placeholder="praktek" value="<?php  echo $row->idnilai;?>">
              <th><?php echo $row->namasiswa;?></th>              
              <th><input type="text" class="form-control" name="tugas<?php echo $i;?>" placeholder="tugas" value="<?php echo $row->tugas;?>"></th>
            <th><input type="text" class="form-control" name="harian<?php echo $i;?>" placeholder="harian" value="<?php echo $row->harian;?>"></th>
            <th><input type="text" class="form-control" name="uts<?php echo $i;?>" placeholder="uts" value="<?php echo $row->uts;?>"></th>
            <th><input type="text" class="form-control" name="uas<?php echo $i;?>" placeholder="uas" value="<?php echo $row->uas;?>"></th>
            <th><input type="text" class="form-control" name="keterampilan<?php echo $i;?>" placeholder="praktek" value="<?php echo $row->keterampilan;?>"></th>
            <th><input type="text" class="form-control" name="sikap<?php echo $i;?>" placeholder="sikap" value="<?php echo $row->sikap;?>"></th>
             <th><?php if($row->tugas!=0&&$row->harian!=0&&$row->uts!=0&&$row->uas!=0&&$row->keterampilan!=0&&$row->sikap!=0){?>
                 <button class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-fw fa-pencil"></i> 
                <a href="<?php echo base_url();?>index.php/c_deskripsi/form_deskripsi">add</a></button>
                <button class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-fw fa-eye"></i>
                <a href="<?php echo base_url();?>index.php/c_deskripsi/view_deskripsi">view</a></button> </button>
                <button class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-fw fa-trash-o"></i> 
                <a href="<?php echo base_url();?>index.php/c_deskripsi/delete_deskripsi">delete</a></button> </button>
                </button>
                <?php }?>
              </th>
            
            </tr>


          <input type="hidden" class="form-control" name="kdkelas" placeholder="praktek" value="<?php echo $row->idkelas;?>">

          <input type="hidden" class="form-control" name="kdmapel" placeholder="praktek" value="<?php echo $row->idmapel;?>">
         <?php $i++;}  } ?>
          </tbody>
          </table>
        </div> 
        <div class="box-footer">
          <input type="hidden" class="form-control" name="nip" placeholder="praktek" value="<?php echo $nipGuru;?>">
          <input type="hidden" class="form-control" name="nilaii" placeholder="praktek" value="<?php echo $i;?>">
        </form>   
             <!-- /.form-group -->
            </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
  </section>
  
  </div>