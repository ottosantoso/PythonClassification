<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Raport Siswa</title>
</head>
 
<body>
<table width="962" height="171" border="0">
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
<table width="962" height="64" border="0">
  <tr>
    <td width="558" height="58">
    <p>Nama Sekolah  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: SMP Telkom Bandung</p>
    <p>Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Jl. Radio Palasari </p>
    <p>Nama&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $_GET['nama'];?></p>
    <p>Nomor Induk/NIS &nbsp; &nbsp;: <?php echo $_GET['nis'];?> </p>
    </td>
    <td width="385">
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kelas&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $_GET['kelas'];?></p>
    <p>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Semester &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <?php echo $_GET['semester'];?></p>
    <p>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;Tahun Pelajaran&nbsp; &nbsp; : <?php echo $_GET['thnajar'];?></p>
    </td>
  </tr>
</table>
 <!--
<p align="left" style="font:'Times New Roman', Times, serif"> NIS          : < ?php echo $_GET['nis'];?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Nama Siswa   : < ?php echo $_GET['nama'];?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Wali Kelas   : < ?php echo $_GET['guru'];?></p>
<p align="left" style="font:'Times New Roman', Times, serif"> Kelas    : < ?php echo $_GET['kelas'];?> </p>
<p align="left" style="font:'Times New Roman', Times, serif"> Tahun Ajaran   : < ?php echo $_GET['thnajar'];?> </p>
<p align="left" style="font:'Times New Roman', Times, serif"> Semester     : < ?php echo $_GET['semester'];?> </p>
-->
<table width="1012" height="167" border="1" style="border-color:#3CF">
  <tr>
    <td rowspan="2" align="center">Nama Mata Pelajaran</td>
    <td height="33" colspan="2" align="center">Pengetahuan</td>
    <td colspan="2" align="center">Keterampilan</td>
    <td colspan="2" align="center">Sikap Spritual dan Sosial</td>
  </tr>
  <tr>
    <td height="32" align="center">Angka</td>
    <td align="center">Index</td>
    <td align="center">Angka</td>
    <td align="center">Index</td>
    <td align="center">Angka</td>
    <td align="center">Antar Mapel</td>
  </tr>
  <?php foreach($list_data->result() as $row){ ?>
  <tr>
    <td height="47" align="center"><?php echo $row->namamapel; ?></td>
    <td align="center"><?php echo $nilai=($row->tugas+$row->harian+$row->uts+$row->uas)/4; ?></td>
    <td align="center"><?php  if($nilai>=96) {
                    echo $index="A";
                    }
                elseif($nilai>=88){
                    echo $index="A-";
                    }
                elseif($nilai>=80){
                    echo $index="B+";
                    }
                elseif($nilai>=71){
                    echo $index="B";
                    }
                elseif($nilai>=63){
                    echo $index="B-";
                    }
                elseif($nilai>=55){
                    echo $index="C+";
                }
                elseif($nilai>=46){
                    echo $index="C";
                }
                elseif($nilai>=38){
                    echo $index="C-";
                }
                elseif($nilai>=30){
                    echo $index="D+";
                }
        else{
            echo $index="D";
        }
                ?></td>
    <td align="center"><?php echo $row->keterampilan; ?></td>
    <td align="center">
          <?php 
                if($row->keterampilan>=96 and $row->keterampilan<=100){
                    echo $index_keterampilan="A";
                }
                if($row->keterampilan>=88 and $row->keterampilan<=95){
                    echo $index_keterampilan="A-";
                }
                if($row->keterampilan>=80 and $row->keterampilan<=87){
                    echo $index_keterampilan="B+";
                }
                if($row->keterampilan>=71 and $row->keterampilan<=79){
                    echo $index_keterampilan="B";
                }
                if($row->keterampilan>=63 and $row->keterampilan<=70){
                    echo $index_keterampilan="B-";
                }
                if($row->keterampilan>=55 and $row->keterampilan<=62){
                    echo $index_keterampilan="C+";
                }
                if($row->keterampilan>=46 and $row->keterampilan<=54){
                    echo $index_keterampilan="C";
                }
                if($row->keterampilan>=38 and $row->keterampilan<=45){
                    echo $index_keterampilan="C-";
                }
                if($row->keterampilan>=30 and $row->keterampilan<=37){
                    echo $index_keterampilan="D+";
                }
                if($row->keterampilan<30){
                   echo $index_keterampilan="D";
                }
          ?> 
    </td>
    <td align="center"> <?php if($row->sikap>=80 and $row->sikap<=100){
                    echo $deskripsi="SB";
                    }
                if($row->sikap>=70 and $row->sikap<=79){
                    echo $deskripsi="B";
                    }
                if($row->sikap>=60 and $row->sikap<=69){
                    echo $deskripsi="C";
                    }
                if($row->sikap<60){
                    echo $deskripsi="K";
                    }
                    ?></td>
    <td align="center">
        <?php 
            if(($row->namamapel=="PKN" and $deskripsi=="SB") OR ($row->namamapel=="Agama" and $deskripsi=="SB")) 
            {
                echo $nilaisikap='Sudah menunjukkan sikap menghargai dalam menerapkan sikap jujur, disiplin, tanggung jawab, toleransi, gotong royong, santun, dan percaya diri';
            }elseif (($row->namamapel=="PKN" and $deskripsi=="B") OR ($row->namamapel=="Agama" and $deskripsi=="B") ) {
                echo $nilaisikap='Sudah menunjukkan sikap menghayati dalam menerapkan sikap jujur, disiplin, tanggung jawab, toleransi, gotong royong, santun, dan percaya diri';
            }elseif (($row->namamapel=="PKN" and $deskripsi=="C") OR ($row->namamapel=="Agama" and $deskripsi=="C") ) {
                echo $nilaisikap='Sudah menunjukkan sikap konsisten dalam menerapkan sikap jujur, disiplin, tanggung jawab, toleransi, gotong royong, santun, dan percaya diri';
            }

         ?>
        
    </td>
  </tr>

  <?php } ?>
</table>
<table width="962" height="62" border="0">
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
    <h5><?php echo $_GET['guru'];?></h5>
    </td>
  </tr>
</table>
</body>
</html>
