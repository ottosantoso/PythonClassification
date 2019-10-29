<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Deskripsi Raport</title>
</head>

<body>
<table width="820" height="171" border="0">
  <tr>
    <td width="217" height="167" align="left"><img src="<?php echo base_url();?>images/telkom.jpg" width="210" height="141" /></td>
    <td width="573" align="center">    
    <h3>Laporan</h3>
    <h4>Hasil Pencapaian Komptensi Peserta Didik</h4>
    <h4>Sekolah Menengah Pertama Telkom Bandung</h4>
    <h4>Jl. Radio Palasari No.132, Kec. Daeyuh Kolot Kab. Bandung</h4>
    </td>
    <td width="150" align="right"><img src="<?php echo base_url();?>images/smp.jpg" /> </td>
  </tr>
</table>
<table width="820" height="64" border="0">
  <tr>
    <td width="558" height="58">
    <p>Nama Sekolah  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: SMP Telkom Bandung</p>
    <p>Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Jl. Radio Palasari </p>
    <p>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $xx[0]->namasiswa;?></p>
    <p>Nomor Induk/NIS &nbsp; &nbsp;: <?php echo $xx[0]->nis;?> </p>
    </td>
    <td width="385">
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kelas&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $xx[0]->namakelas;?></p>
    <p>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Semester &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $xx[0]->Semester;?></p>
    <p>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Tahun Pelajaran&nbsp; &nbsp; : <?php echo $xx[0]->tahunajaran;?></p>
    </td>
  </tr>
</table>
<!-- 
<p align="left" style="font:'Times New Roman', Times, serif"> NIS          : < ?php echo $xx[0]->nis;?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Nama Siswa   : < ?php echo $xx[0]->namasiswa;?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Wali Kelas   : < ?php echo $xx[0]->namaguru;?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Kelas    : < ?php echo $xx[0]->namakelas;?> </p>
<p align="left" style="font:'Times New Roman', Times, serif"> Tahun Ajaran   : < ?php echo $xx[0]->tahunajaran;?> </p>
<p align="left" style="font:'Times New Roman', Times, serif"> Semester     : < ?php echo $xx[0]->Semester;?> </p>
-->
<table width="820" height="361" border="1">

  <tr>
    <td width="214" height="23">Mata Pelajaran</td>
    <td width="292">Kompetisi</td>
    <td width="254">Catatan</td>
  </tr>
 <?php foreach ($xx as $x) {?>
  <tr>
    <td height="100" rowspan="3"><?php echo $x->namamapel;?></td>
    <td>Pengetahuan</td>
    <td>
    <?php echo $x->pengetahuan?>
    </td>
  </tr>
  <tr>
    <td>Sikap</td>
    <td><?php echo $x->sikap?></td>
    
  </tr>
  <tr>
    <td>Keterampilan</td>
    <td><?php echo $x->keterampilan?></td>
    
  </tr>
  <?php } ?>
</table>
<table width="820" height="62" border="0">
  <tr>
    <td colspan="3"><h4 align="center">Mengetahui,</h4></td>
  </tr>
  <tr>
    <td width="311" align="left">
    <h5>Bandung, <?php echo " ".date('d-m-Y'); ?> </h5>
    
    <h5>Orang Tua Siswa</h5>
    &nbsp;
    &nbsp;
    &nbsp;
    <h5>(______________________)</h5>
    
    </td>
    <td width="292" align="center">
    &nbsp;
    <h5>Kepala Sekolah</h5>
    &nbsp;
    &nbsp;
    &nbsp;
    <h5>(_______________________)</h5>
    </td>
    <td width="337" align="center">
    &nbsp;
    <h5>Wali Kelas</h5>
    &nbsp;
    &nbsp;
    &nbsp;
    <h5><?php echo $x->namaguru;?></h5>
    </td>
  </tr>
</table>
</body>
</html>
