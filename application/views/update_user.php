    <form action="<?php echo base_url();?>index.php/c_admin/update_user" method="post"> 
  <section class="content-header">
      <h1>
        Data User
        <small>Update</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
        <li><a href="#"> Update User </a></li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <!--Boddy Ubah Mapel -->

        
        <div class="box-body">
    <?php  foreach($list_data->result() as $row) {?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputNIP">Id Register</label>
                  <input type="text" class="form-control" id="idregister" name="idregister" value=<?php echo $row->idregister;?> readonly>
                </div>
              <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" id="username" name="username" value=<?php echo $row->username;?> placeholder="Username ">
                </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" id="password" name="password" value=<?php echo $row->password;?> placeholder="Password">
              </div>
               <div class="form-group">
                <label>Status Admin</label>
                <select class="form-control select2" name="statusadmin" style="width: 100%;">
                  <option selected="selected" ><?php echo $row->statusadmin ?> </option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="form-group">
                <label>Status Guru</label>
                <select class="form-control select2" name="statusguru" style="width: 100%;">
                  <option selected="selected" ><?php echo $row->statusguru ?> </option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="form-group">
                <label>Status Wali Kelas</label>
                <select class="form-control select2" name="statuswali" style="width: 100%;">
                  <option selected="selected" ><?php echo $row->statuswali ?> </option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="form-group">
                <label>Status Kepala Sekolah</label>
                <select class="form-control select2" name="statuskepalasekolah" style="width: 100%;">
                  <option selected="selected" ><?php echo $row->statuskepalasekolah ?> </option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
            <!-- /.col -->
          </div>
          </div>
       <?php  } ?>
      </div>
    
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="button" value="Cancel" class="btn btn-primary" onClick="history.go(-1);" />
        </div>
      </div>
  </section>
  </form>