<?php
Class M_wali extends CI_Model{

	public function view_siswa_where(){
       $query=$this->db->query("select idnilai, nis, namasiswa,tugas,harian,uts,uas,keterampilan,sikap, nilai.idmapel, kelassiswa.idkelas from kelassiswa join nilai USING (nis) where kelassiswa.idkelas='".$this->input->post('kdkelas')."' and nilai.idmapel='".$this->input->post('kdmapel')."' and nilai.nip='".$this->session->userdata('username')."'");
        return $query->result();
    }

    public function view_siswa_where1(){
       $query=$this->db->query("select null as idnilai, nis, namasiswa,null as tugas,null as harian,null as uts,null as uas,null as keterampilan,null as sikap, '".$this->input->post('kdmapel')."' as idmapel, kelassiswa.idkelas from kelassiswa join pengajar using(idkelas) where kelassiswa.idkelas='".$this->input->post('kdkelas')."' and pengajar.idmapel='".$this->input->post('kdmapel')."' and pengajar.kdpengajar='".$this->session->userdata('username')."' order by namasiswa");
        return $query->result();
    }

    function view_siswa_where3(){
       $query=$this->db->query("select siswa.* from siswa join kelassiswa using(nis) join kelas using(idkelas) where kelassiswa.idkelas='".$_GET['idkelas']."'");
        return $query;
    }
	
	function siswa_nilai(){
       $query=$this->db->query("SELECT n.*, m.namamapel  
	   FROM nilai n JOIN mapel m on n.idmapel=m.idmapel JOIN kelas k on n.idkelas=k.idkelas WHERE nis='".$_GET['nis']."' AND n.semester='".$_GET['semester']."' AND n.idkelas='".$_GET['idkelas']."' ");
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

    function view_mapel(){
      if(!empty($this->input->post('kdmapel'))){
        $query=$this->db->query("SELECT DISTINCT n.nis, m.namamapel, s.namasiswa, kk.namakelas, n.tugas, n.uts, n.uas, n.harian, n.sikap, m.kkm, n.keterampilan , p.tahunajaran, p.semester FROM pengajar p join kelassiswa k on p.idkelas=k.idkelas join kelas kk on k.idkelas=kk.idkelas join mapel m on p.idmapel=m.idmapel join siswa s on k.nis=s.nis join nilai n on s.nis=n.nis where m.idmapel='".$this->input->post('kdmapel')."' and p.idmapel='".$this->input->post('kdmapel')."' and  n.idmapel='".$this->input->post('kdmapel')."'");
      }else{
        $query=$this->db->query("SELECT DISTINCT *
                                FROM nilai n JOIN siswa s on n.nis=s.nis 
                                join kelas k on n.idkelas=k.idkelas 
                                JOIN mapel m ON n.idmapel=m.idmapel 
                                join pengajar p ON n.nip=p.kdpengajar ");
      }
      
        return $query;
    }
}
?>