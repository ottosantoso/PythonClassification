<?php
Class M_grafik extends CI_Model{

public function __construct()
	{
		$this->load->database();
	}
 
	public function report()
	{
		$this->db->select('*');
			$this->db->from('nilai');
			$query=$this->db->get();
			
			return $query->result();
			 
}

public function report_total()
	{
		$query = $this->db->query("SELECT n.idkelas, n.nis, n.nip, n.idmapel, n.semester, n.tugas, k.namakelas, AVG(tugas+harian+uts+uas+keterampilan+sikap) as Rata_rata FROM nilai n join kelas k ON n.idkelas=k.idkelas");
		return $query;
	}
	
	public function get_rata_rata(){
    $query=$this->db->query("SELECT DISTINCT b.idmapel, namamapel, rata_rata, b.idkelas, namakelas FROM nilai b JOIN (SELECT b.idmapel, AVG(uts+uas+keterampilan+sikap+harian+tugas) rata_rata , j.namamapel namamapel, k.namakelas namakelas FROM mapel j JOIN nilai b ON (j.idmapel = b.idmapel) JOIN kelas k ON (b.idkelas=k.idkelas) GROUP BY b.idmapel ORDER BY 2 desc) t ON t.idmapel = b.idmapel");
    return $query;
  }

  public function get_namakelas(){
    $query=$this->db->query("SELECT * from kelas");
    return $query;
  }

  public function get_all(){
  	
  		$query= $this->db->query("SELECT kelas.namakelas, nilai.idmapel, mapel.namamapel, AVG(tugas+harian+uts+uas+keterampilan+sikap) 
  										as mapel_all FROM kelas join NILAI USING(idkelas) join MAPEL USING(IDMAPEL) 
  										WHERE mapel.namamapel='Agama' 
  										OR mapel.namamapel='Bahasa Indonesia' 
  										OR mapel.namamapel='Penjas'
  										OR namamapel='Bahasa Inggris' ");
  		return $query;
  }
  public function get_ipa(){
  	
  		$query= $this->db->query("SELECT kelas.namakelas, nilai.idmapel, mapel.namamapel, AVG(tugas+harian+uts+uas+keterampilan+sikap) 
  										as mapel_ipa FROM kelas join NILAI USING(idkelas) join MAPEL USING(IDMAPEL) 
  										WHERE mapel.namamapel='IPA'");
  		return $query;
  }

  public function get_ips(){
  	
  		$query= $this->db->query("SELECT kelas.namakelas, nilai.idmapel, mapel.namamapel, AVG(tugas+harian+uts+uas+keterampilan+sikap) 
  										as mapel_ips FROM kelas join NILAI USING(idkelas) join MAPEL USING(IDMAPEL) 
  										WHERE mapel.namamapel='IPS'");
  		return $query;
  }

  public function get_pkn(){
  	
  		$query= $this->db->query("SELECT kelas.namakelas, nilai.idmapel, mapel.namamapel, AVG(tugas+harian+uts+uas+keterampilan+sikap) 
  										as mapel_pkn FROM kelas join NILAI USING(idkelas) join MAPEL USING(IDMAPEL) 
  										WHERE mapel.namamapel='PKN'");
  		return $query;
  }
}
?>