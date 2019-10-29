<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Deskripsi Raport</title>
</head>

<body>
<button class="btn btn-warning waves-effect waves-light m-b-5"> 
    <i class="fa fa-rocket"></i> 
    <span><a href="<?php echo base_url(); ?>index.php/c_cetak/deskripsi?nis=<?php echo $_GET['nis'];?>">Cetak </a></span> 
  </button><a>&nbsp;&nbsp;&nbsp;&nbsp;</a><input type="button" value="Back" class="btn btn-primary" onClick="history.go(-1);" /><br><br>
<table width="820" height="171" border="0">
  <tr>
    <td width="217" height="167" align="left"><center><img src="<?php echo base_url();?>images/telkom.jpg" width="210" height="141" /> </center> </td>
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
    <?php $nilai= ($x->tugas+$x->harian+$x->uts+$x->uas)/4;
        if($nilai>=96) {
            $index="A";
                    }
                elseif($nilai>=88){
                    $index="A-";
                    }
                elseif($nilai>=80){
                     $index="B+";
                    }
                elseif($nilai>=71){
                     $index="B";
                    }
                elseif($nilai>=63){
                     $index="B-";
                    }
                elseif($nilai>=55){
                     $index="C+";
                }
                elseif($nilai>=46){
                     $index="C";
                }
                elseif($nilai>=38){
                     $index="C-";
                }
                elseif($nilai>=30){
                     $index="D+";
                }else{
          $index="D";
        }
  ?>
    <?php if($index=="A"){
            echo $text_pengetahuan="Menguasai 86%-100% Kompetensi Inti (KI 3) Dengan Amat Baik.";
        }if($index=="A-" OR $index=="B+" OR $index=="B" OR $index=="B-" OR $index=="C+" OR $index=="C" OR $index=="C-" OR $index=="D+" OR $index=="D"){
            echo $text_pengetahuan="Menguasai 81%-85% kompetensi Inti (KI 3)  Dengan Baik.";
        }
  ?>
    </td>
  </tr>
  <tr>
    <td>Sikap</td>
    <td>
    <?php if($x->sikap>=80){
                    $index_sikap="SB";
               }
               elseif($x->sikap>=70){
                    $index_sikap="B";
               }
               elseif($x->sikap>=60){
                    $index_sikap="C";
               }
               else{
                    $index_sikap="K";
               }
        ?>
  <?php 
      if($index_sikap=="SB"){
        echo $text_sikap="Mempunyai Sikap Sangat Baik";
      }elseif($index_sikap=="B"){
        echo $text_sikap="Mempunyai Sikap Baik";
      }elseif($index_sikap=="C"){
        echo $text_sikap="Mempunyai Sikap Cukup Baik";
      }elseif($index_sikap=="K"){
        echo $text_sikap="Mempunyai Sikap Kurang Baik";
      }
  ?>
  </td>
    
  </tr>
  <tr>
    <td>Keterampilan</td>
    <td><?php 
                if($x->keterampilan>=96){
                    $index_keterampilan="A";
                }
                elseif($x->keterampilan>=88){
                    $index_keterampilan="A-";
                }
                elseif($x->keterampilan>=80){
                    $index_keterampilan="B+";
                }
                elseif($x->keterampilan>=71){
                    $index_keterampilan="B";
                }
                elseif($x->keterampilan>=63){
                    $index_keterampilan="B-";
                }
                elseif($x->keterampilan>=55){
                    $index_keterampilan="C+";
                }
                elseif($x->keterampilan>=46){
                    $index_keterampilan="C";
                }
                elseif($x->keterampilan>=38){
                    $index_keterampilan="C-";
                }
                elseif($x->keterampilan>=30){
                    $index_keterampilan="D+";
                }
                else{
                   $index_keterampilan="D";
                }
          ?> 
  <?php if($index_keterampilan=="A"){
            echo $text_keterampilan="Menguasai 86%-100% Kompetensi Inti (KI 4) Dengan Amat Baik.";
        }else{
      echo $text_keterampilan="Menguasai 81%-85% kompetensi Inti (KI 4)  Dengan Baik.";
        }
  ?></td>
    
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
    <center>
    <h5>Orang Tua Siswa</h5>
    &nbsp;
    &nbsp;
    &nbsp;
    <h5>(______________________)</h5>
    </center>
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
