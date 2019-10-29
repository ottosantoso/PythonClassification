<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Daftar Siswa Kelas SMP Telkom Bandung</h1>
<h2 style="text-align: center;">Jalan Radio Palasari No.6, Kabupaten Bandung</h2>
<h4 style="text-align: center;">Telp.(021)635267 web: www.telkomschools.co.id</h4>
<?php echo "Tanggal : ".date('d-m-Y'); ?><br><br>
<table border="1" width="100%">
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
</body>
</html>