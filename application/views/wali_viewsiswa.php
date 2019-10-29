<section class="content-header">
      <h1>
        Student's Information
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="view_siswa.php"><i class="fa fa-files-o"></i> Siswa</a></li>
        <li class="active">View Siswa</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Guru</h3> </br>
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