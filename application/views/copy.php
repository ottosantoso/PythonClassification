public function report()
	{
		$query = $this->db->query("SELECT n.idkelas, n.nis, n.nip, n.idmapel, n.semester, n.tugas, k.namakelas, AVG(tugas+harian+uts+uas+keterampilan+sikap) as Rata_rata FROM nilai n join kelas k ON n.idkelas=k.idkelas");
		return $query;
	}

	SELECT DISTINCT b.nis, AVG(jumlah) FROM nilai b JOIN (SELECT b.idmapel, b.nis, AVG(uts+uas+keterampilan+sikap+harian+tugas) jumlah FROM mapel j JOIN nilai b ON (j.idmapel = b.idmapel) JOIN kelas k ON (b.idkelas=k.idkelas) GROUP BY b.idmapel ORDER BY 2 desc) t ON t.idmapel = b.idmapel

	<section class="content-header">
      <h1>
        Grafik Nilai Siswa
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="view_siswa.php"><i class="fa fa-files-o"></i> Siswa</a></li>
        <li class="active">Grafik Data Nilai</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Grafik Nilai</h3> </br>        
              </div>
            <!-- /.box-header 
            <form action="< ?php echo base_url();?>index.php/c_kepalasekolah/view_mapel_nilai2" method="post">
              <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
               <select class="form-control select2" name="kdmapel" >
                 <option value=""> Pilih Mata Pelasjatan</option>
                 < ?php  
                      $idmapel=$data->idmapel;
                      $idmapel=$this->db->query("SELECT DISTINCT m.*
                                FROM nilai n JOIN siswa s on n.nis=s.nis 
                                join kelas k on n.idkelas=k.idkelas 
                                JOIN mapel m ON n.idmapel=m.idmapel 
                                join pengajar p ON n.nip=p.kdpengajar")->result();
                            if(!empty($idmapel)){
                              foreach ($idmapel as $kdmapel) {
                                if($kdmapel->idmapel ==$idmapel){
                                  echo "<option value='".$kdmapel->idmapel."'selected>".$kdmapel->idmapel."</option>";
                                }else{
                                  echo "<option value='".$kdmapel->idmapel."'>".$kdmapel->idmapel."&nbsp;&nbsp;&nbsp; ".$kdmapel->namamapel."</option>";
                                }
                              }
                            }
                  ?>
               </select>               
              </div>
               <button type="submit" name="view"  value="1" class="btn btn-primary">View</button>
      
      </form>
           -->
       <div class="form-group"> 
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Kelas</th>
                  <th>Nama Kelas</th>
                  <th>Id Mapel</th>
                  <th>Nama Mapel</th>
                  <th>Rata Rata Mapel</th>
                </tr>
                </thead>
                <tbody>
                <!--<.?php foreach($list_data->result() as $row) { ?> query satu lagi -->
                <?php foreach($list_data->result() as $row) { ?>
                  <tr>
                   <th><?php echo $row->idkelas;?></th>
                  <th><?php echo $row->namakelas;?></th>
                  <th><?php echo $row->idmapel;?></th>
                  <th><?php echo $row->namamapel;?></th>
                  <th><?php echo $row->rata_rata;?></th>
                  </tr>
                  <?php } ?>
                </tbody>
            </table>
            </div>
       </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>assets2/js/jquery.js"></script>
<script src="<?php echo base_url();?>asse2t/js/highcharts.js"></script>
<!-- end load library -->
 
<?php
    /* Mengambil query report*/
    $tamp="";
    $val=0;
    foreach($report->result() as $result){
        if ($tamp!=$result->namakelas) {          
          $namakelas[] = $result->namakelas; //ambil bulan
          $value[] = (double) $result->rata_rata; //ambil nilai
          $tamp=$result->namakelas;
        }
       
        
    }

    foreach ($namakelas_data->result() as $data) {
      for ($i=0; $i <1 ; $i++) { 
        if ($namakelas[$i]!=$data->namakelas) {
            $namakelas[] = $data->namakelas; //ambil bulan
            $value[] = (double) 0.0; //ambil nilai
      }
      }
      # code...
    }
    // foreach($report->result() as $result){
    //   $namatmp=$result->namakelas;
    //   foreach ($namakelas_data->result() as $data) {
    //     $namatmp2=$data->namakelas;
    //     if ($namatmp2==$namatmp) {
    //         if ($tamp!=$result->namakelas) {          
    //         $namakelas[] = $result->namakelas; //ambil bulan
    //         $value[] = (double) $result->rata_rata; //ambil nilai
    //         $tamp=$result->namakelas;
    //       }          # code...
    //     }else{
    //       $namakelas[] = $data->namakelas; //ambil bulan
    //       $value[] = (double) 0.0; //ambil nilai
    //     }
    //   }
    // }

    /* end mengambil query*/
     
?>
 </br>
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Report Reward',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: '',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($namakelas);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Nilai Reward'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'abc<b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,2) + '</b>, in '+ this.series.name;
             }
          },
        series: [{
            name: 'Nilai',
            data: <?php echo (json_encode($value,10));?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 2);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

        </script>

<!-- Grafik Total Keseluruhan -->

      </div>
      </div>
  </div>
  </div> <!-- /.widget-inner -->
</div> <!-- /.widget-main --> 


        </div>
        <!-- /.col -->
      <!--div>
      <!-- /.row -->
    </section>