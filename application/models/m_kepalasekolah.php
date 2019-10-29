<?php
Class M_kepalasekolah extends CI_Model{

  public function graph()
  {
    $query = $this->db->query("SELECT n.idkelas, n.nis, n.nip, n.idmapel, n.semester, n.tugas, AVG(tugas+harian+uts+uas+keterampilan+sikap) Rata_rata, k.namakelas FROM nilai n join kelas k ON n.idkelas=k.idkelas");
    return $query;
  }

	function view_mapel(){
      if(!empty($this->input->post('kdmapel')) and !empty($this->input->post('kdkelas'))){
        $query=$this->db->query("SELECT DISTINCT n.nis, m.namamapel, s.namasiswa, kk.namakelas, n.tugas, n.uts, n.uas, n.harian, n.sikap, m.kkm, n.keterampilan , p.tahunajaran, p.semester FROM pengajar p join kelassiswa k on p.idkelas=k.idkelas join kelas kk on k.idkelas=kk.idkelas join mapel m on p.idmapel=m.idmapel join siswa s on k.nis=s.nis join nilai n on s.nis=n.nis where m.idmapel='".$this->input->post('kdmapel')."' and p.idmapel='".$this->input->post('kdmapel')."' and  n.idmapel='".$this->input->post('kdmapel')."' and n.idkelas='".$this->input->post('kdkelas')."'");
      }else{
        $query=$this->db->query("SELECT DISTINCT n.nis, m.namamapel, s.namasiswa, kk.namakelas, n.tugas, n.uts, n.uas, n.harian, n.sikap, m.kkm, n.keterampilan , p.tahunajaran, p.semester FROM pengajar p join kelassiswa k on p.idkelas=k.idkelas join kelas kk on k.idkelas=kk.idkelas join mapel m on p.idmapel=m.idmapel join siswa s on k.nis=s.nis join nilai n on s.nis=n.nis ");
      }
      
        return $query;
    }

    function get_nilai(){
     $query=$this->db->query("SELECT *
                                FROM nilai n JOIN siswa s on n.nis=s.nis 
                                join kelas k on n.idkelas=k.idkelas 
                                JOIN mapel m ON n.idmapel=m.idmapel 
                                join pengajar p ON n.nip=p.kdpengajar where keterampilan <m.kkm OR sikap < m.kkm OR (tugas+uts+uas+harian)/4 ");

      return $query;
    }

    function view_mapel2(){
      $query=$this->db->query("SELECT *, AVG(tugas+harian+uts+uas+keterampilan+sikap) from nilai where idmapel='".$this->input->post('kdmapel')."'");
      return $query;
    }

    public function GetPie(){
        $query=$this->db->query("SELECT AVG(tugas+harian+uts+uas+keterampilan+sikap) from nilai WHERE idmapel='".$this->input->post('kdmapel')."'");
        return $query;
}

  public function get_rata_rata(){
    $query=$this->db->query("SELECT DISTINCT b.idmapel, namamapel, rata_rata, b.idkelas, namakelas FROM nilai b JOIN (SELECT b.idmapel, (uts+uas+keterampilan+sikap+harian+tugas) / 6 rata_rata , j.namamapel namamapel, k.namakelas namakelas FROM mapel j JOIN nilai b ON (j.idmapel = b.idmapel) JOIN kelas k ON (b.idkelas=k.idkelas) GROUP BY b.idmapel ORDER BY 2 desc) t ON t.idmapel = b.idmapel");
    return $query;
  }
  public function get_rata_rata_kelas(){
    $query=$this->db->query("SELECT DISTINCT b.idmapel, namamapel, rata_rata, b.idkelas, namakelas FROM nilai b JOIN (SELECT b.idmapel, (uts+uas+keterampilan+sikap+harian+tugas) / 6 rata_rata , j.namamapel namamapel, k.namakelas namakelas FROM mapel j JOIN nilai b ON (j.idmapel = b.idmapel) JOIN kelas k ON (b.idkelas=k.idkelas) GROUP BY b.idmapel ORDER BY 2 desc) t ON t.idmapel = b.idmapel where b.idkelas='".$this->input->post('kdkelas')."'");
    return $query;
  }

  public function get_namakelas(){
    $query=$this->db->query("SELECT * from kelas");
    return $query;
  }

  public function report_total()
  {
    $query = $this->db->query("SELECT n.idkelas, n.nis, n.nip, n.idmapel, n.semester, n.tugas, k.namakelas, AVG(tugas+harian+uts+uas+keterampilan+sikap) as rata_rata FROM nilai n join kelas k ON n.idkelas=k.idkelas");
    return $query;
  }

  public function rank_kelas()
  {
    $query = $this->db->query("SELECT DISTINCT nilai.nis, namasiswa, rata_rata FROM nilai JOIN
                    (SELECT nilai.nis, siswa.namasiswa namasiswa, nilai.idmapel, AVG(uts+uas+keterampilan+sikap+harian+tugas) as rata_rata 
                                        FROM nilai JOIN siswa ON nilai.nis=siswa.nis GROUP BY nilai.nis ORDER BY rata_rata DESC) t ON nilai.nis = t.nis order by rata_rata desc");
    return $query;
  }

   public function rank_per_kelas()
  {
    $query = $this->db->query("SELECT DISTINCT nilai.nis, nilai.idkelas, namasiswa, rata_rata FROM nilai JOIN
                    (SELECT nilai.nis, siswa.namasiswa namasiswa, nilai.idmapel, AVG(uts+uas+keterampilan+sikap+harian+tugas) as rata_rata 
                                        FROM nilai JOIN siswa ON nilai.nis=siswa.nis 
                                        GROUP BY nilai.nis ORDER BY 2 DESC) t ON nilai.nis = t.nis WHERE nilai.idkelas='".$this->input->post('kdkelas')."' order by rata_rata desc");
    return $query;
  }
}

?>