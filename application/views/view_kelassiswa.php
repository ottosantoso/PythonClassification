<section class="content-header">
      <h1>
        Student Class's Information
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="viewguru.php"><i class="fa fa-files-o"></i> Student Class</a></li>
        <li class="active">view Student</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student's Class Information</h3> </br>
             <!-- Untuk memilih menampilkan kelas -->
             <form action="<?php echo base_url();?>index.php/c_kelassiswa/view_siswa" method="post">
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
              <button id="addToTable" class="btn btn-success waves-effect waves-light"> <a href="<?php echo base_url();?>index.php/c_kelassiswa/kelassiswa">Add </a><i class="fa fa-plus"></i>
              </button>
              <!--<button id="addToTable" class="btn btn-success waves-effect waves-light"> <a href="< ?php echo base_url();?>index.php/c_kelassiswa/kelassiswa">Add </a><i class="fa fa-plus"></i>
              </button>-->
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Kelas</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($list_data->result() as $row) { ?>
                  <tr>
                  <th><?php echo $row->idkelas;?></th>
                  <th><?php echo $row->nis;?></th>
                  <th><?php echo $row->namasiswa;?></th>
                  <th>
                    <?php echo anchor('/c_kelassiswa/tampilan_update_kelassiswa/'.$row->no,'<em class="fa fa-pencil"></em>'); ?>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" <?php echo anchor('/c_kelassiswa/hapus_kelassiswa/'.$row->no,'<em class="fa fa-trash-o"></em>');?>
                  </th> 
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