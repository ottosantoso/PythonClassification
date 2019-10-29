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
            
           <form action="<?php echo base_url();?>index.php/c_kepalasekolah/lihat_kelas" method="post">
              <div class="form-group">
               <label>Pilih Id Kelas Siswa</label>
               <select class="form-control select2" name="kdkelas" readonly style="width: 100%;>
                  <option value=""> Pilih ID KELAS SISWA</option>
                     <?php 
                        $idkelas=$data->idkelas;
                        $idkelas=$this->db->query("select * from kelas")->result();
                            if(!empty($idkelas)){
                            foreach($idkelas as $kdkelas){
                                if($kdkelas->idkelas ==$idkelas){
                                  echo "<option value='".$kdkelas->idkelas."'selected>".$kdkelas->idkelas."</option>";
                                }else{
                                  echo "<option value='".$kdkelas->idkelas."'>".$kdkelas->idkelas."&nbsp;&nbsp;&nbsp;".$kdkelas->namakelas."</option>"; 
                                } 
                            }
                            }
                      ?>
                </select>
              </div>
               <button type="submit" name="view"  value="1" class="btn btn-primary">View</button>
            </form>
           
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
    foreach($report->result() as $result){
        $namamapel[] = $result->namamapel; //ambil bulan
        $value[] = (double) $result->rata_rata; //ambil nilai
    }
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
            categories:  <?php echo json_encode($namamapel);?>
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