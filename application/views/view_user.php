<section class="content-header">
      <h1>
        Daftar User
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="viewguru.php"><i class="fa fa-files-o"></i> User</a></li>
        <li class="active">view user</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3> </br>
              <button id="addToTable" class="btn btn-success waves-effect waves-light"> <a href="<?php echo base_url();?>index.php/c_admin/daftar_user">Add </a><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Register</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Status Admin</th>
                  <th>Status Guru</th>
                  <th>Status Wali Kelas</th>
                  <th>Kepala Sekolah</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!--<.?php foreach($list_data->result() as $row) { ?> query satu lagi -->
                <?php foreach($list_data->result() as $row) { ?>
                  <tr>
                  <th><a href=""><?php echo $row->idregister;?></a></th>
                  <th><?php echo $row->username;?></th>
                  <th><?php echo $row->password;?></th>
                  <th><?php echo $row->statusadmin;?></th>
                  <th><?php echo $row->statusguru;?></th>
                  <th><?php echo $row->statuswali;?></th>
                  <th><?php echo $row->statuskepalasekolah;?></th>

                  <th>
                    <?php echo anchor('/c_admin/tampilan_update_user/'.$row->idregister,'<em class="fa fa-pencil"></em>'); ?>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" <?php echo anchor('/c_user/hapus_user/'.$row->idregister,'<em class="fa fa-trash-o"></em>');?>
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