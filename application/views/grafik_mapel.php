<?php
    /* Mengambil query report*/
    // foreach($report->result() as $result){
    //     $namakelas[] = $result->namakelas; //ambil bulan
    //     $namamapel[] = $result->namamapel;
    //     $value[] = (double) $result->rata_rata; //ambil nilai
    // }
    // /* end mengambil query*/
     $tamp="";
    $val=0;
    foreach($mapel_all->result() as $result){
        if ($tamp!=$result->namakelas) {          
          $namakelas[] = $result->namakelas; //ambil bulan
          $value[] = (double) $result->mapel_all; //ambil nilai
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
  }
?>
</br>
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->

<script type="text/javascript">
(function($){
            $(document).ready(function(){
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Rata - Rata Nilai'
        },
        xAxis: {
            categories: <?php echo json_encode($namakelas);?>//select * from kelas
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rata - Rata Nilai Kelas'
            }
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true
        },
        plotOptions: {
            column: {
                stacking: 'percent'
            }
        },
        series: [{
            name: 'Agama',//ipa
            data: [1, 2, 3, 4, 5]//select nilai total perkelas where mpel ipa
        }, {
            name: 'PKN',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'Bahasa Indonesia',
            data: [5, 6, 3, 1, 7]
        }, {
            name: 'Bahasa Inggris',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'IPA',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'IPS',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'PENJAS',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'Bahasa Sunda',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'TIK',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'Matematika',
            data: [3, 4, 4, 2, 5]
        },{
            name: 'Seni Budaya',
            data: [3, 4, 4, 2, 5]
        }]
    });
});
            })(jQuery);
</script>
<div id="container" style="height: 400px"></div>