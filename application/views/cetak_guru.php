<html>
<head>
    <title>Cetak PDF</title>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

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

<center>
<h1 style="text-align">Daftar Guru SMP Telkom Bandung</h1>
<h2 style="text-align">Jalan Radio Palasari No.6, Kabupaten Bandung</h2>
<h4>Telp.(021)635267 web: www.telkomschools.co.id</h4>
</center>
	<button class="btn btn-warning waves-effect waves-light m-b-5"> 
		<i class="fa fa-rocket"></i> 
		<span><a href="<?php echo base_url("index.php/c_cetak/cetak"); ?>">Cetak </a></span> 
	</button><a>&nbsp;&nbsp;&nbsp;&nbsp;</a><input type="button" value="Back" class="btn btn-primary" onClick="history.go(-1);" /><br><br>

	<div class="panel-body">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
	<table id="datatable" class="table table-striped table-bordered">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Alamat</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
		</tr>
			<?php
				if( ! empty($guru)){
					$no = 1;
						foreach($guru as $data){
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$data->nip."</td>";
							echo "<td>".$data->namaguru."</td>";
							echo "<td>".$data->jeniskelamin."</td>";
							echo "<td>".$data->agama."</td>";
							echo "<td>".$data->alamat."</td>";
							echo "<td>".$data->tempatlahir."</td>";
							echo "<td>".$data->tanggallahir."</td>";
							echo "</tr>";
					$no++;
						}
				}
			?>
	</table>
			</div>
		</div>
	</div>
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