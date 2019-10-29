<section class="content-header">
      <h1>
        Grafik Nilai Siswa
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="view_siswa.php"><i class="fa fa-files-o"></i> Siswa</a></li>
        <li class="active">Grafik Data Nilai</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Grafik Nilai</h3> </br>        
              </div>
            <!-- /.box-header -->
            <form action="<?php echo base_url();?>index.php/c_kepalasekolah/rank_per_kelas" method="post">
                            <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
               <select class="form-control select2" name="kdkelas" readonly style="width: 100%;>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("select * from kelas")->result();
                            if(!empty($idkelas)){
                            foreach($idkelas as $kdkelas){
                                if($kdkelas->idkelas ==$idkelas){
                                  echo "<option value='".$kdkelas->idkelas."'selected>".$kdkelas->idkelas."</option>";
                                }else{
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."&nbsp;&nbsp;&nbsp;".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
               <button type="submit" name="view"  value="1" class="btn btn-primary">View</button>
      
      </form>
           
       <div class="form-group"> 
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Jumlah</th>
                  <th>Peringkat</th>
                </tr>
                </thead>
                <tbody>
                <!--<.?php foreach($list_data->result() as $row) { ?> query satu lagi -->
                
                <?php
                  $no=1; 
                  foreach($list_data->result() as $row) { ?>
                  <tr>
                   <th><?php echo $row->nis;?></th>
                  <th><?php echo $row->namasiswa;?></th>
                  <th><?php echo $row->rata_rata;?></th>
                  <th><?php echo $no; ?></th>
                  </tr>
                  <?php $no++;}  ?>
                </tbody>
            </table>
            </div>
       </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      </div>
  </div>
  </div> <!-- /.widget-inner -->
</div> <!-- /.widget-main --> 


        </div>
        <!-- /.col -->
      <!--div>
      <!-- /.row -->
    </section>