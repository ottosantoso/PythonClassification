<html>
<head>
    <title>Cetak PDF</title>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title></title>

        <!-- Base Css Files -->
        <link href="<?php echo base_url();?>assets_2/css/bootstrap.min.css" rel="stylesheet" />
		<!-- DataTables -->
        <link href="<?php echo base_url();?>assets_2/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

        <!-- Font Icons -->
        <link href="<?php echo base_url();?>assets_2/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets_2/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets_2/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="<?php echo base_url();?>assets_2/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="<?php echo base_url();?>assets_2/css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="<?php echo base_url();?>assets_2/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="<?php echo base_url();?>assets_2/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets_2/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url();?>assets_2/js/modernizr.min.js"></script>
</head>
<body>
<h1 style="text-align: center;">Data Pengajar SMP Telkom Bandung</h1>
<form action="<?php echo base_url();?>index.php/c_cetak/cetak_pengajar" method="post">
             <div class="form-group">
               <label>Pilih Data Kelas Pengajar Yang Dicetak</label>
               <select class="form-control select2" name="kdkelas" readonly style="width: 100%;>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("select DISTINCT k.* from pengajar p join kelas k on p.idkelas=k.idkelas")->result();
                            if(!empty($idkelas)){
                            foreach($idkelas as $kdkelas){
                                if($kdkelas->idkelas ==$idkelas){
                                  echo "<option value='".$kdkelas->idkelas."'selected>".$kdkelas->idkelas."</option>";
                                }else{
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."&nbsp;&nbsp;".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
              <button type="submit" name="print" value="1" class="btn btn-primary" class="fa fa-fw fa-print">ctk<span class="fa fa-fw fa-print"> </span></button> &nbsp;&nbsp;&nbsp;&nbsp;
              <button type="submit" name="view"  value="1" class="btn btn-primary">View</button>
              &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Back" class="btn btn-primary" onClick="history.go(-1);" />
              
    
   <!-- <button class="btn btn-warning waves-effect waves-light m-b-5"> 
                <i class="fa fa-rocket"></i> 
                <span><a href="/<.?php echo base_url("index.php/c_cetak/view_siswa"); ?>">View </a></span> 
                </button>
	<!--<button class="btn btn-warning waves-effect waves-light m-b-5"> 
		<i class="fa fa-rocket"></i> 
		<span><a href="</?php echo base_url("index.php/c_cetak/cetak_siswa"); ?>">View </a></span> -->
	</button><br><br>
	<div class="panel-body">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
	<table id="datatable" class="table table-striped table-bordered">
		<tr>
			<th>Kd Pengajar</th>
			<th>NIP</th>
			<th>Kelas</th>
			<th>Mapel</th>
			<th>Tahun Ajaran</th>
			<th>Semester</th>
		</tr>
			<?php
				if( ! empty($pengajar)){
					$no = 1;
						foreach($pengajar as $data){
							echo "<tr>";
							echo "<td>".$data->kdpengajar."</td>";
							echo "<td>".$data->nip."</td>";
							echo "<td>".$data->idkelas."</td>";
							echo "<td>".$data->idmapel."</td>";
							echo "<td>".$data->tahunajaran."</td>";
							echo "<td>".$data->semester."</td>";
							echo "</tr>";
					$no++;
						}
				}
			?>
	</table>
		    </div>
		</div>
	</div>
    </form>
		<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets_2/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets_2/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets_2/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets_2/js/wow.min.js"></script>
        <script src="<?php echo base_url();?>assets_2/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets_2/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url();?>assets_2/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets_2/jquery-detectmobile/detect.js"></script>
        <script src="<?php echo base_url();?>assets_2/fastclick/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets_2/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets_2/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="<?php echo base_url();?>assets_2/js/jquery.app.js"></script>
		
		
        <script src="<?php echo base_url();?>assets_2/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets_2/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

</body>
</html>