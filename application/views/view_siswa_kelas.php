<section class="content-header">
      <h1>
        Student's Information by Idkelas
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="view_siswa.php"><i class="fa fa-files-o"></i> Student by Id Kelas</a></li>
        <li class="active">View Student</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa Berdasarkan Kode kelas</h3> </br>
              <input type="button" value="Back" class="btn btn-primary" onClick="history.go(-1);" />
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                 <!-- <th>Status</th> 
                  <th class="action">action</th>-->
                </tr>
                </thead>
                <tbody>
                  <?php foreach($list_data->result() as $row) { ?>
                <tr>
                  <th><?php echo $row->nis;?></th>
                  <th><?php echo $row->namasiswa;?></th>
                  <th><?php echo $row->jeniskelamin;?></th>
                  <th><?php echo $row->agama;?></th>
                  <th><?php echo $row->alamat;?></th>
                  <th><?php echo $row->tempatlahir;?></th>
                  <th><?php echo $row->tanggallahir;?></th>
                 <!-- <th></tr>/?php echo $row->status;?></th> 
                  <th>
                  < ?php echo anchor('/c_siswa/tampilan_update_siswa/'.$row->nis,'<em class="fa fa-pencil"></em>'); ?>
                  <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" < ?php echo anchor('/c_siswa/hapus_siswa/'.$row->nis,'<em class="fa fa-trash-o"></em>');?>   
                  </th>
                  -->
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