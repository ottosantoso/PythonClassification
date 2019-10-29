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