<section class="content-header">
      <h1>
        Pengajar Information
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="viewguru.php"><i class="fa fa-files-o"></i> Pengajar</a></li>
        <li class="active">viewpengajar</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <?= $this->session->flashdata('notif'); ?>
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengajar</h3> </br>
              <button id="addToTable" class="btn btn-success waves-effect waves-light"> <a href="<?php echo base_url();?>index.php/c_mapel/pengajar">Add </a><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kdpengajar</th>
                  <th>NIP</th>
                  <th>Nama Guru</th>
                  <th>ID KElas</th>
                  <th>Nama Kelas</th>
                  <th>ID Mapel</th>
                  <th>Nama Mapel</th>
                  <th>Tahun Ajaran</th>
                  <th>Semester</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!--<.?php foreach($list_data->result() as $row) { ?> query satu lagi -->
                <?php foreach($list_data as $row) { ?>
                  <tr>
                  <th><?php echo $row->kdpengajar;?></th>
                  <th><?php echo $row->nip;?></th>
                  <th><?php echo $row->namaguru;?></th>
                  <th><?php echo $row->idkelas;?></th>
                  <th><?php echo $row->namakelas;?></th>
                  <th><?php echo $row->idmapel;?></th>
                  <th><?php echo $row->namamapel;?></th>
                  <th><?php echo $row->tahunajaran;?></th>
                  <th><?php echo $row->semester;?></th>
                  <th>
                    <?php echo anchor('/c_mapel/tampilan_update_pengajar/'.$row->idpengajar,'<em class="fa fa-pencil"></em>'); ?>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" <?php echo anchor('/c_mapel/hapus_pengajar/'.$row->idpengajar,'<em class="fa fa-trash-o"></em>');?>
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