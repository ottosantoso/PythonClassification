<section class="content-header">
      <h1>
        Data Siswa Yang belum Lulus
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="view_siswa.php"><i class="fa fa-files-o"></i> Siswa</a></li>
        <li class="active">Data Nilai</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa Kelulusan</h3> </br>        
              </div>
            <!-- /.box-header -->
            <form action="<?php echo base_url();?>index.php/c_kepalasekolah/view_mapel_nilai" method="post">
              <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
               <select class="form-control select2" name="kdmapel" >
                 <option value=""> Pilih Mata Pelasjatan</option>
                 <?php  
                      $idmapel=$data->idmapel;
                      $idmapel=$this->db->query("SELECT DISTINCT m.*
                                FROM nilai n JOIN siswa s on n.nis=s.nis 
                                join kelas k on n.idkelas=k.idkelas 
                                JOIN mapel m ON n.idmapel=m.idmapel 
                                join pengajar p ON n.nip=p.kdpengajar")->result();
                            if(!empty($idmapel)){
                              foreach ($idmapel as $kdmapel) {
                                if($kdmapel->idmapel ==$idmapel){
                                  echo "<option value='".$kdmapel->idmapel."'selected>".$kdmapel->idmapel."</option>";
                                }else{
                                  echo "<option value='".$kdmapel->idmapel."'>".$kdmapel->idmapel."&nbsp;&nbsp;&nbsp; ".$kdmapel->namamapel."</option>";
                                }
                              }
                            }
                  ?>
               </select>               
              </div>

               <!-- Menampilkan Data Kelas -->
               <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
               <select class="form-control select2" id="kdkelas" name="kdkelas" readonly style="width: 100%;>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("SELECT DISTINCT k.*
                                FROM nilai n JOIN siswa s on n.nis=s.nis 
                                join kelas k on n.idkelas=k.idkelas 
                                JOIN mapel m ON n.idmapel=m.idmapel 
                                join pengajar p ON n.nip=p.kdpengajar")->result();;
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
            </form>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>nama Kelas</th>
                  <th>Nama Mapel</th>
                  <th>Pengetahuan</th>
                  <th>Keterampilan</th>
                  <th>Sikap</th>
                  <th>KKM</th>
                  <th>Tahun Ajaran</th>
                  <th>Semester</th>
                 <!-- <th>Status</th> -->
                </tr>
                </thead>
                <tbody>
                  <?php foreach($list_data->result() as $row) { ?>            
                <tr>
                  <th><?php echo $row->nis;?></th>
                  <th><?php echo $row->namasiswa;?></th>
                  <th><?php echo $row->namakelas;?></th>
                  <th><?php echo $row->namamapel;?></th>
                  <th>
                  <?php 
                     $Pengetahuan=($row->tugas+$row->harian+$row->uts+$row->uas)/4;
                       echo $Pengetahuan;
                     ?></th>                    
                  <th>
                  <?php 
                    $sikap=$row->sikap;
                    echo $sikap;
                  ?>
                    
                  </th>
                  <th>
                  <?php 
                     $keterampilan=$row->keterampilan;
                      echo $keterampilan;
                    ?>
                                 
                  </th>
                  <th><?php echo $row->kkm;?></th>
                  <th><?php echo $row->tahunajaran;?></th>
                  <th><?php echo $row->semester;?></th>

                </tr>
                <?php } ?>
                </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>