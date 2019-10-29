<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Mapel SMP Telkom</h1>
<?php echo "Tanggal : ".date('d-m-Y'); ?><br><br>
<table border="1" width="100%">
<tr>
    <th>No</th>
    <th>Kode Mata Pelajaran</th>
    <th>Nama Mata Pelajaran</th>
    <th>Kriteria Ketuntasan Minimal (KKM)</th>
</tr>
<?php
if( ! empty($mapel)){
    $no = 1;
    foreach($mapel as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->idmapel."</td>";
        echo "<td>".$data->namamapel."</td>";
        echo "<td>".$data->kkm."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</table>
</body>
</html>