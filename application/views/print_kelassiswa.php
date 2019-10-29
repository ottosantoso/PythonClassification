<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<table width="962" height="171" border="0">
  <tr>
    <td width="217" height="167" align="left"><img src="<?php echo base_url();?>images/telkom.jpg" width="210" height="141" /></td>
    <td width="573" align="center">    
    <h3>Data Siswa </h3>
    <h4>Sekolah Menengah Pertama Telkom Bandung</h4>
    <h4>Jl. Radio Palasari No.132, Kec. Daeyuh Kolot Kab. Bandung</h4>
    </td>
    <td width="150" align="right"><img src="<?php echo base_url();?>images/smp.jpg" /> </td>
  </tr>
  <!-- < ?php echo "Tanggal Cetak : ".date('d-m-Y'); ?><br><br>-->
</table>
<table border="1" width="100%">
<tr>
    <th>No</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
</tr>
<?php
if( ! empty($siswa)){
    $no = 1;
    foreach($siswa as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->nis."</td>";
        echo "<td>".$data->namasiswa."</td>";
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
</body>
</html>