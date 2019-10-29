<section class="content-header">
      <h1>
        Teacher's Information
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="viewguru.php"><i class="fa fa-files-o"></i> Guru</a></li>
        <li class="active">viewkelas</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas</h3> </br>
            </div>
            <!-- /.box-header 
            <div class="form-group">
                  <label>NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" value="" />
              </div>
                <div class="form-group">
                  <label>Nama Guru</label>
                  <input type="text" class="form-control" id="namaguru" name="namaguru" value="" placeholder=""/>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" id="idkelas" name="idkelas" value="" placeholder=" "/>
                </div>
              <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <input type="text" class="form-control" id="tahunajaran" name="tahunajaran" value="" placeholder=" ">
              </div>
              <div class="form-group">
                  <label>Semester</label>
                  <input type="text" class="form-control" id="semester" name="semester" value="" placeholder=" ">
              </div>
              <!--Tabel Untuk Approval Guru -->
              <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID MAPEL</th>
                  <th>Nama Mapel</th>
                  <th>NIP Pengajar</th>
                  <th>Nama Guru</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($list_data as $data): ?>
                    <tr>
                    <th><?php print $data->idmapel; ?></th>
                    <th><?php print $data->namamapel; ?></th>
                    <th><?php print $data->nip; ?></th>
                    <th><?php print $data->namaguru; ?></th>
                    <th><?php print $data->status; ?></th>
                    <th>
                      <a href="<?php print site_url("/c_wali/approval_nilai_switch_status/$data->idnilai"); ?>" onclick="return confirm('Anda yakin ingin mengubah status approval?')" class="btn btn-warning btn-xs">change status<i class="fa fa-refresh"></i></a>
                      <a href="<?php?>" class="btn btn-primary btn-xs">view<i class="fa fa-eye"></i></a>
                    </th>
                    </tr>
                  <?php endforeach; ?>
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