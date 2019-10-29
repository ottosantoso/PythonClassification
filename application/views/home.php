<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/all.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  
  <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>

<!-- Font Icons -->
       

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
     <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Raport Online</b>SMP Telkom</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
<!--Profile Acount untuk Log out-->
         <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>images/otto.png" class="img-circle" alt="User Image">

                 <p>
                  <?php echo $this->session->userdata('username');?>
                  <small><?php echo $this->session->userdata('username');?></small>
                  <small><?php echo $this->session->userdata('status');?></small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('C_login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
<!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      <!--
        <div id="slide" style="margin:auto;border-radius: 50px; height: 100px; width: 120px;" class="pull-left image">
              </?php
                  foreach ($foto->result() as $row) {
                    # code...
                    echo '<image style="height:100px;width:100px;" src="'. base_url().'/foto/'.$row->foto.'" />';
                  }
              ?>
        </div>
        -->
        <div class="user-panel">
        <div class="pull-left info">
          <h5><?php echo $this->session->userdata('username');?></h5>
          <a href="#"><i class="fa fa-circle text-success"></i><?php echo $this->session->userdata('status');?></a>
          <h5><?php echo $this->session->userdata('username');?></h5>
        </div>
      </div>
         <!-- sidebar menu: : style can be found in sidebar.less -->
 <ul class="sidebar-menu">
        <li class="header">LIST MENU</li>
        <li class="treeview">
          <a href="<?php echo base_url()?>index.php/c_admin/daftar">
            <i class="fa fa-dashboard"></i> <span>HOME</span></a>
        </li>
        <?php if( $this->session->userdata('statusadmin')=='Yes') {?> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user-md"></i> 
              <span>User</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
               <li><a href="<?php echo base_url()?>index.php/c_admin/daftar_user"><i class="fa fa-circle-o"></i> Tambah User</a></li>
               <li><a href="<?php echo base_url()?>index.php/c_admin/lihat_user"><i class="fa fa-circle-o"></i> View User</a></li>
            </ul>
        </li>
        <?php } ?>
        <!--Data Guru-->
        <?php if( $this->session->userdata('statusadmin')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span>GURU</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/c_admin/tambah_guru"><i class="fa fa-circle-o"></i> Tambah Data Guru</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_admin/lihat_guru"><i class="fa fa-circle-o"></i> View Data Guru</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_cetak/index"><i class="fa fa-circle-o"></i> Cetak Data Guru</a></li>
          </ul>
        </li>
        <?php } ?>
        <!-- Data Siswa -->
        <?php if( $this->session->userdata('statusadmin')=='Yes') {?> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-users"></i>
            <span>Siswa</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/c_siswa/index"><i class="fa fa-circle-o"></i>Tambah Siswa</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_siswa/lihat_siswa"><i class="fa fa-circle-o"></i> ViewSiswa</a></li>
             <li><a href="<?php echo base_url()?>index.php/c_cetak/siswa"><i class="fa fa-circle-o"></i> Cetak Data Siswa</a></li>
          </ul>
        </li>
        <?php } ?>
        <!--Data Kelas-->
        <?php if( $this->session->userdata('statusadmin')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span>Kelas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i><span> Data Kelas</span><i class="fa fa-angle-left pull-right"></i></a>
                 <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>index.php/c_kelas/kelas"><i class="fa fa-circle-o"></i> Tambah Data Kelas</a></li>
                    <li><a href="<?php echo base_url()?>index.php/c_kelas/lihat_kelas"><i class="fa fa-circle-o"></i> View Data Kelas</a></li>
                 </ul>
            </li>


            
            <!-- Menu Untuk Admin -->

            
            <li><a href="#"><i class="fa fa-circle-o"></i><span> Data Kelas Siswa</span><i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li>
                          <a href="<?php echo base_url()?>index.php/c_kelassiswa/kelassiswa"><i class="fa fa-circle-o"></i> Tambah Data Kelas Siswa</a>
                        </li>
                        <li>
                          <a href="<?php echo base_url()?>index.php/c_kelassiswa/lihat_kelassiswa"><i class="fa fa-circle-o"></i> View Data Kelas</a>
                        </li>
                 </ul>
            </li>
            
             <li><a href="<?php echo base_url()?>index.php/c_cetak/siswa"><i class="fa fa-circle-o"></i> Cetak Data Kelas Siswa</a></li>
          </ul>
        </li>
    <?php } ?>
        <!--Data NIlai -->
        <?php if( $this->session->userdata('statusguru')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span>Nilai</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/c_guru/tambah_nilai"><i class="fa fa-circle-o"></i> Tambah Nilai Siswa</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_guru/lihat_nilai"><i class="fa fa-circle-o"></i> View Nilai</a></li>
          </ul>
        </li>

        <?php }?>

        <!-- Menu Approval Nilai Wali Kelas -->
        <?php if( $this->session->userdata('statuswali')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span>Nilai</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/c_wali/approval_nilai"><i class="fa fa-circle-o"></i>Approval Nilai Siswa</a></li>
            <?php 
      $nipGuru= $this->session->userdata('username'); 
            $idkelas=$this->db->query("select k.idkelas from kelas k join pengajar p on p.idkelas=k.idkelas
                        where p.kdpengajar='".$nipGuru."'")->result(); ?>
            <li><a href="<?php echo base_url()?>index.php/c_wali/wali_nilai?idkelas=<?php foreach ($idkelas as $k) {echo $k->idkelas;} ?>">
         <i class="fa fa-circle-o"></i>Lihat Nilai Siswa</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_wali/lihat_kelulusan"><i class="fa fa-circle-o"></i> Nilai Kelulusan</a></li>
          </ul>
        </li>

        <?php }?>

        <!--Menu Approval Nilai Kepala Sekolah -->
        <?php if( $this->session->userdata('statuskepalasekolah')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span>File</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/c_kepalasekolah/lihat_kelulusan"><i class="fa fa-circle-o"></i>Lihat Status Nilai</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_kepalasekolah/lihat_nilai"><i class="fa fa-circle-o"></i> Lihat Data Nilai</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_kepalasekolah/lihat_grafik"><i class="fa fa-circle-o"></i>Grafik Nilai</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_kepalasekolah/lihat_kelas"><i class="fa fa-circle-o"></i>Data Grafik Nilai</a></li>
           <!-- <li><a href="< ?php echo base_url()?>index.php/c_grafik/view_grafik_mapel"><i class="fa fa-circle-o"></i>Coba Grafik Mapel</a></li>-->
            <li><a href="<?php echo base_url()?>index.php/c_kepalasekolah/rank_kelas"><i class="fa fa-circle-o"></i>Peringkat Kelas</a></li>
          </ul>
        </li>

        <?php }?>

        <!-- Menu Mapel admin-->
        <?php if( $this->session->userdata('statusadmin')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-book"></i>
            <span>Mata Pelajaran</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i><span> Mapel</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()?>index.php/c_mapel/mapel"><i class="fa fa-circle-o"></i> Tambah Mata Pelajaran</a></li>
                  <li><a href="<?php echo base_url()?>index.php/c_mapel/lihat_mapel"><i class="fa fa-circle-o"></i> View Mata Pelajaran</a></li>
                  <li><a href="<?php echo base_url()?>index.php/c_cetak/mapel"><i class="fa fa-circle-o"></i> Cetak Informasi Mata Pelajaran</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i><span> Pengajar </span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url()?>index.php/c_mapel/pengajar"><i class="fa fa-circle-o"></i> Tambah Pengajar</a></li>
                  <li><a href="<?php echo base_url()?>index.php/c_mapel/lihat_pengajar"><i class="fa fa-circle-o"></i> View Pengajar</a></li>
                  <!--<li><a href="< ?php echo base_url()?>index.php/c_cetak/pengajar"><i class="fa fa-circle-o"></i> Cetak Pengajar</a></li>-->
        </ul>
            </li>
          </ul>
        </li>
        <?php } ?>

        <!-- Cetak Nilai Raport -->
        <?php if( $this->session->userdata('statuswali')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-folder-open"></i>
            <span>Cetak File</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/c_cetak/wali_nilai?idkelas=<?php foreach ($idkelas as $k) {echo $k->idkelas;} ?>"><i class="fa fa-circle-o"></i> File Cetak Nilai</a></li>
            <!--<li><a href="< ?php echo base_url()?>index.php/c_wali/detail_raport"><i class="fa fa-circle-o"></i> File Detail Nilai</a></li>-->
          </ul>
        </li>
        <?php } ?>

        <!--Menu Cetak -->
        <?php if( $this->session->userdata('statusadmin')=='Yes') {?>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-folder-open"></i>
            <span>Cetak File</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>index.php/c_cetak/siswa"><i class="fa fa-circle-o"></i> File Siswa</a></li>
            <li><a href="<?php echo base_url()?>index.php/c_cetak/index"><i class="fa fa-circle-o"></i> File Guru</a></li>
            <!--<li><a href="< ?php echo base_url()?>index.php/c_cetak/pengajar"><i class="fa fa-circle-o"></i>File Pengajar</a></li>-->
            <li><a href="<?php echo base_url()?>index.php/c_cetak/mapel"><i class="fa fa-circle-o"></i> File Mata Pelajaran</a></li>
          </ul>
        </li>
        <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($content_view)?>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Telkom University</b> 
    </div>
    <strong>Copyright &copy; Otto Prayono Santoso Siahaan <a href="https://www.facebook.com/evan.wiliam.5"> D3 Manajemen Informatika</a></strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url();?>assets2/js/highcharts.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url();?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url();?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<!--form validation-->
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery.validate/jquery.validate.min.js"></script>
<!--form validation init-->
<script src="<?php echo base_url();?>assets/jquery.validate/form-validation-init.js"></script>
<script type="text/javascript">
    $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    //Initialize Select2 Elements
    $(".select2").select2();
   
    //Date picker
    $('#tanggallahir').datepicker({
      autoclose: true,
      dateFormat : "yy-mm-dd",
                changeMonth : true,
                changeYear : true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });

</script>
<script>
function myFunction() {
    var x = document.getElementById("nis").value;
    $("#namasiswa").val(x);
}
</script>
<!-- Script Asset_2 Untuk form register -->

</body>
</html>
