<section class="content-header">
      <h1>
        Informasi Data Kelas
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="viewguru.php"><i class="fa fa-files-o"></i> Guru</a></li>
        <li class="active">viewkelas</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas</h3> </br>
              <button id="addToTable" class="btn btn-success waves-effect waves-light"> <a href="<?php echo base_url();?>index.php/c_kelas/kelas">Add </a><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Tahun Ajaran</th>
                  <th>WaliKelas</th>
                  <th>Nama Wali Kelas</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!--<.?php foreach($list_data->result() as $row) { ?> query satu lagi -->
                <?php foreach($list_data as $row) { ?>
                  <tr>
                  <th><?php echo $row->idkelas;?></th>
                  <th><?php echo $row->namakelas;?></th>
                  <th><?php echo $row->tahunajaran;?></th>
                  <th><?php echo $row->walikelas;?></th>
                  <th><?php echo $row->namaguru;?></th>
                  <th>
                    <?php echo anchor('/c_kelas/tampilan_update_kelas/'.$row->idkelas,'<em class="fa fa-pencil"></em>'); ?>
                     <?php echo anchor('/c_kelas/view_siswa/'.$row->idkelas,'<em class="fa fa-fw fa-search"></em>'); ?>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" <?php echo anchor('/c_kelas/hapus_kelas/'.$row->idkelas,'<em class="fa fa-trash-o"></em>');?>
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