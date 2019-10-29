<section class="content-header">
      <h1>
        Informasi Data Guru
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="viewguru.php"><i class="fa fa-files-o"></i> Guru</a></li>
        <li class="active">viewguru</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Guru</h3> </br>
              <button id="addToTable" class="btn btn-success waves-effect waves-light"> <a href="<?php echo base_url();?>index.php/c_admin/tambah_guru">Add </a><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama Guru</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Status</th>
                  <th class="action">action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($list_data->result() as $row) { ?>
                <tr>
                  <th><?php echo $row->nip;?></th>
                  <th><?php echo $row->namaguru;?></th>
                  <th><?php echo $row->jeniskelamin;?></th>
                  <th><?php echo $row->agama;?></th>
                  <th><?php echo $row->alamat;?></th>
                  <th><?php echo $row->tempatlahir;?></th>
                  <th><?php echo $row->tanggallahir;?></th>
                  <th><?php echo $row->status;?></th>
                  <th>
                  <?php echo anchor('/c_admin/tampilan_update_guru/'.$row->nip,'<em class="fa fa-pencil"></em>'); ?>
                  <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" <?php echo anchor('/c_admin/hapus_guru/'.$row->nip,'<em class="fa fa-trash-o"></em>');?>   
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