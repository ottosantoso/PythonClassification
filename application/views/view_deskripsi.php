<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Deskripsi</title>
</head>

<body> 
<p align="left" style="font:'Times New Roman', Times, serif"> NIS          : <?php echo $x->nis;?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Nama Siswa   : <?php echo $x->namasiswa;?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Wali Kelas   : <?php echo $x->namaguru;?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Kelas    : <?php echo $x->namakelas;?> </p>
<p align="left" style="font:'Times New Roman', Times, serif"> Tahun Ajaran   : <?php echo $x->tahunajaran;?> </p>
<p align="left" style="font:'Times New Roman', Times, serif"> Semester     : <?php echo $x->Semester;?> </p>

<table id="example1" class="table table-bordered table-striped" width="782" height="361" border="1">
  <tr>
    <td width="214" height="23">Mata Pelajaran</td>
    <td width="292">Kompetisi</td>
    <td width="254">Catatan</td>
  </tr>
  <tr>
    <td height="100" rowspan="3"><?php echo $x->namamapel;?></td>
    <td>Pengetahuan</td>
    <td><?php echo $x->pengetahuan?></td>
  </tr>
  <tr>
    <td>Keterampilan</td>
    <td><?php echo $x->keterampilan?></td>
    
  </tr>
  <tr>
    <td>Sikap</td>
    <td><?php echo $x->sikap?></td>
    
  </tr>
</table>
</body>
</html>
