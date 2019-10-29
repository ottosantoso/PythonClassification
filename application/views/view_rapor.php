<section class="content-header">
      <h1>
        Teacher's Information
        <small>Priview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="viewguru.php"><i class="fa fa-files-o"></i> Guru</a></li>
        <li class="active">viewkelas</li>
      </ol>
    </section>
   <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelas</h3> </br>
            </div>
            <!-- /.box-header -->
            <?php 
              $nipGuru= $this->session->userdata('username');
              $query=$this->db->query("select * from pengajar join guru using(nip) where kdpengajar='".$nipGuru."' limit 0,1")->result();
            ?>
              <div class="form-group">
                <label>Wali Kelas</label>
                <?php 
                foreach($query as $query){ echo '<textarea class="form-control" id="Nip" name="nip" value='. $query->nip.' readonly>'.$query->nip.'</textarea>'; }?>
                </div>

                <?php 
              $nipGuru= $this->session->userdata('username');
              $query=$this->db->query("select * from pengajar p join kelas k on p.nip=k.walikelas where kdpengajar='".$nipGuru."' limit 0,1")->result();
            ?>
              <div class="form-group">
                <label>Kelas</label>
                <?php 
                foreach($query as $query){ echo '<textarea class="form-control" id="idkelas" name="idkelas" value='. $query->idkelas.' readonly>'.$query->namakelas.'</textarea>'; }?>
                </div>

                <?php 
                  $nipGuru= $this->session->userdata('username');
                  $query=$this->db->query("select * from pengajar p join kelas k on p.nip=k.walikelas where kdpengajar='".$nipGuru."' limit 0,1")->result();
                ?>
              <div class="form-group">
                <label>Tahun Ajaran</label>
                <?php 
                  foreach($query as $query){ echo '<textarea class="form-control" id="idkelas" name="idkelas" value='. $query->tahunajaran.' readonly>'.$query->tahunajaran.'</textarea>'; }?>
                </div>
             <!-- <div class="form-group">
                  <label>Semester</label>
                  <input type="hidden" class="form-control" id="semester" name="semester" value="" placeholder=" ">
              </div>-->
              <div class="form-group">
                  <label>NIS</label>
                  <input type="text" class="form-control" id="nis" name="nis" value="15167088" placeholder=" ">
              </div>
              <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" id="namasiswa" name="namasiswa" value="Ajrina Firliansyah" placeholder=" ">
              </div>
              <!--Tabel Untuk Approval Guru -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" width="1012" height="167" border="1" style="border-color:#3CF">
                    <tr>
                      <td rowspan="2" align="center" valign="center">Nama Mata Pelajaran</td>
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
                    <!--< ?php foreach($list_data as $row) { ?>-->
                  <tr>
                      <td height="47" align="center">IPA</td>
                      <td align="center">80</td>
                      <td align="center">A</td>
                      <td align="center">85</td>
                      <td align="center">A</td>
                      <td align="center">75</td>
                      <td align="center">B</td>
                  </tr>
                   <!--< ?php } ?> -->
                </table>  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>