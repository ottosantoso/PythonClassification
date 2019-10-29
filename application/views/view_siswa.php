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
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa Keseluruhan</h3> </br>

              <button id="addToTable" class="btn bg-maroon margin"> <a href="<?php echo base_url();?>index.php/c_siswa/index">Add </a><i class="fa fa-plus"></i>
              </button>              
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
                 <!-- <th>Status</th> -->
                  <th class="action">action</th>
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
                 <!-- <th></tr>/?php echo $row->status;?></th> -->
                  <th>
                  <?php echo anchor('/c_siswa/tampilan_update_siswa/'.$row->nis,'<em class="fa fa-pencil"></em>'); ?>
                  <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" <?php echo anchor('/c_siswa/hapus_siswa/'.$row->nis,'<em class="fa fa-trash-o"></em>');?>   
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